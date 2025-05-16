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
    ];

    public function attr()
    {
        return $this->HasMany(TeamAttrValue::class, 'team_id', 'id');
    }

    public function position(): Attribute
    {
        return Attribute::make(get: fn() => $this->getAttr('position')?->value);
    }

    public function bio(): Attribute
    {
        return Attribute::make(get: fn() => $this->getAttr('bio')?->value);
    }

    public function linkedin(): Attribute
    {
        return Attribute::make(get: fn() => $this->getAttr('linkedin')?->value);
    }

    public function twitter(): Attribute
    {
        return Attribute::make(get: fn() => $this->getAttr('twitter')?->value);
    }


    public function github(): Attribute
    {
        return Attribute::make(get: fn() => $this->getAttr('github')?->value);
    }

    public function fullName(): Attribute
    {
        return Attribute::make(get: fn() => $this->name . ' ' . $this->family);
    }

    public function getAttr($attr)
    {
        return TeamAttrValue::query()->whereHas('attrTitle', function ($query) use ($attr) {
            $query->where(['title'=> $attr, 'team_id'=> $this->id]);
        })->first();
    }


    public function getAttrs($attr)
    {
        return TeamAttrValue::query()->whereHas('attrTitle', function ($query) use ($attr) {
            $query->where('title', $attr);
        })->get();
    }

    public function scopeWhereName($query, $name)
    {
        return $query->where('name', $name);
    }


}
