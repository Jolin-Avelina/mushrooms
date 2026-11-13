<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cap extends Model
{
    //
    protected $fillable = [
        "mushroom_id",
        "cap_size",
        'cap_shape',
        'cap_suriace',
        'cap_color'
    ];
    protected $casts = [
        'cap_size' => 'array',
        'cap_shape' => 'array',
        'cap_suriace' => 'array',
        'cap_color' => 'array',
        'mushroom_id' => 'integer'
    ];

    public function mushroom(){
        return $this->BelongsTo(Mushroom::class);
    }

    

}
