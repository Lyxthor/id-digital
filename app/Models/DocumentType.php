<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    //
    protected $guarded =
    [
        "id"
    ];
    public function documents()
    {
        return $this->hasMany(\App\Models\Document::class, 'type_id', 'id');
    }
}
