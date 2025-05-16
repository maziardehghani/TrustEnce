<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class ProjectRequestForm extends Model
{
    protected $table = 'project_requests_form';

    protected $fillable = [
        'input',
        'input_type',
        'options',
        'is_active',
        'form_page',
        'created_at',
    ];


    public function optionsValues(): Attribute
    {
        return Attribute::make(get: fn () => json_decode($this->options));
    }


    public function scopeWhereActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeWhereFormPage($query, $formPage)
    {
        return $query->where('form_page', $formPage);
    }


    public function scopeWhereInput($query, $input)
    {
        return $query->where('input', $input);
    }


}
