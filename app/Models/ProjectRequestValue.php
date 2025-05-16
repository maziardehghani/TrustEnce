<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectRequestValue extends Model
{
    protected $table = 'project_requests_values';

    protected $fillable = [
        'project_request_id',
        'project_request_form_id',
        'value'
    ];

    public function formInput(): BelongsTo
    {
        return $this->belongsTo(ProjectRequestForm::class, 'project_request_form_id');
    }


    public function projectRequest(): BelongsTo
    {
        return $this->belongsTo(ProjectRequest::class);
    }





}

