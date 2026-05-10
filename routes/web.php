

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "WEB BAJU BERHASIL";
});


Route::get('/beranda', function () {
    return view('user.beranda');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/kontak', function () {
    return view('user.kontak');
});

Route::get('/produk', function () {
    return view('user.produk');
});


Route::get('/blog', function () {
    return view('user.blog');
});
