<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    //step 2
    protected $genre;
    //step 3 fungsi construct unutk inisasi class model
    public function __construct()
    {
        // step 4
        $this->genre = new GenreModel();
    }

    public function index()
    {
        $data['data_genre'] = $this->genre->getGenre();
        return view("film/semuagenre", $data);
    }

    public function all() {
    $data['semua_genre'] = $this -> genre -> getAllData();
    return view('film/indexgenre', $data);
    }

    public function film_by_id(){
        dd($this -> genre -> getDataByID(1));
    }

    public function film_by_genre(){
        dd($this -> genre -> getDataBy("horor"));
    }
    
    public function film_order(){
        dd($this -> film -> getOrderBy());
    }

    public function film_limit_five(){
        dd($this -> film -> getLimit());
    }
}