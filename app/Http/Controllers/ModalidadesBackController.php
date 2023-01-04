<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadesBackController extends Controller
{
    public function index(){
        return view('admin.modalidades.modalidade');
    }
}
