<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasMedia;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'family',
        'position',
        'linkedin',
        'twitter',
        'bio',
        'github',
    ];

    public function fullName(): Attribute
    {
        return Attribute::make(get: fn() => $this->name . ' ' . $this->family);
    }


    public function scopeWhereName($query, $name)
    {
        return $query->where('name', $name);
    }


}
