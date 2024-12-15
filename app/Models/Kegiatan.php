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
                'tanggal' => '-',
                'body' => 'lorem lorem lorem',
                'images' => [asset('images/home-images/IMG_1085.jpg'), 'image2', 'image3']
            ],
            [
                'id' => 2,
                'slug' => 'hari-isyarat-internasional',
                'judul' => 'Hari Bahasa Isyarat Internasional',
                'tanggal' => '-',
                'body' => 'lorem lorem lorem',
                'images' => [asset('images/home-images/IMG_8239.jpg'), 'image2', 'image3']
            ],
            [
                'id' => 3,
                'slug' => 'kelas-bahasa-isyarat',
                'judul' => 'Kelas Bahasa Isyarat',
                'tanggal' => '12 Desember 2024',
                'body' => 'lorem lorem lorem',
                'images' => [asset('images/home-images/IMG_1218.jpg'), 'image2', 'image3']
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