<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;


class Citizen extends Model
{
    protected $primaryKey='id';
    protected $hidden = ['documents'];
    protected $guarded =
    [
        'id'
    ];
    public function documents()
    {
        return $this->hasMany(\App\Models\Document::class, 'citizen_id', 'id');
    }
    public function user() : MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }
}
