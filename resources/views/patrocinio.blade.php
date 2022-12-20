@extends('layout.master')

@section('title', 'MoveArt - Inscrições')

@section('links')
<link href="{{ asset('css/inscricoes.css') }}" rel="stylesheet">
@endsection

@section('hero')
<section id="banner_patrocinio">
    <div class="info">
        <h1>Patrocínio</h1>
    </div>
</section>
@endsection

@section('main')
<section id="form_patr">
    <div class="title">
        <h2>Ajude a nossa associação!</h2>
        <h4>Coloque algumas informações da empresa.</h4>
    </div>
    <div class="form">
        <form>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Nome Empresa">
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" placeholder="Telefone..." max="9">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="email" class="form-control" placeholder="Email...">
                </div>
                <div class="col-4">
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="Valor Patrocínio">
                        <div class="input-group-append">
                            <span class="input-group-text">€</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea name="patrocinio" class="form-control" id="" cols="30" rows="10" placeholder="Breve mensagem sobre o patrocínio"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary" id="sub">Submeter
                        <i class="fa-solid fa-square-check"></i>
                    </button>
                    <button type="reset" class="btn btn-secondary" id="limpar">Limpar
                        <i class="fa-solid fa-brush"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection