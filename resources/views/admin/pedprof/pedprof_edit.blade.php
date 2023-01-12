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
                    <div class="cont">
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
                    </div>
                    <div class="responderPedido">
                        <h2>Modalidade sugerida</h2>
                        <textarea name="resposta" class="conteudo">{{$pedidos->resposta}}</textarea>
                        @if($pedidos->estado_do_pedido == 'aceite'||$pedidos->estado_do_pedido == 'recusado')
                        <div class="alerta">
                            <p class="error">Este pedido já foi respondido</p>
                        </div>
                        @else
                        <div class="btn">
                            <ul>
                                <li>
                                    <input type="radio" id="f-option" name="estado" value="aceite">
                                    <label for="f-option">Aceitar</label>
                                </li>
                                <li>
                                    <input type="radio" id="f-option" name="estado" value="recusado">
                                    <label for="f-option">Recusar</label>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif



                @if($pedidos->estado_do_pedido == 'aceite'||$pedidos->estado_do_pedido == 'recusado')

                @else
                <input class="enviar" type="submit" value="Enviar resposta">
                @endif
            </form>
        </div>
    </div>
</div>
@endsection