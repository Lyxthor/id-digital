<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Rw extends Model
{
    //

    protected $guarded = ['id'];
    public function authorities() : MorphMany
    {
        return $this->morphMany(\App\Models\Authority::class, 'authorizable', 'domain_type', 'domain_id');
    }
    public function kelurahan()
    {
        return $this->belongsTo(\App\Models\Kelurahan::class, 'kelurahan_id', 'id');
    }
    public function rts()
    {
        return $this->hasMany(\App\Models\Rt::class, 'rw_id', 'id');
    }
    public function scopeWithSubDomains($query)
    {
        return $query->with(["kelurahan:id", "rts"]);
    }
}
