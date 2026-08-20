<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodingClass extends Model
{
    use HasFactory;

    protected $table = 'coding_classes';

    protected $fillable = [
        'name',
        'slug',
        'category',
        'icon',
        'description',
        'long_description',
        'topics',
        'level',
        'benefits',
        'schedule',
        'price_basic',
        'price_framework',
        'price_unit',
        'order',
        'is_active',
    ];

    protected $casts = [
        'topics' => 'array',
        'benefits' => 'array',
        'price_basic' => 'integer',
        'price_framework' => 'integer',
        'is_active' => 'boolean',
    ];
}
