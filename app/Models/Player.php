<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'full_name',
        'jersey_name',
        'role',
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
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Get the CSS classes for the player's role badge
     */
    public function getRoleBadgeClasses(): string
    {
        return match($this->role) {
            'Batsman' => 'bg-green-100 text-green-800',
            'Bowler' => 'bg-red-100 text-red-800',
            'All-Rounder' => 'bg-purple-100 text-purple-800',
            default => 'bg-gray-100 text-gray-800'
        };
    }
}
