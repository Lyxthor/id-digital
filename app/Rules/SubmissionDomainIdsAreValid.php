<?php

namespace App\Rules;

use App\Models\Officer;
use App\Models\Rt;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Arr;
use Mockery\Undefined;

class SubmissionDomainIdsAreValid implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    private $domains;
    private $usedPrivilege;
    private $author;
    private $authority;
    public function __construct($domains, $usedPrivilege, $authorId)
    {
        $this->domains = $domains;
        $this->usedPrivilege = $usedPrivilege;
        $this->author = Officer::find($authorId);
    }
    private array $authorities =
    [
        "kelurahan"=>["kelurahan", "rw", "rt"],
        "rw"=>["rw", "rt"],
        "rt"=>["rt"]
    ];
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if($this->domains == null) return;
        if($this->usedPrivilege == null) return;
        if($this->author == null) return;
        $this->CheckPrivilege($fail);
    }
    private function CheckPrivilege(Closure $fail)
    {
        if($this->AuthorNotExists($fail)) return;
        if($this->AuthorDoesntHaveAnyAuthority($fail)) return;
        if($this->AuthorDoesntHaveThisAuthority($this->usedPrivilege, $fail)) return;
        if($this->IsThereDomainBeyondAuthorAuthority($fail)) return;

        $authority = $this->authority;
        $domains = array_values($this->domains);
        //$models = Arr::except(config("morphmap"), ["citizen", "officer"]);
        foreach($domains as $domain)
        {
            $type = $domain['type'];
            foreach($domain['ids'] as $id_collections)
            {
                $id = $id_collections["id"];
                $domainId = $id_collections[$this->usedPrivilege."_id"];
                if($authority->authorizable_id != $domainId)
                {
                    $fail("$type domain with id $domainId is beyond author's authority");
                    return;
                }

                if($id != $domainId)
                {
                    $fail("id and $this->usedPrivilege's id doesn't match");
                    return;
                }
            }
        }
    }

    private function AuthorNotExists(Closure $fail) : bool
    {
        if($this->author == null)
        {
            $fail("Author doesn't exists");
            return true;
        }
        return false;
    }
    private function AuthorDoesntHaveAnyAuthority(Closure $fail) : bool
    {
        if($this->author->authorities == null)
        {
            $fail("Author doesn't have authorities");
            return true;
        }
        return false;
    }
    private function AuthorDoesntHaveThisAuthority($whatAuthority, Closure $fail) : bool
    {
        $authorities = $this->author->authorities->where('authorizable_type', $whatAuthority);
        if($authorities->isEmpty())
        {
            $fail("Author doesn't have $whatAuthority privilege");
            return true;
        }
        $this->authority = $authorities->first();
        return false;
    }
    private function IsThereDomainBeyondAuthorAuthority(Closure $fail) : bool
    {
        $domains_keys = array_map(function($item) {
            return $item['type'];
        }, $this->domains);
        $authorities_keys = array_keys($this->authorities);

        foreach($domains_keys as $dk)
        {
            if(!in_array($dk, $authorities_keys))
            {
                $fail("domain $dk doesn't exists");
                return true;
            }

            if(!in_array($dk, $this->authorities[$this->usedPrivilege]))
            {
                $fail("Domain $dk is beyond author's authority");
                return true;
            }
        }
        return false;
    }
}
