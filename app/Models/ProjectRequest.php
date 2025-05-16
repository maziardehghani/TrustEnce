<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProjectRequest extends Model
{
    protected $table = 'project_requests';

    protected $fillable = [
        'email'
    ];

    public function projectRequestValues(): HasMany
    {
        return $this->hasMany(ProjectRequestValue::class);
    }

    public function fullName(): Attribute
    {
        return Attribute::make(get: fn () => $this->getAttr('full_name')?->value );
    }

    public function phoneNumber(): Attribute {
        return Attribute::make(get: fn () => $this->getAttr('phone_number')?->value );
    }

    public function selectedService(): Attribute {
        return Attribute::make(get: fn () => $this->getAttr('select_service')?->value );
    }

    public function budgetRange(): Attribute {
        return Attribute::make(get: fn () => $this->getAttr('budget_range')?->value );
    }

    public function projectBrief(): Attribute {
        return Attribute::make(get: fn () => $this->getAttr('project_brief')?->value );
    }

    public function inquiry(): Attribute {
        return Attribute::make(get: fn () => $this->getAttr('inquiry')?->value );

    }

    public function termsConditions(): Attribute {
        return Attribute::make(get: fn () => $this->getAttr('term_conditions')?->value );

    }

    public function getAttr($attr)
    {
        return $this->projectRequestValues()->whereHas('formInput', function ($query) use ($attr) {
            $query->where('input', $attr);
        })->first();

    }


}
