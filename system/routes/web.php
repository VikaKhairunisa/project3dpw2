<?php

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/brand', function () {
    return view('brand');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/special', function () {
    return view('special');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('admin.template.base');
});

Route::get('admin/beranda', function () {
    return view('admin.beranda');
});

Route::get('/admin/produk', function () {
    return view('admin.produk');
});

Route::get('admin/kategori', function () {
    return view('admin.kategori');
});

Route::get('admin/promo', function () {
    return view('admin.promo');
});
