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
            <h1>Atualizar pedido</h1>
            <hr>
            <form action="{{ route('pedprof.update', ['pedidos' => $pedidos->id]) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-2">
                        <label class="sobre" for="">Nome</label> <br />
                        <input type="text" name="nome" class="conteudo" value="{{$pedidos->primeiro}}" readonly>
                    </div>
                    <div class="col-2">
                        <label class="sobre" for="">Apelido</label> <br />
                        <input type="text" name="nome" class="conteudo" value=" {{$pedidos->apelido}}" readonly>
                    </div>
                    <div class="col-2">
                        <label class="sobre" for="">Email</label> <br />
                        <input type="email" name="email" class="conteudo" value="{{$pedidos->email}}" readonly>
                    </div>
                    <div class="col-2">
                        <label class="sobre" for="">Telefone</label> <br />
                        <input type="tel" name="telefone" class="conteudo" value="{{$pedidos->telefone}}" readonly>
                    </div>
                    <div class="col-2">
                        <label class="sobre" for="">CV</label> <br />
                        <input type="file" name="cv" class="conteudo" value="{{$pedidos->cv}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label class="sobre" for="">Data de nascimento</label> <br />
                        <input type="text" name="dta_nac" class="conteudo" value="{{$pedidos->data_nac}}" readonly>
                    </div>
                    <div class="col-4">
                        <label class="sobre" for="">Modalidade</label> <br />
                        <input type="text" name="cv" class="conteudo" value="{{$pedidos->modalidade}}" readonly>
                    </div>
                    <div class="col-4">
                        <label class="sobre" for="">Curriculo</label> <br />
                        <input type="text" name="cv" class="conteudo" value="{{$pedidos->cv}}" readonly>
                    </div>
                </div>
                <div class="row resp">
                    <div class="col">
                        <label class="sobre" for="">Resposta</label> <br />
                        <textarea name="resposta" class="conteudo">{{$pedidos->resposta}}</textarea>
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" value="ATUALIZAR" class="enviar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection