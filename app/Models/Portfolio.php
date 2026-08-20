<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'type',
        'description',
        'long_description',
        'screenshot',
        'technologies',
        'client',
        'year',
        'url',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'technologies' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }
}
