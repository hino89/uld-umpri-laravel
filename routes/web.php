<?php

use App\Models\Kegiatan;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', function () {

    $images = [
        asset('images/home-images/IMG_1085.JPG'),
        asset('images/home-images/IMG_1218.jpg'),
        asset('images/home-images/IMG_8239.jpg'),
    ];

    return view('home', ['title' => 'Home', 'images' => $images]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Tentang Kami']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Berita']);
});

Route::get('/pembelajaran', function () {
    return view('pembelajaran', ['title' => 'Pembelajaran']);
});

Route::get('/kegiatan', function () {
    return view('kegiatan', ['title' => 'Kegiatan ULD UMPRI', 
    'kegiatans' => Kegiatan::all()]);
});

Route::get('/kegiatan/{slug}', function ($slug) {
    $kegiatan = Kegiatan::find($slug);
    return view('post', ['title' => $kegiatan['judul'], 'kegiatan' => $kegiatan]);
});
