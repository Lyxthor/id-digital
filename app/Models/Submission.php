<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $guarded = ['id'];
    public function document_requirements()
    {
        return $this->hasMany(\App\Models\DocumentRequirement::class, 'submission_id', 'id');
    }
    public function submission_domains()
    {
        return $this->hasMany(\App\Models\SubmissionDomain::class, 'submission_id', 'id');
    }
    public function submission_approvals()
    {
        return $this->hasMany(\App\Models\SubmissionApproval::class, 'submission_id', 'id');
    }
    public function scopeUserSubmission($query, $domainIds)
    {
        return $query
        ->whereRelation("submission_domains", "domain_type", "in", ["kelurahan", "rw", "rt"])
        ->whereRelation("submission_domains", "domain_id", "in", $domainIds);
    }
}
