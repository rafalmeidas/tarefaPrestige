<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }



    public function noticia1(){
        return view ('pages.noticia1');
    }

    public function noticia2(){
        return view ('pages.noticia2');
    }

    public function contato(){
        return view ('pages.contato');
    }

    public function enviarDados(){

    }

}
