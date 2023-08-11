<?php

use App\Http\Controllers\{
    ArticlesController,
    AuthorController,
};
use App\Http\Controllers\BookmarksController;
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

Route::group(['as' => 'article.'], function () {
    Route::get('/', [ArticlesController::class, 'index'])->name('index');
    Route::get('/article/{slug}', [ArticlesController::class, 'show'])->name('show');
});

Route::group(['as' => 'author.'], function () {
    Route::get('author/{id}', [AuthorController::class, 'show'])->name('show');
});

Route::group(['as' => 'bookmarks.'], function() {
    Route::get('/bookmark/{article}', [BookmarksController::class, 'bookmark'])->name('bookmark');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
