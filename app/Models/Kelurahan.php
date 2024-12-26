<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Kelurahan extends Model
{

    protected $guarded = ['id'];
    public function authorities() : MorphMany
    {
        return $this->morphMany(\App\Models\Authority::class, 'authorizable', 'domain_type', 'domain_id');
    }
    public function Rw()
    {
        return $this->hasMany(\App\Models\Rw::class, 'kelurahan_id', 'id');
    }
    public function Rt()
    {
        return $this->hasManyThrough(\App\Models\Rt::class, \App\Models\Rw::class, 'kelurahan_id', 'rw_id', 'id', 'id');
    }
}
