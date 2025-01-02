<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Rt extends Model
{
    //

    protected $guarded = ['id'];
    public function authorities() : MorphMany
    {
        return $this->morphMany(\App\Models\Authority::class, 'authorizable', 'domain_type', 'domain_id');
    }
    public function Rw()
    {
        return $this->belongsTo(\App\Models\Rw::class, 'rw_id', 'id');
    }
    public function scopeWithSubDomains($query)
    {
        return $query->with([]);
    }
}
