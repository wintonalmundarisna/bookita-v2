<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/register', function () {
    return view('register');
});
Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/semua-buku', function () {
    return view('semua-buku');
});
Route::get('/koleksi', function () {
    return view('koleksi');
});
Route::get('/tambah-buku', function () {
    return view('tambah-buku');
});
Route::get('/baca', function () {
    return view('pageBaca');
});

