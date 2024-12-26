<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Officer extends Model
{
    protected $guarded =
    [
        'id'
    ];
    public function user() : MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }
    public function authorities()
    {
        return $this->hasMany(Authority::class);
    }
}
