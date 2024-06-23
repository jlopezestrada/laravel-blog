<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::resource('posts', PostController::class);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/admin/posts/create', [PostController::class, 'create']);
Route::post('/admin/posts', [PostController::class, 'store']);
Route::get('/admin/posts/{id}/edit', [PostController::class, 'edit']);
Route::put('/admin/posts/{id}', [PostController::class, 'update']);
Route::delete('/admin/posts/{id}', [PostController::class, 'destroy']);