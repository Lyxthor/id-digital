<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubmissionApproval extends Model
{
    //
    protected $guarded = ['id'];
    public function submission()
    {
        return $this->belongsTo(\App\Models\Submission::class);
    }
    public function citizen()
    {
        return $this->belongsTo(\App\Models\Citizen::class);
    }
}
