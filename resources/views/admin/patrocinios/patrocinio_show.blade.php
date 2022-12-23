@extends('layout.masterBO')

@section('title', 'MoveArt - Patrocínios')

@section('links')
<link rel="stylesheet" href="{{ asset('css/patrocinios_back.css') }}">
@endsection

@section('main')
<div class="dashboard_main">
    <div class="patrocinio_main">
        <a class="voltar" href="{{ asset('admin/patrocinio')}}">Voltar</a>
        <div class="nm_mail_tlf">
            <div class="nm">
                <p class="sobre">Nome do patrocinio</p>
                <p class="conteudo">{{$patrocinio->nome}}</p>
            </div>
            <div class="mail">
                <p class="sobre">Email</p>
                <p class="conteudo">{{$patrocinio->email}}</p>
            </div>
            <div class="tlf">
                <p class="sobre">Telefone</p>
                <p class="conteudo">{{$patrocinio->telefone}}</p>
            </div>
        </div>
        <div class="msg_val">
            <div class="msg">
                <p class="sobre">Mensagem</p>
                <p class="conteudo">{{$patrocinio->mensagem}}</p>
            </div>
            <div class="val">
                <p class="sobre">Valor</p>
                <p class="conteudo">{{$patrocinio->valor}}</p>
            </div>
        </div>
        <div class="resp">
            <p class="sobre">Resposta</p>
            <p class="conteudo">{{$patrocinio->resposta}}</p>
        </div>
        <!-- <a class="enviar" href="#">Enviar resposta</a> -->
    </div>
</div>
@endsection