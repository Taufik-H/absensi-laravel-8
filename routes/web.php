<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiswaController, PageController};


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


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){

    // siswa route
    Route::get('/',[SiswaController::class, 'index'])->name('dashboard');
    Route::get('post/list_siswa',[SiswaController::class, 'list'])->name('post.list_siswa');
    Route::get('post/create',[SiswaController::class, 'create'])->name('post.create');
    Route::post('post/store',[SiswaController::class, 'store'])->name('post.store');
    Route::post('proses',[SiswaController::class, 'store'])->name('proses');



    Route::get('pages/post',[PageController::class,'index'])->name('pages.post');
    Route::get('pages/create',[PageController::class,'create'])->name('pages.create');
    Route::post('pages/store',[PageController::class,'store'])->name('pages.store');
    Route::get('pages/content',[PageController::class,'content'])->name('pages.content');

    // admin route
    Route::get('admin/profile',[SiswaController::class, 'AdminProfile'])->name('admin.profile');
});


