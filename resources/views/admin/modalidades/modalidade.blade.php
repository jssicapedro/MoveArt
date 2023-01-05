@extends('layout.masterBO')

@section('title', 'MoveArt - Modalidades')

@section('links')
<link rel="stylesheet" href="{{ asset('css/modalidades_back.css') }}">
<!-- icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@endsection

@section('main')
<div class="dashboard_main">
  <div class="modalidades_main">
    <h1>Modalidades</h1>
    <div class="row head">
      <div class="col" style="text-align: center;">id</div>
      <div class="col" style="text-align: center;">Imagem</div>
      <div class="col" style="text-align: center;">Nome</div>
      <div class="col" style="text-align: center;">Valor Anual</div>
      <div class="col" style="text-align: center;">Valor Mensal</div>
      <div class="col" style="text-align: center;">Opções:</div>
    </div>
    @foreach($modalidade as $mod)
    <div class="row">
      <div class="col" style="text-align: center;">{{$mod->id}}</div>
      <div class="col" style="text-align: center;"><img style="width: 60px; height:60px;" src="{{ url('storage/modalidades/'.$mod->foto_desc) }}" alt=""></div>
      <div class="col" style="text-align: center;">{{$mod->modalidade}}</div>
      <div class="col" style="text-align: center;">{{$mod->valor_anual}}</div>
      <div class="col" style="text-align: center;">{{$mod->valor_mensal}}</div>
      <div class="col option">
        <span class="material-symbols-outlined">
          more_vert
        </span>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection