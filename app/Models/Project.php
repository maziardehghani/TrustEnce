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

    public function mediaFile(): Attribute
    {
        return Attribute::make(fn() => $this->medias?->url);
    }

    public function scopeWhereActive($query)
    {
        return $query->where('is_active', true);
    }

}
