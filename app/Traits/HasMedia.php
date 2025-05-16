<?php

namespace App\Traits;

use App\Models\Media;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasMedia
{
    public function medias(): MorphOne
    {
        return $this->morphOne(Media::class, 'mediaable');
    }

    public function mediaFile(): Attribute
    {
        return Attribute::make(fn() => $this->medias?->url);
    }
}
