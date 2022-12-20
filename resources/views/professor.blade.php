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
@endsection

@section('main')
<section id="form_prof">
    <div class="title">
        <h2>Venha trabalhar connosco!</h2>
        <h4>Deixe aqui o seu CV.</h4>
    </div>
    <div class="form">
        <form>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Nome...">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Apelido...">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="email" class="form-control" name="prof_email" id="prof_email" placeholder="Email...">
                </div>
                <div class="col-5">
                    <input type="number" class="form-control" placeholder="Telefone" max="9">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="dta_nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" name="dta_nasc" id="dta_nasc" placeholder="Data de Nascimento">
                </div>
                <div class="col-6">
                    <label for="tp_modalidade">Tipo de Modalidade:</label>
                    <select id="tp_modalidade" class="form-control ">
                        <option value="hip-hop">Hip-Hop</option>
                        <option value="Ballet">Ballet</option>
                        <option value="Folclore">Folclore</option>
                        <option value="danca_espanhola">Dança Espanhola</option>
                        <option value="danca_oriental">Dança Oriental</option>
                    </select>
                </div>
            </div>
            <div class="titulo">
                <h2>Importação do CV:</h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="application/pdf">
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