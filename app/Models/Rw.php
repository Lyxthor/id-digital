<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    //

    protected $guarded = ['id'];
    public function Kelurahan()
    {
        return $this->belongsTo(\App\Models\Kelurahan::class, 'kelurahan_id', 'id');
    }
    public function Rt()
    {
        return $this->hasMany(\App\Models\Rt::class, 'rw_id', 'id');
    }
}
