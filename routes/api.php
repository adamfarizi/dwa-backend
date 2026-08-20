<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CodingClassController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\PortfolioController;
use App\Http\Controllers\Api\ServiceController;
use Illuminate\Support\Facades\Route;

// Public API Routes
Route::prefix('v1')->group(function () {
    // Portfolios
    Route::get('/portfolios', [PortfolioController::class, 'index']);
    Route::get('/portfolios/{slug}', [PortfolioController::class, 'show']);
    Route::get('/portfolio-categories', [PortfolioController::class, 'categories']);

    // Articles
    Route::get('/articles', [ArticleController::class, 'index']);
    Route::get('/articles/{slug}', [ArticleController::class, 'show']);
    Route::get('/article-categories', [ArticleController::class, 'categories']);

    // Services
    Route::get('/services', [ServiceController::class, 'index']);
    Route::get('/services/{slug}', [ServiceController::class, 'show']);

    // Coding Classes
    Route::get('/classes', [CodingClassController::class, 'index']);
    Route::get('/classes/{slug}', [CodingClassController::class, 'show']);

    // Contact
    Route::post('/contact', [ContactController::class, 'store']);
});
