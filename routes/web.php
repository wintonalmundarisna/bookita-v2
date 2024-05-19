<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\KategoriController;
use App\Models\Buku;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [DaftarController::class, 'index'])->middleware('guest');

Route::post('/register', [DaftarController::class, 'daftar']);

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

Route::resource('/koleksi', KoleksiController::class)->middleware('auth');

Route::get('/koleksi/edit/{id}', [KoleksiController::class, 'edit'])->middleware('auth');

Route::get('/detail/{id}/show/', 'KoleksiController@show')->middleware('auth');

Route::get('/tambah-buku', [KoleksiController::class, 'create'])->middleware('auth');

Route::get('/kategori/{kategori}', [KategoriController::class, 'index'])->middleware('auth');

Route::get('/kategori/semua/{kategori}', [KategoriController::class, 'semua'])->middleware('auth');

Route::get('/cari', [KategoriController::class, 'semua'])->middleware('auth');

Route::get('/baca/{id}', function ($id) {

    $where = array ('id' => $id);
    $buku = Buku::where($where)->first();

    return view('baca', [
        'data' => $buku,
        'active' => 'Kategori',
        'gambar' => asset('icon-bookita-fix.png')
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'active' => 'About',
    ]);
});

Route::get('/not-found', function (Request $request) {
    return view('not-found', [
        'data' => $request,
    ]);
});
