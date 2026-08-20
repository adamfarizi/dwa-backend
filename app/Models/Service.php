<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'icon',
        'tagline',
        'description',
        'long_description',
        'features',
        'technologies',
        'process',
        'cta',
        'cta_note',
        'link_to',
        'order',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'technologies' => 'array',
        'process' => 'array',
        'is_active' => 'boolean',
    ];
}
