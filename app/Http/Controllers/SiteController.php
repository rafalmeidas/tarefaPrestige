<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestFormulario;

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

    public function noticia3(){
        return view ('pages.noticia3');
    }

    public function noticia4(){
        return view ('pages.noticia4');
    }

    public function noticia5(){
        return view ('pages.noticia5');
    }

    public function noticia6(){
        return view ('pages.noticia6');
    }

    public function noticia7(){
        return view ('pages.noticia7');
    }

    public function noticia8(){
        return view ('pages.noticia8');
    }
    
    //Enviar formulário por email
    public function contato(){
        return view ('pages.contato');
    }

    public function enviarDados(FormRequestFormulario $request){
        $dataForm = $request->all();
    }

}
