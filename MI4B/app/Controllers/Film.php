<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step1
use App\Models\FilmModel;
use App\Models\GenreModel; //Tambahkan (1)

class Film extends BaseController
{

    //step2 prperti
    protected $Film;
    protected $Genre; //Tambahkan (2)
    //step 3 buat fungsi construct untuk inisiasi clas model
    public function __construct()
    {
        //step 4 panggil property film
        $this->Film = new FilmModel();
        $this->Genre = new GenreModel(); //tambahkan (3)
    }


    public function index()
    {
        // //step 5 memanggil ulang
        // dd($this->Film->getFilm());
        //array
        $data['dataFilm'] = $this->Film->getAllDataJoin();
        return view("film/index", $data);
        
    }

    public function all(){
        $data['semuaFilm'] = $this->Film->getAllDataJoin();
        return view("film/semuaFilm",$data);
    }

    public function add(){
        $data["genre"] = $this->Genre->getAllData();
        $data["errors"] = session ('errors');
        return view("film/add", $data);
    }

    public function store(){
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film Harus diisi'
                ]
            ],
            'id_genre'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi Harus diisi'
                ]
            ],
            'cover'     => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi file.',
                    'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
                ]
            ]
        ]);
        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $image = $this->request->getFile('cover');
        //Generate nama file yang unik
        $imageName = $image->getRandomName();
        //Pindahkan file ke direktori penyimpanan
        $image->move(ROOTPATH . 'public/assets/cover/', $imageName);

        $data = [
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
            'cover' => $imageName  
        ];
        $this->Film->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
        return redirect()->to('/film');
    }

    public function update($id)
    {
        $data["genre"] = $this->Genre->getAllData();
        $data["errors"] = session('errors');
        $data["film"] = $this->Film->getDataByID($id);
        return view("film/edit", $data);
    }

    public function edit(){
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film Harus diisi'
                ]
            ],
            'id_genre'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi Harus diisi'
                ]
            ],
            //ubah rulesnya
            'cover'     => [
                'rules' => 'mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi file.',
                    'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
                ]
            ]
        ]);
        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }       
        //ambil data lama
        $film = $this->Film->find($this->request->getPost('id'));

        // tambah request id
        $data = [
            'id'=> $this->request->getPost('id'),
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
              
        ];
        // cek apakah ada cover diupload
        $cover = $this->request->getFile('cover');
        if ($cover->isValid() && !$cover->hasMOved()){
            //Generate nama file yang unik
            $imageName = $cover->getRandomName();
            //Pindahkan file ke direktori penyimpanan
            $cover->move(ROOTPATH . 'public/assets/cover/', $imageName);
            //hapus file gambar lama jika ada
            if ($film['cover']){
                unlink(ROOTPATH. 'public/assets/cover'. $film['cover']);
            }   
            //jika ada tambahkan arraycover pada variable $data
            $data['cover'] = $imageName;          
        }        
        $this->Film->save($data);
        //ubah pesannya
        session()->setFlashdata('success', 'Data berhasil diperbaharui.'); 
        return redirect()->to('/film');
    }

    public function destroy($id)
    {
        $decryptedId = ($id);
        $this->film->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus.');
        return redirect()->to('/film');
    }

    public function film_by_id(){
        dd($this->Film->getDataByID(1));
    }

    public function film_by_genre(){
        dd($this->Film->getDataBy("Horror"));
    }

    public function film_order(){
        dd($this->Film->getOrderBy());
    }

    public function film_limit_five(){
        dd($this->Film->getLimit());
    }
}