<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ring extends Model
{
    //
    protected $fillable = [
        "mushroom_id",
        "has_ring",
        "ring_type",
        "ring_color"
    ];
    protected $casts = [
        "mushroom_id"=>'integer',
        "has_ring"=>'boolean',
        "ring_type"=>'array',
        "ring_color"=>'array'
    ];
    public function mushroom()
    {
        return $this->BelongsTo(Mushroom::class);
    }
}
