<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectRequestForm extends Model
{
    protected $table = 'project_requests_form';

    protected $fillable = [
        'input',
        'input_type',
        'options',
        'is_active',
        'created_at',
    ];
}
