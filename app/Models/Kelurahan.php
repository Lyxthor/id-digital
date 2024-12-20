<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Kelurahan extends Model
{

    protected $guarded = ['id'];
    public function Rw()
    {
        return $this->hasMany(\App\Models\Rw::class, 'kelurahan_id', 'id');
    }
    public function Rt()
    {
        return $this->hasManyThrough(\App\Models\Rt::class, \App\Models\Rw::class, 'kelurahan_id', 'rw_id', 'id', 'id');
    }
}
