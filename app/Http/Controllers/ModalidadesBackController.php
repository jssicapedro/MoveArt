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
    public function show(Modalidade $modalidade){
        return view('admin.modalidades.modalidade_show', ['modalidade' => $modalidade]);
    }
    
    public function create(){
        return view('admin.modalidades.modalidade_create');
    }
    public function store(Request $request){

       /* $foto_desc = $request->modalidade . '_desc.' . $request->foto_desc->extension();
         $foto_horario = $request->id.'_hora.' . $request->foto_horario->extension();
        $foto_mensal= $request->id.'_mensal.' . $request->foto_mensal->extension();
        $foto_anual= $request->id.'_anual.' . $request->foto_anual->extension();
        $foto_banner= $request->id.'_banner.' . $request->foto_banner->extension(); */

        /*$request->foto_desc->store('modalidades', $foto_desc);
         $request->foto_horario->storeAS('modalidades', $foto_horario);
        $request->foto_mensal->storeAS('modalidades', $foto_mensal);
        $request->foto_anual->storeAS('modalidades', $foto_anual);
        $request->foto_banner->storeAS('modalidades', $foto_banner); */

        Modalidade::create([
            //nome do campo bd=> função request -> nome do input
            'modalidade' => $request->modalidade,
            'descricao' => $request->descricao,
            'valor_mensal' => $request->valor_mensal,
            'valor_anual' => $request->valor_anual,
            /*'foto_desc' => $request->foto_desc,
             'foto_mensal' => $request->foto_mensal,
            'foto_anual' => $request->foto_anual,
            'foto_horario' => $request->foto_horario,
            'foto_banner' => $request->foto_banner, */
            
        ]);
        return back();
    }
    public function edit(Modalidade $modalidade)
    {
        return view('admin.modalidades.modalidade_edit', ['modalidade' => $modalidade]);
    }
    public function update(Request $request, Modalidade $mod)
    {
        $mod->update([
            'modalidade' => $request->modalidade,
            'descricao' => $request->descricao,
            'valor_mensal' => $request->valor_mensal,
            'valor_anual' => $request->valor_anual,
        ]);
        /* dd($request); */
        return redirect('admin/modalidades');
    }
    public function delete($modalidade)
    {
        Modalidade::destroy($modalidade);
        return 'sucesso';
        /* dd($modalidade->id);
        $modalidade->delete();
        return redirect('admin/modalidades'); */
    }
}
