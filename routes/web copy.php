<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test-route', function(){
    return ['success' => 'Muvaffaqiyatli'];
});

Route::get('test', function(){      // ushbu viewni quyidagicha 1 qator kod bilan ham yozsa bo'ladi
    return view('test');
});

Route::view('test new', 'test');

Route::get('user', function(){
    return 'Users';
});

Route::post('contact', function(){      // callback function
    return 'post route';
});

Route::get('/birinchi', function(){
    return 'birinchi route';
});

Route::get('/ikkinchi', function(){
    return 'ikkinchi route';
});

Route::redirect('/birinchi', '/ikkinchi');

Route::get('/user/{id}', function($id){     //Routga parametr berish
    return 'User '. $id;
});

Route::get('/users/{id}/photo/{photo_id}', function($user_id, $photo_id){
    return 'Sizning user id: '. $user_id . ' photo uchun id: '. $photo_id;
});

Route::get('/me/{id?}', function($my_id = null){    // null o'rniga istalgan qiymat ham berish mumkin
    return 'Mening id raqamim: '. $my_id;
});

Route::get('/his/{id?}', function($my_id = 5){   
    return 'Mening id raqamim: '. $my_id;
})->name('userlar');

Route::prefix('admin')->group(function() {

    Route::get('/his/{id?}', function($my_id = 5){   
        return 'Mening id raqamim: '. $my_id;
    })->name('userlar');

    Route::view('test-new', 'test');
});