<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MKController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TestingController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');

route::get('/rekomendasi', [RekomendasiController::class, 'rekomendasi'])->name('rekomendasi');
route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('createmahasiswa');
route::post('/mahasiswa/create/post', [MahasiswaController::class, 'createPost'])->name('postmahasiswa');
route::get('/mahasiswa/update/{id}', [MahasiswaController::class, 'edit'])->name('updatemahasiswa');
route::post('/mahasiswa/update/post/{id}', [MahasiswaController::class, 'editpost'])->name('postupdatemahasiswa');
route::get('/delete/mahasiswa/{id}', [MahasiswaController::class, 'hapus'])->name('deletemahasiswa');

route::get('/mk', [MKController::class, 'index'])->name('mk');
route::get('/mk/create', [MKController::class, 'create'])->name('createmk');
route::post('/mk/create/post', [MKController::class, 'createPost'])->name('postmk');
route::get('/mk/update/{id}', [MKController::class, 'edit'])->name('updatemk');
route::post('/mk/update/post/{id}', [MKController::class, 'editpost'])->name('postupdatemk');
route::get('/delete/mk/{id}', [MKController::class, 'hapus'])->name('deletemk');

route::get('/nilai', [NilaiController::class, 'index'])->name('nilai');
route::get('/nilai/create', [NilaiController::class, 'create'])->name('createnilai');
route::post('/nilai/create/post', [NilaiController::class, 'createPost'])->name('postnilai');
route::get('/nilai/update/{id}', [NilaiController::class, 'edit'])->name('updatenilai');
route::post('/nilai/update/post/{id}', [NilaiController::class, 'editpost'])->name('postupdatenilai');
route::get('/delete/nilai/{id}', [NilaiController::class, 'hapus'])->name('deletenilai');

route::get('/training', [TrainingController::class, 'index'])->name('training');
route::get('/training/create', [TrainingController::class, 'create'])->name('createtraining');
route::post('/training/create/post', [TrainingController::class, 'createPost'])->name('posttraining');
route::get('/training/update/{id}', [TrainingController::class, 'edit'])->name('updatetraining');
route::post('/training/update/post/{id}', [TrainingController::class, 'editpost'])->name('postupdatetraining');
route::get('/delete/training/{id}', [TrainingController::class, 'hapus'])->name('deletetraining');

route::get('/testing', [TestingController::class, 'index'])->name('testing');
route::get('/testing/create', [TestingController::class, 'create'])->name('createtesting');
route::post('/testing/create/post', [TestingController::class, 'createPost'])->name('posttesting');
route::get('/testing/update/{id}', [TestingController::class, 'edit'])->name('updatetesting');
route::post('/testing/update/post/{id}', [TestingController::class, 'editpost'])->name('postupdatetesting');
route::get('/delete/testing/{id}', [TestingController::class, 'hapus'])->name('deletetesting');


route::get('/coba',[RekomendasiController::class,'rekomendasi']);