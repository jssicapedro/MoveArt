<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfilRequest;
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
        $modalidade = Modalidade::all();
        return view('mapaaulas', compact('modalidade'));
    }

    public function login(){
        return view('login');
    }

    public function perfil(){
        $user = User::all();
        return view('perfil', compact('user'));
    }
    
    public function edit_perfil(User $user){
        return view('perfil/update_perfil', compact('user'));
    }
     public function update_perfil(PerfilRequest $request, User $user) {
        $fields=$request->validated();
        $user->fill($fields);
        $user->save();
        dd($request);
        return redirect()->route('perfil')->with('success','Perfil atualizado com sucesso');
     }

    /* ------- landingPages ------- */
    public function notifications(){
        return view('landingPages/notifications');
    }

    public function patrocinio(){
        return view('landingPages/patrocinio');
    }

    public function festival(){
        return view('landingPages/festival');
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
    public function dashboardBO(){
        $evento = Evento::all();
        $modalidade = Modalidade::all();
        $users = User::all();
        $patrocinios = Patrocinio::all();
        
        return view('dashboardBO', compact('evento','modalidade','users','patrocinios'));
    }

    
    public function modalidades(){
        return view('admin/modalidades');
    }


}