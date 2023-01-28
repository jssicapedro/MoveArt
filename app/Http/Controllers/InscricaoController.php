<?php

namespace App\Http\Controllers;

use App\Models\Modalidade;
use Illuminate\Http\Request;

//Inscriçoes alunos
class InscricaoController extends Controller
{
    public function precomensal(Request $request)
    {

        $preco_mensal = Modalidade::select('valor_mensal')->where('id', $request->id)->first();

        return response()->json($preco_mensal);
    }

    public function precoanual(Request $request)
    {
        $preco_anual = Modalidade::select('valor_anual')->where('id', $request->id)->first();

        return response()->json($preco_anual);
    }
    public function imgmensal(Request $request)
    {
        $img_mensal = Modalidade::select('foto_mensal')->where('id',$request->id)->first();
        return response()->json($img_mensal);
    }
    public function imganual(Request $request)
    {
        $img_anual = Modalidade::select('foto_anual')->where('id',$request->id)->first();
        return response()->json($img_anual);
    }
}
