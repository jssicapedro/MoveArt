@extends('layout.masterBO')

@section('title', 'MoveArt - Ver patrocínio')

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
                    <label class="sobre" for="">Resposta</label> <br />

                    @if(isset($patrocinio->resposta))
                    <textarea name="resposta" class="conteudo" readonly>{{$patrocinio->resposta}}</textarea>
                    @else
                    <textarea name="resposta" class="conteudo" readonly>Sem resposta</textarea>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>
@endsection