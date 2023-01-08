@extends('layout.masterBO')

@section('title', 'MoveArt - Patrocínios')

@section('links')
<link rel="stylesheet" href="{{ asset('css/pedidos_back.css') }}">
@endsection

@section('main')
<div class="dashboard_main">
    <div class="pedidos_main">
        <a class="voltar" href="{{ asset('admin/pedprof')}}">Voltar</a>
        <h1 class="pedido_titulo">{{$pedidos->primeiro}} {{$pedidos->apelido}} <br /> <span class="mod_surg">({{$pedidos->modalidade}})</span></h1>
        <div class="pedido">
            <div class="info_exp">
                <div class="informacao">
                    <h2>Sobre</h2>
                    <p><span class="sob">Nome</span> {{$pedidos->primeiro}} {{$pedidos->apelido}}</p>
                    <p><span class="sob">Nascimento</span> {{ date('d-m-Y', strtotime($pedidos->data_nac))}}</p>
                    <p><span class="sob">Telefone</span> {{$pedidos->telefone}}</p>
                    <p><span class="sob">Email</span> <a href="mailto:{{$pedidos->email}}">{{$pedidos->email}}</a></p>
                </div>
                <div class="experiencia">
                    <h2>Experiência</h2>
                    <p><span class="sob">CV</span> <a href="{!! route('cv_download', $pedidos->cv) !!}" download>Fazer Download do CV</a></p>
                    <p><span class="sob">Modalidade sugerida</span> {{$pedidos->modalidade}}</p>
                </div>
            </div>
            <div class="responder">
                
                    <h2>Resposta dada</h2>
                    @if($pedidos->resposta == NULL)
                        <p>Sem Resposta</p>
                    @else
                        <p>{{$pedidos->resposta}}</p>
                    @endif
                
            </div>
        </div>
    </div>
</div>
@endsection