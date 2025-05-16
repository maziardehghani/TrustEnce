<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectRequestValue extends Model
{
    protected $table = 'project_requests_values';

    protected $fillable = [
        'project_request_id',
        'project_request_form_id',
        'value'
    ];







}

