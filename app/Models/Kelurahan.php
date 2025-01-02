<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Kelurahan extends Model
{

    protected $guarded = ['id'];
    public function authorities() : MorphMany
    {
        return $this->morphMany(\App\Models\Authority::class, 'authorizable', 'authorizable_type', 'authorizable_id');
    }
    public function submission_domains() : MorphMany
    {
        return $this->morphMany(\App\Models\SubmissionDomain::class, 'domain', 'domain_type', 'domain_id');
    }
    public function rws()
    {
        return $this->hasMany(\App\Models\Rw::class, 'kelurahan_id', 'id');
    }
    public function rts()
    {
        return $this->hasManyThrough(\App\Models\Rt::class, \App\Models\Rw::class, 'kelurahan_id', 'rw_id', 'id', 'id');
    }
    public function scopeWithSubDomains($query)
    {
        return $query->with(["rws:id,kelurahan_id","rts:rts.id,rw_id"]);
    }
}
