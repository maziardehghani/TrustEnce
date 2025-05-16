<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable = [
        'name',
        'family',
    ];

    public function attr()
    {
        return $this->HasMany(TeamAttrValue::class, 'team_id', 'id');
    }

    public function position(): Attribute
    {
        return Attribute::make(get: fn() => $this->getAttr('position')->value);
    }

    public function fullName(): Attribute
    {
        return Attribute::make(get: fn() => $this->name . ' ' . $this->family);
    }

    public function getAttr($attr)
    {
        return TeamAttrValue::query()->whereHas('attrTitle', function ($query) use ($attr) {
            $query->where('title', $attr);
        })->first();
    }


    public function getAttrs($attr)
    {
        return TeamAttrValue::query()->whereHas('attrTitle', function ($query) use ($attr) {
            $query->where('title', $attr);
        })->get();
    }


}
