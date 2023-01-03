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
        $input = $request->all();
        evento::create($input);
        return redirect('evento')->with('flash_message', 'evento Adicionado!');  
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
