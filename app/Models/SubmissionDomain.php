<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SubmissionDomain extends Model
{
    //
    protected $guarded = ['id'];
    public function submission()
    {
        return $this->belongsTo(Submission::class,'submission_id','id');
    }
    public function domain() : MorphTo
    {
        return $this->morphTo('domain', 'domain_type', 'domain_id');
    }

}
