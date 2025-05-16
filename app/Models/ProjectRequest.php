<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectRequest extends Model
{
    protected $table = 'project_requests';

    protected $fillable = [
        'email'
    ];
}
