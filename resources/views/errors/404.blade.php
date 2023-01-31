@extends('layout.masterError')

@section('title', 'Erro 404')

@section('links')
<link rel="stylesheet" href="{{asset('css/error.css')}}">
@endsection


@section('main')
<div class="erro404">
    <img src="{{ asset('img/errors/404Error.gif') }}" alt="Criança a treinar ballet de tutu dentro de uma forma irregular sem background e com borda de cor de rosa">
    <div class="discription">
        <h1 tabindex="0">Erro 404</h1>
        <h3 tabindex="0">O recurso que solicitou não foi encontrado.</h3>
    </div>
</div>
@endsection

@section('script')
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
@endsection
