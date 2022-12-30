<?php

namespace App\Http\Controllers;

use App\Models\Patrocinio;
use Illuminate\Http\Request;

class PatrocinioController extends Controller
{
    public function index()
    {
        $patrocinios = Patrocinio::all();
        return view('admin.patrocinios.patrocinio', compact('patrocinios'));
    }

    public function create()
    {
        return view('patrocinio');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'valor' => 'required',
        ]);

        Patrocinio::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'valor' => $request->valor,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem,
        ]);

        return view('patrocinio');
    }

    public function show(Patrocinio $patrocinio)
    {
        return view('admin.patrocinios.patrocinio_show', ['patrocinio' => $patrocinio]);
    }

    public function edit(Patrocinio $patrocinio)
    {
        return view('admin.patrocinios.patrocinio_edit', ['patrocinio' => $patrocinio]); 
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

        return "patrocinio atualizado com sucesso";
    }

    public function destroy(Patrocinio $patrocinio)
    {
        //
    }
}
