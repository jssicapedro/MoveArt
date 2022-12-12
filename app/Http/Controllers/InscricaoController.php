<?php

namespace App\Http\Controllers;

use App\Models\Modalidade;
use Illuminate\Http\Request;
use Illuminate\Http\PageControlller;


class InscricaoController extends Controller
{
    public function inscricoes(){


    $modalidade=Modalidade::all();
        return view('inscricoes',compact('modalidade'));  

    }

    public function pqmensal(Request $request){

        $preco_mensal=Modalidade::select('valor_mensal','valor_anual','id')->where('id',$request->id)->take(5)->get();

        return response()->json($preco_mensal);
    }
     
}
