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
        $modalidade = Modalidade::where('modalidade', 'ballet')->first();
        $profs = $modalidade->profs;
      
        return view('ballet', compact('profs'), compact('modalidade'));
    }

    public function hiphop(){
        $modalidade = Modalidade::where('modalidade', 'hiphop')->first();
        $profs = $modalidade->profs;
      
        return view('hiphop', compact('profs'), compact('modalidade'));
    }

    public function espanhola(){
        $modalidade = Modalidade::where('modalidade', 'espanhola')->first();
        $profs = $modalidade->profs;
      
        return view('espanhola', compact('profs'), compact('modalidade'));
    }

    public function oriental(){
        $modalidade = Modalidade::where('modalidade', 'oriental')->first();
        $profs = $modalidade->profs;
      
        return view('oriental', compact('profs'), compact('modalidade'));
    }

    public function folclore(){
        $modalidade = Modalidade::where('modalidade', 'folclore')->first();
        $profs = $modalidade->profs;
      
        return view('folclore', compact('profs'), compact('modalidade'));
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