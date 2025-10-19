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
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'jersey_number' => 'integer',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}
