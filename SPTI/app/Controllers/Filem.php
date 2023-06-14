<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FilmModel;
class Filem extends BaseController
{
    protected $film;
    public function __construct()
    {
        $this->film = new FilmModel();
    }
    public function index()
    {
        $data['data_film']= $this->film->getfilm();
        return view("film/index", $data);

    }
    public function all()
    {
     $data['semuafilm'] = $this->film->getALLDataJoin();
     return view("film/semuafilm", $data);
    }
    public function film_by_id()
    {
        dd($this->film->getDataByID(10));
    }          
    public function film_by_genre()
    {
        dd($this->film->getDataBy("horor"));
    }
    public function film_Order()
    {
        dd($this->film->getOrderBy());
    }
    public function film_limit_five()
    {
        dd($this->film->getLimit());
    }
            
            
}
