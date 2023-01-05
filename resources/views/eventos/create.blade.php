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

            <h3>Adicionar Evento</h3><br>
    <form action="{{ url('evento') }}" method="post">
        {!! csrf_field() !!}
        <label for="">Nome</label><br>
        <input type="text" name="nome" placeholder="Nome" ><br>
        <label for="">Data</label><br>
        <input type="date" name="data" placeholder="Data" ><br>
        <label for="">Localizacao</label><br>
        <input type="text" name="localizacao" placeholder="Localização" ><br>
        <label for="">Foto</label><br>
        <input type="file" name="foto" placeholder="Foto"><br>
        <label for="">Descrição</label><br>
        <input type="text" name="descricao" placeholder="Descrição" ><br>
        <input type="submit" value="Adicionar"  class="btn btn-success"></br>
    </form>
</div>
</div>
@stop