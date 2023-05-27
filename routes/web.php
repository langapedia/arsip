<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuTamuPelayananController;
use App\Http\Controllers\BukuTamuKedinasanController;
use App\Http\Controllers\BukuTamuPUmumController;
use App\Http\Controllers\BukuTamuMediaController;
use App\Http\Controllers\BukuTamuKhususController;
use App\Http\Controllers\NotulenController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\BeritaAcaraController;
use App\Http\Controllers\PagesController;

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


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/dologin', [AuthController::class, 'doLogin'])->name('do.login');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

// Admin
Route::group(['middleware' => 'auth'], function () {
    // Home
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/fitur', [AdminController::class, 'fitur'])->name('fitur');

    Route::get('/admin/bukutamupelayanan', [BukuTamuPelayananController::class, 'index'])->name('buku_tamu_pelayanan.admin');
    Route::get('/admin/bukutamupelayanan/edit/{id}', [BukuTamuPelayananController::class, 'edit'])->name('edit_buku_tamu_pelayanan.admin');
    Route::put('/admin/bukutamupelayanan/update/{id}', [BukuTamuPelayananController::class, 'update'])->name('update_buku_tamu_pelayanan.admin');
    Route::get('/admin/bukutamupelayanan/destroy/{id}', [BukuTamuPelayananController::class, 'destroy'])->name('destroy_buku_tamu_pelayanan.admin');

    Route::get('/admin/bukutamukedinasan', [BukuTamuKedinasanController::class, 'index'])->name('buku_tamu_kedinasan.admin');
    Route::get('/admin/bukutamukedinasan/edit/{id}', [BukuTamuKedinasanController::class, 'edit'])->name('edit_buku_tamu_kedinasan.admin');
    Route::put('/admin/bukutamukedinasan/update/{id}', [BukuTamuKedinasanController::class, 'update'])->name('update_buku_tamu_kedinasan.admin');
    Route::get('/admin/bukutamukedinasan/destroy/{id}', [BukuTamuKedinasanController::class, 'destroy'])->name('destroy_buku_tamu_kedinasan.admin');
    

    Route::get('/admin/bukutamupumum', [BukuTamuPUmumController::class, 'index'])->name('buku_tamu_pumum.admin');
    Route::get('/admin/bukutamupumum/edit/{id}', [BukuTamuPUmumController::class, 'edit'])->name('edit_buku_tamu_pumum.admin');
    Route::put('/admin/bukutamupumum/update/{id}', [BukuTamuPUmumController::class, 'update'])->name('update_buku_tamu_pumum.admin');
    Route::get('/admin/bukutamupumum/destroy/{id}', [BukuTamuPUmumController::class, 'destroy'])->name('destroy_buku_tamu_pumum.admin');

    Route::get('/admin/bukutamumedia', [BukuTamuMediaController::class, 'index'])->name('buku_tamu_media.admin');
    Route::get('/admin/bukutamumedia/edit/{id}', [BukuTamuMediaController::class, 'edit'])->name('edit_buku_tamu_media.admin');
    Route::put('/admin/bukutamumedia/update/{id}', [BukuTamuMediaController::class, 'update'])->name('update_buku_tamu_media.admin');
    Route::get('/admin/bukutamumedia/destroy/{id}', [BukuTamuMediaController::class, 'destroy'])->name('destroy_buku_tamu_media.admin');

    Route::get('/admin/bukutamukhusus', [BukuTamuKhususController::class, 'index'])->name('buku_tamu_khusus.admin');
    Route::get('/admin/bukutamukhusus/edit/{id}', [BukuTamuKhususController::class, 'edit'])->name('edit_buku_tamu_khusus.admin');
    Route::put('/admin/bukutamukhusus/update/{id}', [BukuTamuKhususController::class, 'update'])->name('update_buku_tamu_khusus.admin');
    Route::get('/admin/bukutamukhusus/destroy/{id}', [BukuTamuKhususController::class, 'destroy'])->name('destroy_buku_tamu_khusus.admin');

    Route::get('/admin/notulen', [NotulenController::class, 'index'])->name('notulen.admin');
    Route::post('/admin/notulen/create', [NotulenController::class, 'store'])->name('create_notulen.admin');
    Route::get('/admin/notulen/view/{id}', [NotulenController::class, 'show'])->name('view_notulen.admin');
    Route::get('/admin/notulen/berkas/{id}', [NotulenController::class, 'berkas'])->name('berkas_notulen.admin');
    Route::get('/admin/notulen/destroy/{id}', [NotulenController::class, 'destroy'])->name('destroy_notulen.admin');

    Route::get('/admin/beritaacara', [BeritaAcaraController::class, 'index'])->name('berita_acara.admin');

    Route::get('/admin/dokumentasi', [DokumentasiController::class, 'index'])->name('dokumentasi.admin');
    Route::post('/admin/dokumentasi/create', [DokumentasiController::class, 'store'])->name('create_dokumentasi.admin');
    Route::get('/admin/dokumentasi/view/{id}', [DokumentasiController::class, 'show'])->name('view_dokumentasi.admin');
    Route::get('/admin/dokumentasi/berkas/{id}', [DokumentasiController::class, 'berkas'])->name('berkas_dokumentasi.admin');
    Route::get('/admin/dokumentasi/destroy/{id}', [DokumentasiController::class, 'destroy'])->name('destroy_dokumentasi.admin');


});

// Guest
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/menu', [PagesController::class, 'menu'])->name('menu');

Route::get('/pelayanan', [PagesController::class, 'pelayanan'])->name('pelayanan');
Route::post('/pelayanan/create', [BukuTamuPelayananController::class, 'store'])->name('create.pelayanan');

Route::get('/kedinasan', [PagesController::class, 'kedinasan'])->name('kedinasan');
Route::post('/kedinasan/create', [BukuTamuKedinasanController::class, 'store'])->name('create.kedinasan');

Route::get('/umum', [PagesController::class, 'umum'])->name('umum');
Route::post('/umum/create', [BukuTamuPUmumController::class, 'store'])->name('create.umum');

Route::get('/khusus', [PagesController::class, 'khusus'])->name('khusus');
Route::post('/khusus/create', [BukuTamuKhususController::class, 'store'])->name('create.khusus');

Route::get('/media', [PagesController::class, 'media'])->name('media');
Route::post('/media/create', [BukuTamuMediaController::class, 'store'])->name('create.media');

Route::get('/tersimpan', [PagesController::class, 'tersimpan'])->name('tersimpan');
