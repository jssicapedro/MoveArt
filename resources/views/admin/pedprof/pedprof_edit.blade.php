@extends('layout.masterBO')

@section('title', 'MoveArt - Responder pedido')

@section('links')
<link rel="stylesheet" href="{{ asset('css/pedidos_back.css') }}">
@endsection

@section('main')
<div class="dashboard_main">
    <div class="pedidos_main">
        <a class="voltar" href="{{ asset('admin/pedprof')}}">Voltar</a>
        <div class="about">
            <h1>Responder a {{$pedidos->primeiro}}</h1>
            <hr>
            <form action="{{ route('pedprof.update', ['pedidos' => $pedidos->id]) }}" method="POST">
                @csrf
                <div class="pedidos_sobre">
                    <div class="acerca">
                        <h2>Sobre</h2>
                        <div class="acerca_sob">
                            <p class="sob_titulo">Nome</p>
                            <input type="text" name="primeiro" class="conteudo" value="{{$pedidos->primeiro}}" readonly>
                        </div>
                        <div class="acerca_sob">
                            <p class="sob_titulo">Apelido</p>
                            <input type="text" name="apelido" class="conteudo" value="{{$pedidos->apelido}}" readonly>
                        </div>
                        <div class="acerca_sob">
                            <p class="sob_titulo">Nascimento</p>
                            <input type="text" name="data_nac" class="conteudo" value="{{$pedidos->data_nac}}" readonly>
                        </div>
                        <div class="acerca_sob">
                            <p class="sob_titulo">Telefone</p>
                            <input type="text" name="telefone" class="conteudo" value="{{$pedidos->telefone}}" readonly>
                        </div>
                        <div class="acerca_sob">
                            <p class="sob_titulo">Email</p>
                            <input type="text" name="email" class="conteudo" value="{{$pedidos->email}}" readonly>
                        </div>
                    </div>
                    <div class="exp">
                        <h2>Experiência</h2>
                        <div class="acerca_sob">
                            <p class="sob_titulo">CV</p>
                            <input type="hidden" name="cv" class="conteudo" value="{{$pedidos->cv}}">
                            <a href="{!! route('cv_download', $pedidos->cv) !!}" download>Fazer Download do CV</a>
                        </div>
                        <div class="acerca_sob">
                            <p class="sob_titulo">Modalidade sugerida</p>
                            <input type="text" name="modalidade" class="conteudo" value="{{$pedidos->modalidade}}" readonly>
                        </div>
                    </div>
                    <div class="responderPedido">
                            <h2>Modalidade sugerida</h2>
                            <textarea name="resposta" class="conteudo">{{$pedidos->resposta}}</textarea>
                    <div class="btn">
                        <input type="radio" name="estado" value="aceite">Aceitar
                        <input type="radio" name="estado" value="recusado">Recusar
                    </div>
                </div>
            </div>
            <input class="enviar" type="submit">
        </form>
        </div>
    </div>
</div>
@endsection