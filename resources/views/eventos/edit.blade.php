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

            
        <h3>Editar Evento</h3><br>
      <form action="{{ url('evento/' .$eventos->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$eventos->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="nome" id="nome" placeholder="Nome" value="{{$eventos->nome}}" class="form-control"></br>
        <label>Data</label></br>
        <input type="date" name="data" id="data" placeholder="Data" value="{{$eventos->data}}" class="form-control"></br>
        <label>Localizacao</label></br>
        <input type="text" name="localizacao" id="localizacao" placeholder="Localização" value="{{$eventos->localizacao}}" class="form-control"></br>
        <label>Foto</label></br>
        <input type="file" name="foto" id="foto" placeholder="Foto" value="{{$eventos->foto}}" class="form-control"></br>
        <label>Descricao</label></br>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{$eventos->descricao}}" class="form-control"></br>
        <input type="submit" value="Atualizar" class="btn btn-success"></br>
    </form>
</div>
</div>
@stop