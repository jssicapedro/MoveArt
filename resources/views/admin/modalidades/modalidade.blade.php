@extends('layout.masterBO')

@section('title', 'MoveArt - Modalidades')

@section('links')
<link rel="stylesheet" href="{{ asset('css/modalidades_back.css') }}">
<!-- icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main')
<div class="dashboard_main">
  <div class="modalidades_main">
    <h1>
      <img src="https://img.icons8.com/glyph-neue/64/null/dancing.png" /> Modalidades
    </h1>
    <button class="create"> <a href="{{ asset('/admin/modalidades/create') }}">Nova Modalidade <img src="https://img.icons8.com/plumpy/24/null/plus.png"/></a> </button>
    <button class="arquivo"><a href="{{ asset('/admin/modalidades/arquivos') }}">Arquivados</a></button>
    <div class="row head">
      <div class="col" style="text-align: center;">id</div>
      <div class="col" style="text-align: center;">Imagem</div>
      <div class="col" style="text-align: center;">Nome</div>
      <div class="col" style="text-align: center;">Valor Anual</div>
      <div class="col" style="text-align: center;">Valor Mensal</div>
      <div class="col" style="text-align: center;"></div>
    </div>
    @if(isset($modalidade))
    @foreach($modalidade as $mod)
    <div class="row info">
      <div class="col" style="text-align: center;">{{$mod->id}}</div>
      <div class="col" style="text-align: center;"><img style="width: 60px; height:60px;padding:5px;" src="{{ url('storage/modalidades/'.$mod->foto_desc) }}" alt=""></div>
      <div class="col" style="text-align: center;">{{$mod->modalidade}}</div>
      <div class="col" style="text-align: center;">{{$mod->valor_anual}}€</div>
      <div class="col" style="text-align: center;">{{$mod->valor_mensal}}€</div>
      <div class="col">
        <div class="drop">
          <ul class="ops">
            <li><a href="{{ route('modalidades.show', $mod->id) }}"><img src="https://img.icons8.com/plumpy/24/null/visible--v1.png"/></a></li>
            <li><a href="{{ route('modalidades.edit', $mod->id) }}"><img src="https://img.icons8.com/plumpy/24/null/edit--v1.png"/></a></li>
            <li>
              <form action="{{ route('modalidades.delete', $mod) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="delete">
                  <a href=""><img src="https://img.icons8.com/plumpy/24/null/delete--v1.png"/></a>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>

    </div>
    @endforeach
    @else
    <div class="alert alert-danger">Nenhuma modalidades registadas</div>
    @endif
  </div>
</div>
@endsection
<!-- @section('script')
<script>
  function show_hide() {
    var click = document.getElementById("drop");
    if (click.style.display === "block") {
      click.style.display = "none"
    } else {
      click.style.display = "block";
    }
  }
</script>
@endsection -->