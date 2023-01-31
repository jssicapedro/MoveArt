<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfilRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modalidade;
use App\Models\UserModalidade;
use App\Models\Evento;
use App\Models\Patrocinio;
use App\Models\Faq;
use Auth;

class PageController extends Controller
{
    /* ------- Front ------- */
    public function index()
    {
        $evento = Evento::all();
        $modalidade = Modalidade::all();

        return view('index', compact('evento'), compact('modalidade'));
    }
    public function ballet()
    {
        $modalidade = Modalidade::where('modalidade', 'Ballet')->first();
        $profs = $modalidade->profs;

        return view('ballet', compact('profs'), compact('modalidade'));
    }

    public function hiphop()
    {
        $modalidade = Modalidade::where('modalidade', 'Hip-Hop')->first();
        $profs = $modalidade->profs;

        return view('hiphop', compact('profs'), compact('modalidade'));
    }

    public function espanhola()
    {
        $modalidade = Modalidade::where('modalidade', 'Dança Espanhola')->first();
        $profs = $modalidade->profs;

        return view('espanhola', compact('profs'), compact('modalidade'));
    }

    public function oriental()
    {
        $modalidade = Modalidade::where('modalidade', 'Danças Orientais')->first();
        $profs = $modalidade->profs;

        return view('oriental', compact('profs'), compact('modalidade'));
    }

    public function folclore()
    {
        $modalidade = Modalidade::where('modalidade', 'Folclore')->first();
        $profs = $modalidade->profs;

        return view('folclore', compact('profs'), compact('modalidade'));
    }

    public function contactos()
    {
        return view('contactos');
    }

    public function mapaaulas()
    {
        $modalidade = Modalidade::all();
        return view('mapaaulas', compact('modalidade'));
    }

    public function eventos()
    {
        $evento = Evento::all();
        return view('eventosFO', compact('evento'));
    }

    public function faqs()
    {
        $faqs = Faq::all();
        return view('faqs', compact('faqs'));
    }


    /* protected $table='modalidade'; */

    public function login()
    {
        return view('login');
    }

    public function perfil()
    {
        $user = User::all();
        return view('perfil', compact('user'));
    }

    public function edit_perfil()
    {
        return view('perfil/update_perfil');
    }

    public function update_perfil(PerfilRequest $request)
    {
        $user = Auth::user();
        $fields = $request->validated();
        $user->fill($fields);
        $user->save();
        return redirect()->route('perfil')->with('success', 'Perfil atualizado com sucesso');
    }


    /* ------- landingPages ------- */
    public function notifications()
    {
        return view('landingPages/notifications');
    }

    public function patrocinio()
    {
        return view('landingPages/patrocinio');
    }

    public function festival()
    {
        return view('landingPages/festival');
    }

    public function landingA()
    {
        return view('landingPages/landingA');
    }

    public function landingD()
    {
        return view('landingPages/landingD');
    }

    public function landingEventos()
    {
        return view('landingPages/eventos');
    }

    public function natal()
    {
        return view('landingPages/natal');
    }

    /* ------- back ------- */
    public function dashboardBO()
    {
        $evento = Evento::all();
        $modalidade = Modalidade::all();
        $users = User::all();
        $patrocinios = Patrocinio::all();

        $alunos_ballet = UserModalidade::where('modalidade_id', '1')->count();
        $alunos_hiphop = UserModalidade::where('modalidade_id', '2')->count();
        $alunos_espanhola = UserModalidade::where('modalidade_id', '3')->count();
        $alunos_oriental = UserModalidade::where('modalidade_id', '4')->count();
        $alunos_folclore = UserModalidade::where('modalidade_id', '5')->count();

        return view('dashboardBO', compact('evento', 'modalidade', 'users', 'patrocinios', 'alunos_ballet', 'alunos_hiphop', 'alunos_espanhola', 'alunos_oriental', 'alunos_folclore'));
    }
}
