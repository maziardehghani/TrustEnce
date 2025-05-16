<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamAttrTitle extends Model
{
    protected $table = 'teams_attrs_title';

    protected $fillable = [
        'title',
        'input_type',
    ];

}
