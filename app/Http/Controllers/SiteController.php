<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function noticiaPrincipal(){
        return view ('pages.principal');
    }

    public function contato(){
        return view ('pages.contato');
    }

    public function enviarDados(){

    }

}
