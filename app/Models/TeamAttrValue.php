<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamAttrValue extends Model
{
    protected $table = 'teams_attrs_value';

    protected $fillable = [
        'team_id',
        'attr_title_id',
        'value',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function attrTitle(): BelongsTo
    {
        return $this->belongsTo(TeamAttrTitle::class);
    }


}
