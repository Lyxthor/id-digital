<?php

namespace App\Rules;

use App\Models\Citizen;
use App\Models\Document;
use App\Models\DocumentType;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\ValidationException;

class OnlyOneTypeOfDocument implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    private $citizen;
    public function __construct($citizen_id)
    {
        $this->citizen = Citizen::find($citizen_id);
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if($this->citizen==null)
            return;

        $document=$this->citizen->documents->where("type_id", $value);
        if($document->count() > 0) // fail the validation if citizen already have a document with the same type
        {
            $type_name = $document->first()->documentType->name;
            $nik = $this->citizen->nik;
            $fail("The document with type of ".$type_name." already exists for citizen ".$nik);
        }
    }

}
