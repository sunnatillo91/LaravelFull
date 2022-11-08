<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
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
Route::get('/welcome', [PageController::class, 'welcome']);
Route::view('salom', 'salom');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('services', [PageController::class, 'services'])->name('services');




// Route::get('/users', [UserController::class, 'index']);     //'index' bu action

// Route::get('users/create', [UserController::class, 'create']); 

// Route::get('/users/{user}', [UserController::class, 'show']);

// Route::get('/users/{newadmin}/edit', [AdminController::class, 'edit']);

// Route::get('/users/{user}/edit', [UserController::class, 'edit']);

// Route::get('/admin/{admins}', [AdminController::class, 'show']);

// Route::post('/user-create', [UserController::class, 'store']);
