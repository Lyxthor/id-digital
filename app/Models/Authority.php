<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Authority extends Model
{
    public function officer()
    {
        return $this->belongsTo(Officer::class);
    }
    public function authorizable() : MorphTo
    {
        return $this->morphTo('authorizable', 'authorizable_type', 'authorizable_id');
    }
}
