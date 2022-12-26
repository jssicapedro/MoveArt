<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function create()
    {
        return view('eventos.create');
    }
}
