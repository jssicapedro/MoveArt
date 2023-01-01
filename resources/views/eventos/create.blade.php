@extends('layout.masterBO')

@section('title', 'MoveArt - EventosBO')

@section('links')
<link href="{{ asset('css/eventosBO.css') }}" rel="stylesheet">
@endsection

@section('main')
<div class="eventosBO_main">
    <h1>Adicionar Evento</h1>
<form action="{{ route('registar_evento') }}" method="POST">
       @csrf
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>
        <label for="">Data</label><br>
        <input type="date" name="data"><br>
        <label for="">localizacao</label><br>
        <input type="text" name="nome"><br>
        <label for="">foto</label><br>
        <input type="text" name="nome"><br>
        <label for="">Descrição</label><br>
        <input type="text" name="descricao"><br>
        <button>Guardar</button>
    </form>
</div>
@endsection