<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ValidSubmissionDomain implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    private $domains;
    public function __construct($domains)
    {
        $this->domains = $domains;
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if($this->domains==null || $this->domains == [])
        {
            $fail("domains cant be empty");
            return;
        }
        $user = Auth::user();
        $models = config('morphmap');
        $domains = $this->domains;
        $usedPrivilege = $user->usedPrivilege->authorizable_type;
        $authorizableId = $user->usedPrivilege->authorizable_id;

        $data = $models[$usedPrivilege]::select(['id'])->withSubDomains()->find($authorizableId)->toArray();
        $data = $this->DispatchDomain($usedPrivilege, $data);
        foreach($domains as $d)
        {
            if(!in_array($d, $data))
            {
                $fail("Domain $d is beyond author's privilege");
                return;
            }
        }
    }

    private function DispatchDomain($domainName, $domains)
    {
        $result = [];
        foreach(array_keys($domains) as $key)
        {
            if(is_array($domains[$key]))
            {
                foreach($domains[$key] as $sd)
                {
                    array_push($result, Str::singular($key)."_".$sd['id']);
                }
            }
            else
            {
                array_push($result, $domainName."_".$domains[$key]);
            }
        }
        return $result;
    }
}
