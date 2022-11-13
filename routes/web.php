<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TinhController;
use App\Http\Controllers\LoaiTourController;
use App\Http\Controllers\DiaDiemController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ChiTietTourController;
use App\Http\Controllers\PageController;



// trang chủ
Route::get('/', [PageController::class, 'index'])->name('trangchu');
Route::get('/trangchu', [PageController::class, 'index'])->name('trangchu');


// trang chi tiet
Route::get('/chitiettour/{id}', [PageController::class, 'chitiettour'])->name('chitiettour');
Route::get('/loaitour', [PageController::class, 'loaitour'])->name('loaitour');
Route::get('/dangnhap', [PageController::class, 'dangnhap'])->name('dangnhap');
Route::get('/dangky', [PageController::class, 'dangky'])->name('dangky');







// Route::get('/admin', [HomeController::class, 'index'])->name('home');

Auth::routes();
 Route::get('logout', [HomeController::class, 'getDangXuat'])->name('logout');

Route::prefix('admin')->middleware('adminLogin')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
   
    // user
    Route::prefix('user')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('create', [UserController::class, 'create'])->name('users.create');

        Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('edit/{id}', [UserController::class, 'postEdit']);

        Route::get('delete/{id}', [UserController::class, 'delete'])->name('users.delete');

    });

    // tỉnh
    Route::prefix('tinh')->name('tinh.')->group(function(){
       Route::get('/', [TinhController::class, 'index'])->name('index');
       Route::get('/add', [TinhController::class, 'addTinh'])->name('add');
       Route::post('/add', [TinhController::class, 'postaddTinh']);
       Route::get('/edit/{id}', [TinhController::class, 'getEditTinh'])->name('edit');
       Route::post('/update', [TinhController::class, 'postEditTinh'])->name('post-edit');
       Route::get('/delete/{id}', [TinhController::class, 'deleteTinh'])->name('delete');
    });

    // loai tour
     Route::prefix('loaitour')->name('loaitour.')->group(function(){
       Route::get('/', [LoaiTourController::class, 'index'])->name('index');
       Route::get('/add', [LoaiTourController::class, 'addLoaiTour'])->name('add');
       Route::post('/add', [LoaiTourController::class, 'postaddLoaiTour']);
    //    Route::get('/edit/{id}', [TinhController::class, 'getEditTinh'])->name('edit');
    //    Route::post('/update', [TinhController::class, 'postEditTinh'])->name('post-edit');
    //    Route::get('/delete/{id}', [TinhController::class, 'deleteTinh'])->name('delete');
    });

    // Địa điểm
     Route::prefix('diadiem')->name('diadiem.')->group(function(){
       Route::get('/', [DiaDiemController::class, 'index'])->name('index');
       Route::get('/add', [DiaDiemController::class, 'addDiaDiem'])->name('add');
       Route::post('/add', [DiaDiemController::class, 'postaddDiaDiem']);
    //    Route::get('/edit/{id}', [TinhController::class, 'getEditTinh'])->name('edit');
    //    Route::post('/update', [TinhController::class, 'postEditTinh'])->name('post-edit');
    //    Route::get('/delete/{id}', [TinhController::class, 'deleteTinh'])->name('delete');
    });

    // Tour
     Route::prefix('tour')->name('tour.')->group(function(){
       Route::get('/', [TourController::class, 'index'])->name('index');
       Route::get('/add', [TourController::class, 'addTour'])->name('add');
       Route::post('/add', [TourController::class, 'postaddTour']);
       Route::get('/edit/{id}', [TourController::class, 'getEditTour'])->name('edit');
       Route::post('/update', [TourController::class, 'postEditTour'])->name('post-edit');
       Route::get('/delete/{id}', [TourController::class, 'deleteTour'])->name('delete');
    });

     // chi tiết tour
     Route::prefix('chitiettour')->name('chitiettour.')->group(function(){
       Route::get('/', [ChiTietTourController::class, 'index'])->name('index');
       Route::get('/add', [ChiTietTourController::class, 'addChiTietTour'])->name('add');
       Route::post('/add', [ChiTietTourController::class, 'postaddChiTietTour'])->name('post-add');
      //  Route::get('/edit/{id}', [TourController::class, 'getEditTour'])->name('edit');
      //  Route::post('/update', [TourController::class, 'postEditTour'])->name('post-edit');
      //  Route::get('/delete/{id}', [TourController::class, 'deleteTour'])->name('delete');
    });
    
});