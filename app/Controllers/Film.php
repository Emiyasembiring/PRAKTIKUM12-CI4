<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\FilmModel;

class Film extends BaseController
{
    //step 2
    protected $film;
    //step 3 fungsi construct unutk inisasi class model
    public function __construct()
    {
        // step 4
        $this->film = new FilmModel();
    }


    public function index() {
        $data['data_film'] = $this -> film -> getAllDataJoin();
        return view('film/index', $data);
        }

    // {
    //     $data['data_film'] = $this->film->getFilm();
    //     return view("film/index", $data);
    // }

    public function all() {
    $data['semua_film'] = $this -> film -> getAllDataJoin();
    return view('film/semuafilm', $data);
    }

    public function film_by_id(){
        dd($this -> film -> getDataByID(1));
    }

    public function film_by_genre(){
        dd($this -> film -> getDataBy("horor"));
    }
    
    public function film_order(){
        dd($this -> film -> getOrderBy());
    }

    public function film_limit_five(){
        dd($this -> film -> getLimit());
    }
}