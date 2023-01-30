@extends('layout.masterBO')

@section('title', 'MoveArt - Modalidades Ver')

@section('links')
<link rel="stylesheet" href="{{ asset('css/modalidades_back.css') }}">
<!-- icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main')
<div class="dashboard_main">
    <div class="mod_show_main">
        <h1 class="title">
        <i class="fa-solid fa-eye"></i> Ver Modalidade
    </h1>
    <button class="return" ><a href="{{ asset('admin/modalidades/')}}"><img class="icon_return" src="https://img.icons8.com/ios/50/null/left3.png"/></a></button>
        <form action="{{ route('modalidades.show', $modalidade->id) }}">
            <div class="row info">
                <div class="col nome">
                    <h2>{{$modalidade->modalidade}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col descricao">
                    <p>{{$modalidade->descricao}}</p>
                </div>
            </div>
            <div class="table_valor">
                <h2>Valores</h2>
                <div class="valor_mensal">
                    <h4>Mensal</h4>
                    <p>{{$modalidade->valor_mensal}}€</p>
                </div>
                <div class="valor_anual">
                    <h4>Anual</h4>
                    <p>{{$modalidade->valor_anual}}€</p>
                </div>
            </div>
            <div class="row fotos">
                <div class="col">
                    <div class="title_fm">Foto Descrição</div>
                    <img class="img_fm" src="{{ url('storage/modalidades/'.$modalidade->foto_desc) }}" alt="">
                </div>
                <div class="col">
                    <div class="title_fh">Foto do horário</div>
                    <img class="img_fh" src="{{ url('storage/modalidades/'.$modalidade->foto_horario) }}" alt="">
                </div>
                <div class="col">
                    <div class="title_fmm">Foto Mensal</div>
                    <img class="img_fmm" src="{{ url('storage/modalidades/'.$modalidade->foto_mensal) }}" alt="">
                </div>
                <div class="col">
                    <div class="title_fma">Foto Anual</div>
                    <img class="img_fma" src="{{ url('storage/modalidades/'.$modalidade->foto_anual) }}" alt="">
                </div>
                <div class="col">
                    <div class="title_b">Foto banner</div>
                    <img class="img_b" src="{{ url('storage/modalidades/'.$modalidade->foto_banner) }}" alt="">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection