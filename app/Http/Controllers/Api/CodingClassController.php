<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CodingClass;
use Illuminate\Http\JsonResponse;

class CodingClassController extends Controller
{
    public function index(): JsonResponse
    {
        $classes = CodingClass::where('is_active', true)
            ->orderBy('order')
            ->get();

        return response()->json($classes);
    }

    public function show(string $slug): JsonResponse
    {
        $class = CodingClass::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return response()->json($class);
    }
}
