<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function index(){

        $user = User::find(1);
        return view('index', compact('user'));
    }

    public function ballet(){

        $user = User::first();

      
        return view('ballet');
    }

    public function hiphop(){
        return view('hiphop');
    }

    public function espanhola(){
        return view('espanhola');
    }

    public function oriental(){
        return view('oriental');
    }

    public function folclore(){
        return view('folclore');
    }

    public function contactos(){
        return view('contactos');
    }

    public function inscricoes(){
        return view('inscricoes');
    }

    public function mapaaulas(){
        return view('mapaaulas');
    }

    public function modalidades(){
        return view('admin/modalidades');
    }
}