<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::resource('posts', PostController::class);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/', function () {
    return view('welcome');
});
