<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mushroom extends Model
{
    //
    protected $fillable = [
        'name',
        'image_link',
        'wikipedia_link',
        'genus_name',
        'specific_name',
        'book_name',
        'edibility',
        'edibility_notes'
    ];
}
