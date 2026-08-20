<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\JsonResponse;

class ArticleController extends Controller
{
    public function index(): JsonResponse
    {
        $articles = Article::with('category')
            ->where('is_active', true)
            ->orderByDesc('published_at')
            ->get();

        return response()->json($articles);
    }

    public function show(string $slug): JsonResponse
    {
        $article = Article::with('category')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return response()->json($article);
    }

    public function categories(): JsonResponse
    {
        $categories = ArticleCategory::where('is_active', true)
            ->orderBy('order')
            ->get();

        return response()->json($categories);
    }
}
