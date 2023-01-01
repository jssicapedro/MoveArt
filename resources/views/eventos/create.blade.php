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

            <h1>Adicionar Evento</h1>
    <form action="{{ url('evento') }}" method="post">
        {!! csrf_field() !!}
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
        <input type="submit" value="Adicionar" class="btn btn-success"></br>
    </form>
</div>
</div>
@stop