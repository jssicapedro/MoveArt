<?php

namespace App\Http\Controllers;

use App\Models\PedidoProfessor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PedidoprofessorController extends Controller
{
    public function index(){
        $pedidos = PedidoProfessor::all();
        return view('admin.pedprof.pedprof', compact('pedidos'));
    }

    public function create(){
       return view('professor');
    }

    public function store(Request $request){
        $namefile = $request->primeiro . $request->apelido . '.' . $request->cv->extension();

        $request->validate([
            'primeiro' => 'required',
            'apelido' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'data_nac' => 'required',
            'modalidade' => 'required',
            'cv' => 'required',
        ]);

        $request->cv->storeAS('pedidoProf', $namefile);

        PedidoProfessor::create([
            'primeiro' => $request->primeiro,
            'apelido' => $request->apelido,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'data_nac' => $request->data_nac,
            'modalidade' => $request->modalidade,
            'cv'=> $namefile,
        ]);   
        
        return redirect('professor')->with('success_pedprof', true);
    }

    public function download($file){
        return response()->download(storage_path('app/public/pedidoProf/'.$file));
    }

    public function show(PedidoProfessor $pedidos){
        return view('admin.pedprof.pedprof_show', ['pedidos' => $pedidos]);
    }

    public function edit(PedidoProfessor $pedidos){
        return view('admin.pedprof.pedprof_edit', ['pedidos' => $pedidos]); 
    }

    public function update(Request $request, PedidoProfessor $pedidos){
        $pedidos->update([
            'primeiro' => $request->primeiro,
            'apelido' => $request->apelido,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'cv' => $request->cv,
            'data_nac' => $request->data_nac,
            'modalidade' => $request->modalidade,
            'resposta' => $request->resposta,
        ]);
        return redirect('admin/pedprof');
    }

    public function archive(){
        $arquivados = PedidoProfessor::onlyTrashed()
            ->orderBy('id', 'desc')->get();

        return view('admin.pedprof.pedprof_archive', compact('arquivados'));
    }

    public function delete(PedidoProfessor $pedidos){
        $pedidos->delete();
        return redirect()->route('pedidosprof');
    }

    public function restore($id){
        /* PedidoProfessor::whereId($id)->restore(); */
        PedidoProfessor::withTrashed()->find($id)->restore();
        return back();
    }
}
