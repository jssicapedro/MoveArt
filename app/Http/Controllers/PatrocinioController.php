<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patrocinio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Mail\RespostaPatrocinio;
use Illuminate\Support\Facades\Mail;

class PatrocinioController extends Controller
{
    public function index()
    {
        $patrocinios = Patrocinio::all();
        $quantidade = $patrocinios->where('estado', 'sem resposta')->count();
        /* dd($quantidade); */
        return view('admin/patrocinios/patrocinio', compact('patrocinios'), compact('quantidade'));
    }

    public function create()
    {
        return view('patrocinio');
    }

    public function store(Request $request, Patrocinio $patrocinio)
    {
        //dd($request);
        $request->validate(
            [
                'nome' => 'required',
                'email' => 'required|email',
                'valor' => 'required',
                'mensagem' => 'required',
                'telefone' =>'nullable|regex:/^(+351\s?)?(91|92|93|96)\d{7}$/'
            ],
            [
                'nome.required' => 'Preencha o campo do NOME',
                'email.required' => 'Preencha o campo do EMAIL',
                'valor.required' => 'Preencha o campo do VALOR',
                'mensagem.required' => 'Preencha o campo do MENSAGEM',
                'telefone.regex' => 'Número de telefone inválido',
            ]
        );

        Patrocinio::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'valor' => $request->valor,
            'telefone' => str_replace(' ', '', $request->telefone),
            'mensagem' => $request->mensagem,
        ]);

        return redirect('patrocinio')->with('success', true);
    }

    public function show(Patrocinio $patrocinio)
    {
        return view('admin/patrocinios/patrocinio_show', ['patrocinio' => $patrocinio]);
    }

    public function edit(Patrocinio $patrocinio)
    {
        return view('admin/patrocinios/patrocinio_edit', ['patrocinio' => $patrocinio]);
    }

    public function update(Request $request, Patrocinio $patrocinio)
    {
        $request->validate(
            [
                'resposta' => 'required',
            ],
            [
                'resposta.required' => 'Para atualizar este patrocínio tem de dar uma RESPOSTA ao mesmo',
            ]
        );

        $patrocinio->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'valor' => $request->valor,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem,
            'resposta' => $request->resposta,
            'estado' => $request->estado,
        ]);

        Mail::to($request->email)->send(new RespostaPatrocinio($patrocinio));
        
        return redirect('admin/patrocinio');
    }

    public function delete(Patrocinio $patrocinio)
    {
        $patrocinio->delete();

        return redirect('admin/patrocinio')->with('success', true);
    }
}
