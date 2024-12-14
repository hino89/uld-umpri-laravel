<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Kegiatan {
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'judul-kegiatan-1',
                'judul' => 'Hari Bahasa Isyarat Internasional',
                'tanggal' => '-',
                'body' => 'lorem lorem lorem',
                'images' => ['image1', 'image2', 'image3']
            ],
            [
                'id' => 2,
                'slug' => 'judul-kegiatan-2',
                'judul' => 'SPM Teman Tuli 2024',
                'tanggal' => '-',
                'body' => 'lorem lorem lorem',
                'images' => ['image1', 'image2', 'image3']
            ],
            [
                'id' => 3,
                'slug' => 'judul-kegiatan-3',
                'judul' => 'Kelas Bahasa Isyarat',
                'tanggal' => '12 Desember 2024',
                'body' => 'lorem lorem lorem',
                'images' => ['image1', 'image2', 'image3']
            ],
            [
                'id' => 4,
                'slug' => 'judul-kegiatan-4',
                'judul' => 'Kegiatan 4',
                'tanggal' => '12 Desember 2024',
                'body' => 'lorem lorem lorem',
                'images' => ['image1', 'image2', 'image3']
            ],
            [
                'id' => 5,
                'slug' => 'judul-kegiatan-5',
                'judul' => 'Kegiatan 5',
                'tanggal' => '12 Desember 2024',
                'body' => 'lorem lorem lorem',
                'images' => ['image1', 'image2', 'image3']
            ]
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