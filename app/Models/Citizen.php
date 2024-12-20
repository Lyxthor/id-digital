<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Citizen extends Model
{
    protected $primaryKey='id';
    protected $guarded =
    [
        'id'
    ];
    public function documents()
    {
        return $this->hasMany(\App\Models\Document::class);
    }
}
