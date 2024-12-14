<?php

use App\Models\Kegiatan;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Unit Layanan Disabilitas UMPRI']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Tentang Kami']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/kegiatan', function () {
    return view('kegiatan', ['title' => 'Kegiatan ULD UMPRI', 
    'kegiatans' => Kegiatan::all()]);
});

Route::get('/kegiatan/{slug}', function ($slug) {
    $kegiatan = Kegiatan::find($slug);
    return view('post', ['title' => $kegiatan['judul'], 'kegiatan' => $kegiatan]);
});

Route::get('/test', function () {
    return view('test',
        [
            'title' => 'Testing',
            'posts' => [
                [
                    'id' => 1,
                    'slug' => 'judul-artikel-1',
                    'judul' => 'Judul Arikel 1',
                    'author' => 'Galang Pambudi Utama',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae libero ipsum temporibus excepturi illum, accusantium et assumenda voluptatem harum a? Placeat delectus error quae dolorem odit, id culpa dolor aspernatur.'
                ],
                [
                    'id' => 2,
                    'slug' => 'judul-artikel-2',
                    'judul' => 'Judul Arikel 2',
                    'author' => 'Galang Pambudi Utama',
                    'body' => 'lorem korem'
                ]
            ]
        ]);
});

Route::get('/test/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'judul' => 'Judul Arikel 1',
            'author' => 'Galang Pambudi Utama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae libero ipsum temporibus excepturi illum, accusantium et assumenda voluptatem harum a? Placeat delectus error quae dolorem odit, id culpa dolor aspernatur.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'judul' => 'Judul Arikel 2',
            'author' => 'Galang Pambudi Utama',
            'body' => 'lorem korem'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('article', ['title' => $post['judul'], 'post' => $post]);
});