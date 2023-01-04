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
      <form action="{{ url('evento/' .$eventos->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$eventos->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="nome" id="nome" value="{{$eventos->nome}}" class="form-control"></br>
        <label>Data</label></br>
        <input type="text" name="data" id="data" value="{{$eventos->data}}" class="form-control"></br>
        <label>localizacao</label></br>
        <input type="text" name="localizacao" id="localizacao" value="{{$eventos->localizacao}}" class="form-control"></br>
        <label>foto</label></br>
        <input type="file" name="foto" id="foto" value="{{$eventos->foto}}" class="form-control"></br>
        <label>descricao</label></br>
        <input type="text" name="descricao" id="descricao" value="{{$eventos->descricao}}" class="form-control"></br>
        <input type="submit" value="Atualizar" class="btn btn-success"></br>
    </form>
</div>
</div>
@stop