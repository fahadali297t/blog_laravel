<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserController::class, 'showDash'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/analytics', [UserController::class, 'analytics'])->name('user.blog.analytics');
    Route::get('/user/blogs', [UserController::class, 'list_blogs'])->name('user.blogs');


    // Blogs Route:
    Route::get('/blogs/new', [BlogController::class, 'newBlog'])->name('blog.new.form');
    Route::post('/blogs/new/submit', [BlogController::class, 'newBlog_submit'])->name('blog.new.submit');
});

require __DIR__ . '/auth.php';


// Our Custom Routes

Route::get('blogs', [BlogController::class, 'list']);
Route::get('users', [UserController::class, 'UserList']);
Route::get('categories', [CategoryController::class, 'categoryList']);
