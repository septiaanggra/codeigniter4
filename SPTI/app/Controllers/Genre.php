<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\GenreModel;

class Genre extends BaseController
{

    //step 2
    protected $Genre;
    // step 3 buat fungsi konstrak untuk inisiasi model
    public function __construct()
    {
        //step 4
        $this->Genre = new GenreModel();
    }

    public function index()
    {
       // dd($this->film->getFilm());
      $data['data_genre'] = $this->Genre->getGenre();
      return view("genre/index", $data);
    }

    public function all()
    {
        $data['data_genre'] = $this->Genre->getAllData();
        return view("Genre/semuagenre", $data);
    }

    public function genre_by_id()
    {
       dd($this->Genre->getDataByID(1));
      // $data['data_film'] = $this->film->getFilm();
      // return view("film/index", $data);
    }

    public function Genre_genre()
    {
           dd($this->Genre->getDataBy("horror"));
    }

    public function Genre_order()
    {
           dd($this->Genre->getOrderBy());
    }

    public function Genre_limit_five()
    {
           dd($this->Genre->getLimit());
        }

    
}