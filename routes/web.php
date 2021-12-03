<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', fn()=> view('dashboard'))->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->prefix('categories')->group(function () {
    Route::get('/index', [CategoriesController::class, 'index']);
    Route::get('/create', [CategoriesController::class, 'create']);
    Route::post('/create', [CategoriesController::class, 'createCategory']);
    Route::post('/{id}/create/post', [CategoriesController::class, 'createCategoryPost']);
    Route::get('/{id}/edit', [CategoriesController::class, 'updateView']);
    Route::patch('/{id}/edit', [CategoriesController::class, 'update']);
    Route::get('/{id}/delete', [CategoriesController::class, 'delete']);
    Route::get('/{id}/posts', [CategoriesController::class, 'posts']);
});

Route::middleware(['auth'])->prefix('post')->group(function () {
    Route::get('/index', [PostController::class, 'index']);
    // Route::get('/create', [CategoriesController::class, 'create']);
    // Route::post('/create', [CategoriesController::class, 'createCategory']);
    Route::get('/{id}/edit', [PostController::class, 'updateView']);
    Route::patch('/{id}/edit', [PostController::class, 'update']);
    // Route::get('/{id}/delete', [CategoriesController::class, 'delete']);
});



require __DIR__.'/auth.php';
