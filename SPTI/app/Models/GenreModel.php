<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table            = 'genre';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowFields      = [];

    public function getGenre()
    {
        $data = 
        [
            [
                "nama_genre" => "Horror",
                "created_at" => "2023-06-13 20:57:50",
                "update_at" => "2023-06-13 20:57:50"
            ],
            [
                "nama_genre" => "Fantasi",
                "created_at" => "2023-06-13 20:57:50",
                "update_at" => "2023-06-13 20:57:50"
            ],
            [
                "nama_genre" => "Comedy",
                "created_at" => "2023-06-13 20:57:50",
                "update_at" => "2023-06-13 20:57:50"
            ],
            [
                "nama_genre" => "Aksi",
                "created_at" => "2023-06-13 20:57:50",
                "update_at" => "2023-06-13 20:57:50"
            ],
            [
                "nama_genre" => "Drama",
                "created_at" => "2023-06-13 20:57:50",
                "update_at" => "2023-06-13 20:57:50"
            ],
            [
                "nama_genre" => "Animasi",
                "created_at" => "2023-06-13 20:57:50",
                "update_at" => "2023-06-13 20:57:50"
            ],
            [
                "nama_genre" => "Romance",
                "created_at" => "2023-06-13 20:57:50",
                "update_at" => "2023-06-13 20:57:50"
            ],
    
         ];
         return $data;
    }

    public function getAllData(){
        return $this->findAll();
    }

    public function getDataByID($id){
        return $this->find($id);
    }

    public function getDataBy($data)
    {
        return $this->where("genre", $data)->findAll();
    }

    public function getOrderBy()
   {
    return $this->orderBy('created_at', 'desc')->findAll();
   }

   public function getLimit()
   {
    return $this->limit(5)->findAll();
    }
}