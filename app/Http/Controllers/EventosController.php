<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventosController extends Controller
{
    public function index()
    {
        $eventos = evento::all();
        return view ('eventos.index')->with('eventos', $eventos);
    }
 
    
    public function create()
    {
        return view('eventos.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->validate([
            'nome' => 'required|min:3|max:100|regex:/^[A-ZÀ-úa-z\s]+$/',
            'data' => 'required|date|after_or_equal:now',
            'localizacao' => 'required',
            'foto' => 'sometimes',
            'descricao' => 'required',
        ],
        [
            'nome.required' => 'Preencha o campo do Nome',
            'data.required' => 'Adicione uma data',
            'localizacao.required' => 'Adicione uma localizacao',
            'descricao.required' => 'Adicione uma descrição'
        ]);
        
        /*cria todos a informacao escrita*/
        $evento = evento::create($input);

        if ($request->hasFile('foto')) {
            $img_path = $request->file( 'foto' )->store(
            'public/img/eventosBO' );
            $evento->foto = basename($img_path);
            $evento->save();
        }

       /*redireciona para o index após adicionar com a flash message*/ 
       return redirect('evento')->with('flash_message', 'Evento Adicionado!');  
    }
 
    
    public function show($id)
    {
        $evento = evento::find($id);
        return view('eventos.show')->with('eventos', $evento);
    }
 
    
    public function edit($id)
    {
        $evento = evento::find($id);
        return view('eventos.edit')->with('eventos', $evento);
    }
 
  
    public function update(Request $request, $id)
    {
        $evento = evento::find($id);
        $input = $request->all();
        $evento->update($input);
        return redirect('evento')->with('flash_message', 'evento Atualizado!');  
    }
 
   
    public function destroy($id)
    {
        evento::destroy($id);
        return redirect('evento')->with('flash_message', 'evento eliminado!');  
    }
}
