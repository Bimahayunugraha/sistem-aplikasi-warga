<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\CategoryKeluhanController;
use App\Http\Controllers\UserKeluhanController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserDiskusiController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\AdminTanggapanController;
use App\Http\Controllers\AdminKeluhanController;

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
    return view('index', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/diskusi', [ForumController::class, 'index'])->name('diskusi');
    Route::get('/diskusi/{forum:slug}', [ForumController::class, 'show']);
    Route::post('/diskusi/{forum:slug}', [ForumController::class, 'postComment']);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', 'DashboardAdminController@index')->name('dashboard-admin');
    Route::get('/admin/kategorikeluhan/checkSlug', [CategoryKeluhanController::class, 'checkSlug']);
    Route::resource('/admin/kategorikeluhan', CategoryKeluhanController::class);
    Route::resource('tanggapan', 'AdminTanggapanController'); 
    // Route::get('admin/tanggapan', 'AdminTanggapanController@show')->name('tanggapan.show'); 
    Route::resource('admin/datakeluhan', 'AdminKeluhanController');
    Route::get('admin/datakeluhan', 'AdminKeluhanController@index'); 
    Route::get('admin/datakeluhan/detail', 'AdminKeluhanController@show')->name('datakeluhan.detail'); 
    Route::get('admin/datakeluhan/detail/tanggapan/{id}', 'AdminKeluhanController@tanggapan')->name('datakeluhan.tanggapan'); 
    Route::get('admin/datakeluhan/proses/{id}', 'AdminKeluhanController@proses')->name('datakeluhan.proses'); 
    Route::get('admin/datakeluhan/selesai/{id}', 'AdminKeluhanController@selesai')->name('datakeluhan.selesai'); 
    Route::get('admin/datakeluhan/{id}', 'AdminKeluhanController@index');
    Route::get('admin/datavoting/checkSlug', 'CandidateController@checkSlug');
    Route::get('admin/datavoting/ditutup/{id}', 'CandidateController@tutup')->name('voting.tutup');
    // Route::get('datavoting/create', [CandidateController::class, 'create'])->name('voting.create');
    // Route::get('datavoting/{id}', [CandidateController::class, 'edit'])->name('voting.edit');
    // Route::put('datavoting/{id}', [CandidateController::class, 'update'])->name('voting.update');
    Route::resource('datavoting', 'CandidateController');
});

Route::middleware(['auth', 'warga'])->group(function () {
    Route::get('/user',[DashboardUserController::class, 'index'])->name('dashboard-warga'); 
    Route::get('/user/keluhan/checkSlug', [UserKeluhanController::class, 'checkSlug']);
    Route::resource('/user/keluhan', UserKeluhanController::class);
    Route::get('/user/diskusi/checkSlugDiskusi', [UserDiskusiController::class, 'checkSlugDiskusi']);
    Route::resource('/user/diskusi', UserDiskusiController::class);
    Route::get('voting', 'ChoiceController@index')->name('voting.choices');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
