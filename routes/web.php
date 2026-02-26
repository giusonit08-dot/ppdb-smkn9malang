<?php

use Faker\Guesser\Name;
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


Route::get('/admin', function () {
    return view('admin.layout.app');
});

Route::get('/', function () {
    return view('admin.pages.beranda.index');
})->name('beranda');

Route::get('/jurusan', function () {
    return view('admin.pages.jurusan.index');
})->name('jurusan');

Route::get('/pendaftaran', function () {
    return view('admin.pages.pendaftaran.index');
})->name('pendaftaran');

Route::get('/user', function () {
    return view('admin.pages.user.index');
})->name('user');