<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
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

Route::prefix('/blog')->group(function () {

    //GET
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');

    // Route::get('/{id}', [PostsController::class, 'show'])->id('blog.show');
    // Route::get('/{id}', [PostsController::class, 'show'])->whereNumber('id');
    // Route::get('/{id}', [PostsController::class, 'show'])->where('id', '[0-9]+');

    // Route::get('/{name}', [PostsController::class, 'show'])->name('blog.show');
    // Route::get('/{name}', [PostsController::class, 'show'])->whereAlpha('name');
    // Route::get('/{name}', [PostsController::class, 'show'])->where('name', '[A-Za-z]+');

    // Route::get('/{id}/{name}', [PostsController::class, 'show'])->name('blog.show');
    // Route::get('/{id}/{name}', [PostsController::class, 'show'])->whereNumber('id')->whereAlpha('name');
    Route::get('/{id}/{name}', [PostsController::class, 'show'])->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

    //POST
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');

    //PUT PATCH
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::post('/1', [PostsController::class, 'update'])->name('blog.update');

    //DELETE
    Route::get('/edit/{id}', [PostsController::class, 'delete'])->name('blog.delete');

    // Route::any('/blog', [PostsController::class, 'index']);
});

Route::get('/', HomeController::class);
