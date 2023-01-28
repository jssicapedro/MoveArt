<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modalidade;

class ModalidadesBackController extends Controller
{
    public function index()
    {
        $modalidade = Modalidade::all();
        return view('admin.modalidades.modalidade', compact('modalidade'));
    }
    public function show(Modalidade $modalidade)
    {
        return view('admin.modalidades.modalidade_show', ['modalidade' => $modalidade]);
    }

    public function create()
    {
        return view('admin.modalidades.modalidade_create');
    }
    public function store(Request $request)
    {

        $request->validate(
            [
                'modalidade' => 'required',
                'descricao' => 'required',
                'valor_mensal' => 'required',
                'valor_anual' => 'required'
            ],
            [
                'modalidade.required' => 'Preencha o Nome',
                'descricao.required' => 'Preencha o Apelido',
                'valor_mensal.required' => 'Preencha o Género',
                'valor_anual.required' => 'Preencha a Data de Nascimento',
            ]
        );
        if($request->file('foto_desc')->isValid()){
            $nameFileDesc = $request->modalidade . '_desc.' . $request->foto_desc->extension();
            $request->foto_desc->storeAS('modalidades',$nameFileDesc);
        }
        if($request->file('foto_horario')->isValid()){
            $nameFileHor = $request->modalidade . '_horario.' . $request->foto_horario->extension();
            $request->foto_horario->storeAS('modalidades',$nameFileHor);
        }
        if($request->file('foto_mensal')->isValid()){
            $nameFileMensal = $request->modalidade . '_mensal.' . $request->foto_mensal->extension();
            $request->foto_mensal->storeAS('modalidades',$nameFileMensal);
        }
        if($request->file('foto_anual')->isValid()){
            $nameFileAnual = $request->modalidade . '_anual.' . $request->foto_anual->extension();
            $request->foto_anual->storeAS('modalidades',$nameFileAnual);
        }
        if($request->file('foto_banner')->isValid()){
            $nameFileBanner = $request->modalidade . '_banner.' . $request->foto_banner->extension();
            $request->foto_banner->storeAS('modalidades',$nameFileBanner);
        }
        Modalidade::create([
            //nome do campo bd=> função request -> nome do input
            'modalidade' => $request->modalidade,
            'descricao' => $request->descricao,
            'valor_mensal' => $request->valor_mensal,
            'valor_anual' => $request->valor_anual,
            'foto_desc' => $request->foto_desc,
            'foto_mensal' => $request->foto_mensal,
            'foto_anual' => $request->foto_anual,
            'foto_horario' => $request->foto_horario,
            'foto_banner' => $request->foto_banner, 
        ]);

        return redirect('admin/modalidades');
    }
    public function edit(Modalidade $modalidade)
    {
        return view('admin.modalidades.modalidade_edit', ['modalidade' => $modalidade]);
    }
    public function update(Request $request, Modalidade $modalidade)
    {
        $request->validate(
            [
                'modalidade' => 'required',
                'descricao' => 'required',
                'valor_mensal' => 'required',
                'valor_anual' => 'required'
            ],
            [
                'modalidade.required' => 'Preencha o Nome',
                'descricao.required' => 'Preencha o Apelido',
                'valor_mensal.required' => 'Preencha o Género',
                'valor_anual.required' => 'Preencha a Data de Nascimento',
            ]
        );

        if($request->file('foto_desc')){
            $nameFileDesc = $request->modalidade . '_desc.' . $request->foto_desc->extension();
            $request->foto_desc->storeAS('modalidades',$nameFileDesc);
        }
        if($request->file('foto_horario')){
            $nameFileHor = $request->modalidade . '_horario.' . $request->foto_horario->extension();
            $request->foto_horario->storeAS('modalidades',$nameFileHor);
        }
        if($request->file('foto_mensal')){
            $nameFileMensal = $request->modalidade . '_mensal.' . $request->foto_mensal->extension();
            $request->foto_mensal->storeAS('modalidades',$nameFileMensal);
        }
        if($request->file('foto_anual')){
            $nameFileAnual = $request->modalidade . '_anual.' . $request->foto_anual->extension();
            $request->foto_anual->storeAS('modalidades',$nameFileAnual);
        }
        if($request->file('foto_banner')){
            $nameFileBanner = $request->modalidade . '_banner.' . $request->foto_banner->extension();
            $request->foto_banner->storeAS('modalidades',$nameFileBanner);
        }

        $modalidade->update([
            'modalidade' => $request->modalidade,
            'descricao' => $request->descricao,
            'valor_mensal' => $request->valor_mensal,
            'valor_anual' => $request->valor_anual,
            'foto_desc' => $request->foto_desc,
            'foto_mensal' => $request->foto_mensal,
            'foto_anual' => $request->foto_anual,
            'foto_horario' => $request->foto_horario,
            'foto_banner' => $request->foto_banner,
        ]);
        return redirect('admin/modalidades');
    }
    public function delete($modalidade)
    {
        Modalidade::destroy($modalidade);
        return redirect('admin/modalidades');
        /* dd($modalidade->id);
        $modalidade->delete();
        return redirect('admin/modalidades'); */
    }
}
