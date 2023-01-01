@extends('layout.masterBO')

@section('title', 'MoveArt - EventosBO')

@section('links')
<link href="{{ asset('css/eventosBO.css') }}" rel="stylesheet">
@endsection      

@section('main')
    <div class="dashboard_main">
        <div class="parteSuperior">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <h1>Eventos</h1>
            <div class="utilizador_dashboard">
                <span>Olá, admin</span>
            </div>

        </div>

        <!--dashboard_funcionarios/eventos-->
        <div class="baixo">
            <div class="dashboard_funcionarios">

        <h1>Editar Evento</h1>
        <h1>{{ $eventos->nome }}</h1>

<h5>Data : {{ $eventos->data }}</h5>
<h5>Localização : {{ $eventos->localizacao }}</h5>
<h5>Foto : {{ $eventos->foto }}</h5>
<h5>Descrição : {{ $eventos->descricao }}</h5>
</div>
</div>
@stop