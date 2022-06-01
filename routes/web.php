<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteUri;
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

// Route::get('/', function () {
//    return view('users.user.welcome');
// });

// Route::resource('merchant', MerchantController:class);
// Route::resource('product', ProductController:class)->except('create', 'edit');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/user', [App\Http\Controllers\UserControllers:class, 'index'])->name('user,'index');

Route::prefix('user')->name('user.')->group(function() {

    Route::middleware(['auth:web'])->group(function() {

        //Route:get('/, [App\Http\Controllers\UserControllers::class, 'index'])->name('home');

        Route::resource('merchant', MerchantController::class);
        Route::resource('product', ProductController::class);

        Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('index');
    });
});
