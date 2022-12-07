<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modalidade;


class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function ballet(){

        $user = user::all();
        $modalidade = modalidade::all();
      
        return view('ballet', compact('user'), compact('modalidade'));

    }

    public function hiphop(){
        return view('hiphop');
    }

    public function espanhola(){
        return view('espanhola');
    }

    public function oriental(){
        return view('oriental');
    }

    public function folclore(){
        return view('folclore');
    }

    public function contactos(){
        return view('contactos');
    }

    public function inscricoes(){
        return view('inscricoes');
    }

    public function mapaaulas(){
        return view('mapaaulas');
    }

    public function perfil(){
        return view('perfil');
    }

    
}