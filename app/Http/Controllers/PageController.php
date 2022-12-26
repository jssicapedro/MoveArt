<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modalidade;
use App\Models\Evento;
use App\Models\Patrocinio;


class PageController extends Controller
{


    /* ------- Front ------- */
    public function index(){
        $evento = Evento::all();
        $modalidade = Modalidade::all();
        
        return view('index', compact('evento'), compact('modalidade'));
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

    public function mapaaulas(){
        $modalidade = Modalidade::all();
        return view('mapaaulas', compact('modalidade'));
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
        $evento = Evento::all();
        $modalidade = Modalidade::all();
        $users = User::all();
        $patrocinios = Patrocinio::all();
        
        return view('dashboardBO', compact('evento','modalidade','users','patrocinios'));
    }
    public function create(){
        return view('admin/create');
    }
}