<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventosController extends Controller
{
   public function create()
   {
    return view('eventos.create');
   }

   public function store(Request $request)
   {
    Evento::create([
        'nome' => $request->nome,
        'data' => $request->data,
        'localizacao' => $request->localizacao,
        'foto' => $request->foto,
        'descricao' => $request->descricao,
    ]);

    return "Evento Criado com Sucesso!";
   }

   public function show($id)
   {
    $evento = Evento::findOrFail($id);
    return view('eventos.show', ['evento' => $evento]);
   }

   public function edit($id)
   {
    $evento = Evento::findOrFail($id);
    return view('eventos.edit', ['evento' => $evento]);
   }

   public function update(Request $request, $id)
   {
    $evento = Evento::findOrFail($id);

    $evento->update([
        'nome' => $request->nome,
        'data' => $request->data,
        'localizacao' => $request->localizacao,
        'foto' => $request->foto,
        'descricao' => $request->descricao,
    ]);

    return "Evento atualizado com sucesso!";
   }

   public function delete($id)
   {
    $evento = Evento::findOrFail($id);
    return view('eventos.delete', ['evento' => $evento]);
   }

   public function destroy($id)
   {
    $evento = Evento::findOrFail($id);
    $evento->delete();

    return "Produto eliminado com sucesso";
   }
}
