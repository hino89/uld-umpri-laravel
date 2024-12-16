<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Kegiatan {
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'peresmian-uld',
                'judul' => 'Peresmian ULD UMPRI',
                'tanggal' => 'October 2024',
                'body' => 'lorem lorem lorem',
                'images' => [asset('images/home-images/IMG_1085.JPG'),
                            asset('images/hari-isyarat-internasional/IMG_4784.JPG'),
                            asset('images/hari-isyarat-internasional/IMG_4844.JPG'),
                            asset('images/hari-isyarat-internasional/IMG_5842.jpg'),
                            asset('images/hari-isyarat-internasional/IMG_5845.jpg'),
                            asset('images/hari-isyarat-internasional/IMG_8239.jpg'),
                            asset('images/hari-isyarat-internasional/IMG_8240.jpg'),]
            ],
            [
                'id' => 2,
                'slug' => 'hari-isyarat-internasional',
                'judul' => 'Hari Bahasa Isyarat Internasional',
                'tanggal' => 'October 2024',
                'body' => 'lorem lorem lorem',
                'images' => [asset('images/home-images/IMG_8239.jpg'),
                            asset('images/hari-isyarat-internasional/IMG_4784.JPG'),
                            asset('images/hari-isyarat-internasional/IMG_4844.JPG'),
                            asset('images/hari-isyarat-internasional/IMG_5842.jpg'),
                            asset('images/hari-isyarat-internasional/IMG_5845.jpg'),
                            asset('images/hari-isyarat-internasional/IMG_8239.jpg'),
                            asset('images/hari-isyarat-internasional/IMG_8240.jpg'),]
            ],
            [
                'id' => 3,
                'slug' => 'kelas-bahasa-isyarat',
                'judul' => 'Kelas Bahasa Isyarat',
                'tanggal' => 'November 2024',
                'body' => 'lorem lorem lorem',
                'images' => [asset('images/home-images/IMG_1218.jpg'),
                            asset('images/kelas-bahasa-isyarat/IMG_1076.JPG'),
                            asset('images/kelas-bahasa-isyarat/IMG_1107.JPG'),
                            asset('images/kelas-bahasa-isyarat/IMG_1214.JPG'),
                            asset('images/kelas-bahasa-isyarat/IMG_1217.JPG'),
                            asset('images/kelas-bahasa-isyarat/IMG_1225.JPG'),]
            ],
            
        ];
    }

    public static function find($slug) {
        return Arr::first(static::all(), function($kegiatan) use ($slug) {
                return $kegiatan['slug'] == $slug;
        });


        if(! $kegiatan) {
            abort(404);
        }
    }
}