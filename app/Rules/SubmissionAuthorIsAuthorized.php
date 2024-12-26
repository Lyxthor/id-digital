<?php

namespace App\Rules;

use App\Models\Officer;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class SubmissionAuthorIsAuthorized implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    public function __construct($domains)
    {

    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
        $author = Officer::find($value);
        foreach($author->authority as $authority)
        {
            
        }
    }
}
