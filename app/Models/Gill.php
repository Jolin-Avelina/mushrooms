<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gill extends Model
{
    //
    protected $fillable = [
        'mushroom_id',
        "gill_attachment",
        "gill_spacing",
        "gill_color"
    ];
    protected $casts = [
        'gill_attachment' => 'array',
        'gill_spacing' => 'array',
        'gill_color' => 'array',
        'mushroom_id' => 'integer'
    ];
    
    public function mushroom(){
        return $this->belongsTo(Mushroom::class);
    }
    
}
