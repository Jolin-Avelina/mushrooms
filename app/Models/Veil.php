<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veil extends Model
{
    protected $fillable = [
    "mushroom_id",
    "veil_type",
    "veil_color"
    ];
    protected $casts = [
    "mushroom_id"=>'integer',
    "veil_color"=>'array'
    ];
    public function mushroom(){
        return $this->BelongsTo(Mushroom::class);
    }
}
