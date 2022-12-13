<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modalidade;
use App\Models\Evento;


class PageController extends Controller
{


    /* ------- Front ------- */
    public function index(){
        $evento = Evento::all();
        $modalidade = Modalidade::all();
        
        return view('index', compact('evento'), compact('modalidade'));
    }
    public function ballet(){
        $modalidade = Modalidade::where('modalidade', 'Ballet')->first();
        $profs = $modalidade->profs;
      
        return view('ballet', compact('profs'), compact('modalidade'));
    }

    public function hiphop(){
        $modalidade = Modalidade::where('modalidade', 'Hip-Hop')->first();
        $profs = $modalidade->profs;
      
        return view('hiphop', compact('profs'), compact('modalidade'));
    }

    public function espanhola(){
        $modalidade = Modalidade::where('modalidade', 'Dança Espanhola')->first();
        $profs = $modalidade->profs;
      
        return view('espanhola', compact('profs'), compact('modalidade'));
    }

    public function oriental(){
        $modalidade = Modalidade::where('modalidade', 'Danças Orientais')->first();
        $profs = $modalidade->profs;
      
        return view('oriental', compact('profs'), compact('modalidade'));
    }

    public function folclore(){
        $modalidade = Modalidade::where('modalidade', 'Folclore')->first();
        $profs = $modalidade->profs;
      
        return view('folclore', compact('profs'), compact('modalidade'));
    }

    public function contactos(){
        return view('contactos');
    }

    public function mapaaulas(){
        return view('mapaaulas');
    }

    protected $table='modalidade';

    /* ------- landingPages ------- */
    public function notifications(){
        return view('landingPages/notifications');
    }

    public function landingA(){
        return view('landingPages/landingA');
    }

    public function landingD(){
        return view('landingPages/landingD');
    }

    public function eventos(){
        return view('landingPages/eventos');
    }

    public function natal(){
        return view('landingPages/natal');
    }

    /* ------- back ------- */
    public function modalidades(){
        return view('admin/modalidades');
    }
    public function dashboardBO(){
        return view('dashboardBO');
    }
}