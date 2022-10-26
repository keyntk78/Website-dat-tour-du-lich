<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


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



// Route::get('/admin', [HomeController::class, 'index'])->name('home');

Auth::routes();
 Route::get('logout', [HomeController::class, 'getDangXuat'])->name('logout');

Route::prefix('admin')->middleware('adminLogin')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
   

    Route::prefix('user')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('create', [UserController::class, 'create'])->name('users.create');

        Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('edit/{id}', [UserController::class, 'postEdit']);

        Route::get('delete/{id}', [UserController::class, 'delete'])->name('users.delete');

    });
});