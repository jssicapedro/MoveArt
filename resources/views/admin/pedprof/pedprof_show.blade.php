@extends('layout.masterBO')

@section('title', 'MoveArt - Patrocínios')

@section('links')
<link rel="stylesheet" href="{{ asset('css/pedidos_back.css') }}">
@endsection

@section('main')
<div class="dashboard_main">
    <div class="pedidos_main">
        <a class="voltar" href="{{ asset('admin/pedprof')}}">Voltar</a>
        <div class="about">
            <h1>Sobre o pedido</h1>
            <hr>
            <form>
                @csrf
                <div class="row">
                    <div class="col-3">
                        <p class="sobre" for="">Nome</p> <br />
                        <p class="conteudo">{{$pedidos->primeiro}} {{$pedidos->apelido}}</p>
                    </div>
                    <div class="col-3">
                    <p class="sobre" for="">Email</p> <br />
                        <p class="conteudo">{{$pedidos->email}}</p>
                    </div>
                    <div class="col-3">
                        <p class="sobre" for="">Telefone</p> <br />
                        <p class="conteudo">{{$pedidos->telefone}}</p>
                    </div>
                    <div class="col-3">
                        <p class="sobre" for="">CV</p> <br />
                        <p class="conteudo"><a href="{!! route('cv_download', $pedidos->cv) !!}" download>Fazer Download do CV</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p class="sobre" for="">Data de nascimento</p> <br />
                        <p class="conteudo">{{$pedidos->data_nac}}</p>
                    </div>
                    <div class="col-4">
                        <p class="sobre" for="">Modalidade</p> <br />
                        <p class="conteudo">{{$pedidos->modalidade}}</p>
                    </div>
                </div>
                <div class="row resp">
                    <div class="col">
                        <label class="sobre" for="">Resposta</label> <br />
                        <textarea name="resposta" class="conteudo" readonly>{{$pedidos->resposta}}</textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection