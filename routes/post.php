<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController as Post;

Route::get('/', [Post::class , 'index'])->name('post.index');
Route::get('/create', [Post::class , 'create'])->name('post.create');
Route::post('/store', [Post::class , 'store'])->name('post.store');
Route::get('/show/{id}', [Post::class , 'show'])->name('post.show');
Route::get('/edit/{id}', [Post::class , 'edit'])->name('post.edit');
Route::post('/update/{id}', [Post::class , 'update'])->name('post.update');
Route::post('/destroy/{id}', [Post::class , 'destroy'])->name('post.destroy');
