<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mushroom extends Model
{
    //
    use SoftDeletes;
    protected $fillable =
        [
            "name",
            "image_link",
            "wikipedia_link",
            "genus_name",
            "specific_name",
            "book_name",
            "edibility",
            "edibility_notes",
            "poisonous",
            "has_bruises",
            "spore_print",
            "habitat",
            "season",
            "enrichable"
        ];
    protected $casts = [
        "has_bruises" => 'boolean',
        "spore_print" => 'array',
        "habitat" => 'array',
        "season" => 'array',
        "enrichable" => 'boolean'
    ];
    public function cap()
    {
        return $this->hasOne(Cap::class);
    }
    public function gill()
    {
        return $this->hasOne(Gill::class);
    }
    public function stem()
    {
        return $this->hasOne(Stem::class);
    }
    public function veil()
    {
        return $this->hasOne(Veil::class);
    }
    public function ring()
    {
        return $this->hasOne(Ring::class);
    }
}
