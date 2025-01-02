<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    public function citizen()
    {
        return $this->belongsTo(\App\Models\Citizen::class, 'citizen_id', 'id');
    }
    public function documentType()
    {
        return $this->belongsTo(\App\Models\DocumentType::class, 'type_id', 'id');
    }
    protected $guarded = [
        'id'
    ];
}
