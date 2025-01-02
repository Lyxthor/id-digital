<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubmissionDomain extends Model
{
    //
    protected $guarded = ['id'];
    public function submission()
    {
        return $this->belongsTo(Submission::class,'submission_id','id');
    }
    
}
