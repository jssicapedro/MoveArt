<?php

namespace App\Http\Controllers;

use App\Models\PedidoProfessor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PedidoprofessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = PedidoProfessor::all();
        return view('admin.pedprof.pedprof', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('professor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        
        return redirect('professor')->with('success');
        return redirect('professor')->with('erro');
    }

    /* public function lista_cv(){
        $file = Storage::files('pedidoProf');
        echo'<pre>';
        print_r($file);
    } */


    public function download($file){
        return response()->download(storage_path('app/public/pedidoProf/'.$file));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PedidoProfessor  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(PedidoProfessor $pedidos)
    {
        return view('admin.pedprof.pedprof_show', ['pedidos' => $pedidos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PedidoProfessor  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(PedidoProfessor $pedidos)
    {
        return view('admin.pedprof.pedprof_edit', ['pedidos' => $pedidos]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PedidoProfessor  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PedidoProfessor $pedidos)
    {
        $pedidos->update([
            'nome' => $request->primeiro,
            'apelido' => $request->apelido,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'dta_nasc' => $request->data_nac,
            'modalidade' => $request->modalidade,
        ]);

        return "pedidoProfessor atualizado com sucesso";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PedidoProfessor  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(PedidoProfessor $pedidos)
    {
        //
    }
}
