<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'thumbnail',
        'author',
        'published_at',
        'read_time',
        'tags',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'tags' => 'array',
        'published_at' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }
}
