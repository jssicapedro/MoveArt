@extends('layout.master')

@section('title', 'MoveArt - Inscrições')

@section('links')
<link href="{{ asset('css/inscricoes.css') }}" rel="stylesheet">
@endsection

@section('hero')
<section id="banner_professor">
    <div class="info">
        <h1>Professor</h1>
    </div>
</section>
@include('layout.flash-message')
@endsection

@section('main')
<section id="form_prof">
    <div class="title">
        <h2>Venha trabalhar connosco!</h2>
        <h4>Deixe aqui o seu CV.</h4>
    </div>
    <div class="form">
        <form action="{{ route('register_professor') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="">Nome:</label>
                    <input name="primeiro" type="text" class="form-control" placeholder="Nome..." required>
                </div>
                <div class="col-6">
                    <label for="">Apelido</label>
                    <input name="apelido" type="text" class="form-control" placeholder="Apelido..." required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">Email</label>
                    <input name="email" type="email" class="form-control" name="prof_email" id="prof_email" placeholder="Email..." required>
                </div>
                <div class="col-5">
                    <label for="">Telefone</label>
                    <input name="telefone" type="tel" class="form-control" placeholder="Telefone" max="9" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">Data de Nascimento</label>
                    <input type="date" class="form-control" name="data_nac" id="dta_nasc" placeholder="Data de Nascimento">
                </div>
                <div class="col-6">
                    <label for="tp_modalidade">Tipo de Modalidade:</label>
                    <select name="modalidade" id="tp_modalidade" class="form-control" required>
                        <option value="Indiferente">Indiferente</option>
                        <option value="Ballet">Ballet</option>
                        <option value="Hip-Hop">Hip-Hop</option>
                        <option value="Dança Espanhola">Dança Espanhola</option>
                        <option value="Dança Oriental">Dança Oriental</option>
                        <option value="Folclore">Folclore</option>
                    </select>
                </div>
            </div>
            <div class="titulo">
                <h2>Importação do CV:</h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input name="cv" type="file" class="form-control-file" accept="application/pdf" required>
                        <span class="cv">*Ficheiro apenas em formato PDF</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary" id="enviar">Submeter
                        <i class="fa-solid fa-square-check"></i>
                    </button>
                    <button type="reset" class="btn btn-secondary" id="tirar">Limpar
                        <i class="fa-solid fa-brush"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection