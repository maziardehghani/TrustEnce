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
        'category_name',
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


    public function gallery_1(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_1')->first()?->url;
        });
    }


    public function gallery_2(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_2')->first()?->url;
        });
    }


    public function gallery_3(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_3')->first()?->url;
        });
    }



    public function gallery_4(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_4')->first()?->url;
        });
    }



    public function gallery_5(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_5')->first()?->url;
        });
    }


    public function gallery_6(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_6')->first()?->url;
        });
    }



    public function gallery_7(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_7')->first()?->url;
        });
    }



    public function gallery_8(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_8')->first()?->url;
        });
    }



    public function gallery_9(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_9')->first()?->url;
        });
    }



    public function gallery_10(): Attribute
    {
        return Attribute::make(get: function ($value) {
            return $this->medias()->where('type', 'gallery_10')->first()?->url;
        });
    }


}
