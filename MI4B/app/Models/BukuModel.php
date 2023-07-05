<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    public function getBuku()
    {
        $data = 
        [
            [
                "nama_buku" => "Sejarah Indonesia",
                "halaman" => "30 Halaman"
            ],
            [
                "nama_buku" => "Bahasa Indonesia",
                "halaman" => "90 Halaman"
            ],
            [
                "nama_buku" => "Sosiologi",
                "halaman" => "89 Halaman"
            ],
            [
                "nama_buku" => "Ekonomi",
                "halaman" => "67 Halaman"
            ],
            [
                "nama_buku" => "Geografi",
                "halaman" => "67 Halaman"
            ],
         ];
         return $data;
    }
}