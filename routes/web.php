<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [PageController::class, 'main']);

Route::view('salom', 'salom');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('projects', [PageController::class, 'projects'])->name('projects');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::resource('posts', PostController::class);

Route::resources([
	'posts' => PostController::class,
    'comments' => CommentController::class,
    'users' => UserController::class
]);

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/{create}', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts/{create}', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{edit}', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{edit}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');


// Route::get('users', [UserController::class, 'name']);Route::get('/', [PageController::class, 'main']);



// Route::get('/users', [UserController::class, 'index']);     //'index' bu action

// Route::get('users/create', [UserController::class, 'create']); 

// Route::get('/users/{user}', [UserController::class, 'show']);

// Route::get('/users/{newadmin}/edit', [AdminController::class, 'edit']);

// Route::get('/users/{user}/edit', [UserController::class, 'edit']);

// Route::get('/admin/{admins}', [AdminController::class, 'show']);

// Route::post('/user-create', [UserController::class, 'store']);
