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
        return $this->morphMany(\App\Models\Authority::class, 'authorizable', 'authorizable_type', 'authorizable_id');
    }
    public function submission_domains() : MorphMany
    {
        return $this->morphMany(\App\Models\SubmissionDomain::class, 'domain', 'domain_type', 'domain_id', 'id');
    }
    public function rw()
    {
        return $this->belongsTo(\App\Models\Rw::class, 'rw_id', 'id');
    }
    public function citizens()
    {
        return $this->hasMany(Citizen::class, 'rt_id', 'id');
    }
    public function scopeWithSubDomains($query)
    {
        return $query->with([]);
    }
}
