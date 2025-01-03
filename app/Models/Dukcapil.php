<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Dukcapil extends Model
{
    protected $guarded=['id'];
    public function user() : MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }
}
