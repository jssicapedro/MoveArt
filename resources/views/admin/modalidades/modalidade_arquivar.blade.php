@extends('layout.masterBO')

@section('title', 'MoveArt - Modalidades Arquivadas')

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
    <div class="mod_arquivo_main">
        <h1>
            <span class="material-symbols-outlined reciclar">
                recycling
            </span>
            Modalidades Arquivadas
        </h1>
        <button class="return" style="margin-left: 10px;"><a href="{{ asset('admin/modalidades/')}}"><img class="icon_return" src="https://img.icons8.com/ios/50/null/left3.png" /></a></button>
        <div class="row head">
            <div class="col" style="text-align: center;">id</div>
            <div class="col" style="text-align: center;">Imagem</div>
            <div class="col" style="text-align: center;">Nome</div>
            <div class="col" style="text-align: center;">Valor Anual</div>
            <div class="col" style="text-align: center;">Valor Mensal</div>
            <div class="col" style="text-align: center;"></div>
        </div>
        @if(count($arquivos))
        @foreach($arquivos as $mod)
        <div class="row info">
            <div class="col" style="text-align: center;">{{$mod->id}}</div>
            <div class="col" style="text-align: center;">
            <img style="width: 60px; height:60px;padding:5px;" src="{{ url('storage/modalidades/'.$mod->foto_desc) }}" alt=""></div>
            <div class="col" style="text-align: center;">{{$mod->modalidade}}</div>
            <div class="col" style="text-align: center;">{{$mod->valor_anual}}€</div>
            <div class="col" style="text-align: center;">{{$mod->valor_mensal}}€</div>
            <div class="col">
                <div class="drop">
                    <ul class="ops">
                        <li>
                            <form action="{{ route('restaurar.modalidade', $mod->id) }}" method="GET">
                                @csrf
                                @method('get')
                                <button type="submit" class="delete">
                                    <a href="">
                                        <img src="https://img.icons8.com/plumpy/24/null/delete-trash.png" />
                                    </a>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        @endforeach
        @else
        <div class="alert alert-danger">Nenhuma modalidade arquivada</div>
        @endif
    </div>
</div>
@endsection