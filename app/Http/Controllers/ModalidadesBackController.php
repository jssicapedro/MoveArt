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
}
