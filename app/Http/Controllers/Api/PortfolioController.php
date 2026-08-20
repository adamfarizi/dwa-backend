<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(): JsonResponse
    {
        $portfolios = Portfolio::with('category')
            ->where('is_active', true)
            ->orderByDesc('is_featured')
            ->orderByDesc('created_at')
            ->get();

        return response()->json($portfolios);
    }

    public function show(string $slug): JsonResponse
    {
        $portfolio = Portfolio::with('category')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return response()->json($portfolio);
    }

    public function categories(): JsonResponse
    {
        $categories = PortfolioCategory::where('is_active', true)
            ->orderBy('order')
            ->get();

        return response()->json($categories);
    }
}
