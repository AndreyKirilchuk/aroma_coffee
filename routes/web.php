<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\PageController::class, 'index']);
Route::get('/login', [\App\Http\Controllers\PageController::class, 'login']);
Route::get('/register', [\App\Http\Controllers\PageController::class, 'register']);
Route::get('/catalog', [PageController::class, 'catalog']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(\App\Http\Middleware\UserCheck::class)->group(function () {
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profile']);
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

    Route::post('/user/update', [UserController::class, 'update']);

    Route::post('/products/{product}/favorites/add', [\App\Http\Controllers\ProductFavoriteController::class, 'store']);
    Route::post('/products/{product}/favorites/delete', [\App\Http\Controllers\ProductFavoriteController::class, 'destroy']);

    Route::get('/reviews/add', [\App\Http\Controllers\ReviewController::class, 'getAdd']);
    Route::post('/reviews/add', [\App\Http\Controllers\ReviewController::class, 'store']);
    Route::post('/reviews/{review}/delete', [\App\Http\Controllers\ReviewController::class, 'destroy']);
});

Route::middleware(\App\Http\Middleware\AdminCheck::class)->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('/products/create', [AdminController::class, 'getCreate']);
        Route::get('/products/{product}/update', [AdminController::class, 'getUpdate']);
        Route::post('/products', [ProductController::class, 'store']);
        Route::post('/products/{product}/update', [ProductController::class, 'update']);
        Route::post('/products/{product}/delete', [ProductController::class, 'destroy']);
    });
});
