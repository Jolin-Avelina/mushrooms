<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stem extends Model
{
    //
    protected $fillable = [
        "mushroom_id",
        "stem_height",
        'stem_width',
        'stem_root',
        'stem_surface',
        'stem_color'
    ];
    protected $casts = [
        'stem_height' => 'array',
        'stem_width' => 'array',
        'stem_root' => 'array',
        'stem_surface' => 'array',
        'stem_color' => 'array',
        'mushroom_id' => 'integer'
    ];
    public function mushroom(){
        return $this->BelongsTo(Mushroom::class);
    }
}
