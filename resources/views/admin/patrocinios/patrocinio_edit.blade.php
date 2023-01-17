@extends('layout.masterBO')

@section('title', 'MoveArt - Responder patrocínio')

@section('links')
<link rel="stylesheet" href="{{ asset('css/patrocinios_back.css') }}">
@endsection

@section('main')
<div class="dashboard_main">
    <div class="patrocinio_main">
        <a class="voltar" href="{{ asset('admin/patrocinio')}}">Voltar</a>
        <div class="about">
            <h1>Sobre o patrocínio</h1>
            <hr>
            <form action="{{ route('patrocinios.update', ['patrocinio' => $patrocinio->id]) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <label class="sobre" for="">Nome da empresa</label> <br />
                        <input type="text" name="nome" class="conteudo" value="{{$patrocinio->nome}}" readonly>
                    </div>
                    <div class="col-3">
                        <label class="sobre" for="">Valor</label> <br />
                        <div class="input-group">
                            <input type="number" name="valor" class="conteudo" value="{{$patrocinio->valor}}" readonly>
                        </div>
                    </div>
                    <div class="col-3">
                        <label class="sobre" for="">Email</label> <br />
                        <input type="email" name="email" class="conteudo" value="{{$patrocinio->email}}" readonly>
                    </div>
                    <div class="col-3">
                        <label class="sobre" for="">Telefone</label> <br />
                        <input type="tel" name="telefone" class="conteudo" value="{{$patrocinio->telefone}}" readonly>
                    </div>
                </div>
                <div class="row msg">
                    <div class="col">
                        <label class="sobre" for="">Mensagem enviada</label> <br />
                        <textarea name="mensagem" class="conteudo" readonly>{{$patrocinio->mensagem}}</textarea>
                    </div>
                </div>
                <div class="row resp">
                    <div class="col">
                        <label class="sobre" for="">Responder</label> <br />
                        <textarea name="resposta" class="conteudo">{{$patrocinio->resposta}}</textarea>
                        @if ($errors->any())
                        <div class="alerta alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <input type="hidden" name="estado" class="conteudo" value="respondido">
                @if($patrocinio->estado =='respondido')
                <div class="alerta">
                    <p class="error">Este patrocínio já foi respondido</p>
                </div>
                @else
                <div class="btn">
                    <input type="submit" value="ATUALIZAR" class="enviar">
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection