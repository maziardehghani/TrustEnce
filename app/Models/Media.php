<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';

    protected $fillable = [
        'name',
        'url',
        'mediaable_type',
        'mediaable_id',
        'type',
    ];


    public function mediaable()
    {
        return $this->morphTo();
    }

    public function scopeWhereType($query, string $type)
    {
        return $query->where('type', $type);
    }



}
