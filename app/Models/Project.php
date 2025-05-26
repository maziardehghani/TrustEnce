<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, HasMedia;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'intro',
        'description',
        'link',
        'is_active',
    ];

    protected $with = [
        'medias'
    ];

    public function scopeWhereActive($query)
    {
        return $query->where('is_active', true);
    }


    public function banner(): Attribute
    {
        return Attribute::make(get: function ($value) {
           return $this->medias()->where('type', 'banner')->first()?->url;
        });
    }


    public function background(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'background')->first()?->url;
        });
    }

}
