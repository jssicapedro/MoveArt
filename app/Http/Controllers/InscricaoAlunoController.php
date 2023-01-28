<?php

namespace App\Http\Controllers;

use App\Models\Inscricao;
use App\Models\User;
use App\Models\Modalidade;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InscricaoAlunoController extends Controller
{
    public function index()
    {
        
    }
    public function create()
    {
        $modalidade = Modalidade::all();
        return view('inscricoes', compact('modalidade'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'primeiro' => 'required',
            'apelido'=> 'required',
            'genero' => 'required',
            'data_nasc' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'primeiro.required' => 'Preencha o Nome',
            'apelido.required' => 'Preencha o Apelido',
            'genero.required' => 'Preencha o Género',
            'data_nasc.required' => 'Preencha a Data de Nascimento',
            'email.required' => 'Preencha o email',
            'password.required' => 'Preencha a password'
        ]);
        $user = User::create([
            //nome do input=> função request -> nome do campo na bd
            'primeiro' => $request->primeiro,
            'apelido' => $request->apelido,
            'genero' => $request->genero,
            'perfil' => 'Aluno',
            'data_nasc' => $request->data_nasc,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Inscricao::create([
            'data_inicio' => Carbon::now(),
            'data_fim' => $request->tp_ins == 'anual' ? Carbon::now()->addYear() : Carbon::now()->addMonth(),
            'type_insc' => $request->tp_ins,
            'modalidade_id' => $request->modalidade_id,
            'user_id' => $user->id,
        ]);
        return redirect()->route('login')->with('success', true);
    }
    public function show()
    {
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function destroy()
    {
    }
}
