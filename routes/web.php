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
// Route::bind('id', function ($id) {
//     return Hash::decode($id);
// });
Route::group(['middleware'=>['auth']], function () {
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('photo', App\Http\Controllers\PhotoController::class);
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('pagination_data', [App\Http\Controllers\HomeController::class, 'pagination_data']);
    Route::get('nav_items', [App\Http\Controllers\HomeController::class, 'get_nav_item']);
    Route::get('/change-pass', [App\Http\Controllers\ChangePassController::class, 'index']);
    Route::post('update-pass', [App\Http\Controllers\ChangePassController::class, 'change_pass']);
        
});



Auth::routes();
