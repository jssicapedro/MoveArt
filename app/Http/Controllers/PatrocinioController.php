<?php

namespace App\Http\Controllers;

use App\Models\Patrocinio;

use Illuminate\Http\Request;

class PatrocinioController extends Controller
{
    public function index()
    {
        $patrocinios = Patrocinio::all();
        return view('admin/patrocinios/patrocinio', compact('patrocinios'));
    }

    public function create()
    {
        return view('patrocinio');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required',
                'email' => 'required|email',
                'valor' => 'required',
                'mensagem' => 'required',
            ],
            [
                'nome.required' => 'Preencha o campo do NOME',
                'email.required' => 'Preencha o campo do EMAIL',
                'valor.required' => 'Preencha o campo do VALOR',
                'mensagem.required' => 'Preencha o campo do MENSAGEM',
            ]
        );

        Patrocinio::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'valor' => $request->valor,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem,
        ]);

        return redirect('patrocinio')->with('success', true);
        /*  return redirect('patrocinio')->with('erro'); */
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
        $patrocinio->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'valor' => $request->valor,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem,
            'resposta' => $request->resposta,
            'estado' => $request->estado,
        ]);

        /* return "patrocinio atualizado com sucesso"; */
        return redirect('admin/patrocinio');
    }

    public function delete(Patrocinio $patrocinio)
    {
        $patrocinio->delete();

        return redirect('admin/patrocinio')->with('success', true);
    }
}
