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
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Imagem</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor Anual</th>
      <th scope="col">valor Mensal</th>
      <th scope="col">Descrição</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
    </div>
</div>
@endsection