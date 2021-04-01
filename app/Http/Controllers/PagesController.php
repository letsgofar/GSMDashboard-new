<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function createmodul(){
        return view('modul/createmodul');
    }

    public function modulspesial(){
        return view('modul/modulspesial');
    }

    public function modulbasic(){
        return view('modul/modulbasic');
    }

    public function moduladvanced(){
        return view('modul/moduladvanced');
    }

    public function createraport(){
        return view('raport/createraport');
    }

    public function raportuser(){
        return view('raport/raportuser');
    }

    public function raportsekolah(){
        return view('raport/raportsekolah');
    }

    public function createkupon(){
        return view('kupon/createkupon');
    }

    public function listkupon(){
        return view('kupon/listkupon');
    }
    
    public function sekolahmodel(){
        return view('sekolah/sekolahmodel');
    }

    public function sekolahemodel(){
        return view('sekolah/sekolahemodel');
    }

    public function sekolahjejaring(){
        return view('sekolah/sekolahjejaring');
    }

    public function sekolahindonesia(){
        return view('sekolah/sekolahindonesia');
    }
    
    public function permintaanmentor(){
        return view('request/permintaanmentor');
    }

    public function permintaansekolah(){
        return view('request/permintaansekolah');
    }

    public function listuser(){
        return view('listuser');
    }
}
