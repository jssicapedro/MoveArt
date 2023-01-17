<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modalidade;

class ModalidadesBackController extends Controller
{
    public function index(){
        $modalidade = Modalidade::all();
        return view('admin.modalidades.modalidade',compact('modalidade'));
    }
    public function create(){
        return view('admin.modalidades.modalidade_create');
    }
    public function show(Modalidade $modalidade){
        return view('admin.modalidades.modalidade_show', ['modalidade' => $modalidade]);
    }
    public function edit(Modalidade $modalidade)
    {
        return view('admin.modalidades.modalidade_edit', ['modalidade' => $modalidade]);
    }
    public function store(Request $request){
        $mod = Modalidade::create([
            //nome do campo bd=> função request -> nome do input
            'modalidade' => $request->modalidade,
            'descricao' => $request->descricao,
            'valor_mensal' => $request->valor_mensal,
            'valor_anual' => $request->valor_anual,
        ]);
        return redirect()->route('/admin/modalidades')->with('success', true);
    }
    public function update(Request $request, Modalidade $mod)
    {
        $mod->update([
            'modalidade' => $request->modalidade,
            'descricao' => $request->descricao,
            'valor_mensal' => $request->valor_mensal,
            'valor_anual' => $request->valor_anual,
        ]);

        return redirect()->route('admin.modalidades.modalidade_edit');
    }
}
