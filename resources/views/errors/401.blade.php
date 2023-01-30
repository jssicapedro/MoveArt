@extends('layout.masterError')

@section('title', 'Erro 403')

@section('links')
<link rel="stylesheet" href="{{asset('css/error.css')}}">
@endsection


@section('main')
<!-- <div class="main_error"> -->
    <div class="erro403">
        <img src="{{ asset('img/errors/403Error.png') }}" alt="Criança a treinar ballet de tutu dentro de uma forma irregular sem background e com borda de cor de rosa">
        <div class="discription">
            <h1 tabindex="0">Erro 401</h1>
            <h3 tabindex="0">Não tens acesso a esta página</h3>
        </div>
    </div>
<!-- </div> -->
@endsection

@section('script')
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
@endsection