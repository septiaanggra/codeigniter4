<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\BukuModel;

class Buku extends BaseController
{

    //step 2
    protected $buku;
    // step 3 buat fungsi konstrak untuk inisiasi model
    public function __construct()
    {
        //step 4
        $this->buku = new BukuModel();
    }

    public function index()
    {
       // dd($this->film->getFilm());
       $data['data_buku'] = $this->buku->getBuku();
       return view("buku/index", $data);
    }
}