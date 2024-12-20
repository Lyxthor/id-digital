<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    //

    protected $guarded = ['id'];
    public function Rw()
    {
        return $this->belongsTo(\App\Models\Rw::class, 'rw_id', 'id');
    }
}
