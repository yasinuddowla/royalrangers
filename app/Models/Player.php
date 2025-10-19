<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'full_name',
        'jersey_name',
        'jersey_size',
        'trouser_size',
        'jersey_number',
        'photo',
        'whatsapp_link',
        'facebook_link',
        'cricheroes_profile_link',
    ];

    protected $casts = [
        'jersey_number' => 'integer',
    ];
}
