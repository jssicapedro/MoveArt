@extends('layout.master')

@section('title', 'MoveArt - EditPerfil')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/perfil_back.css') }}">
@endsection

@section('main')
    <div class="perfil-edit-container" class="col-md-6 offset-md-3">
        <h1>Edite o seu perfil</h1>
    </div>

    @php 
        print_r($errors);
    @endphp

    <form action="{{ route('update_perfil') }}" method="POST" class="tabela">
        @csrf
        @method('PUT')
        <div class="form-grupo">
            <label for="title">Primeiro nomes:</label>
            <input type="text" name="primeiro" value="{{ old('primeiro', Auth::user()->primeiro)}}">
        </div>
        <div class="form-grupo">
            <label for="title">Aplido:</label>
            <input type="text" name="apelido" value="{{ old('apelido', Auth::user()->apelido )}}">
        </div>
        <div class="form-grupo">
            <label for="title">Email:</label>
            <input type="text" name="email" value="{{ old('email', Auth::user()->email )}}">
        </div>
        <div class="form-grupo">
            <label for="title">Telemovel:</label>
            <input type="number" name="telefone" value="{{old('telefone',  Auth::user()->telemovel )}}">
        </div>
        <div class="form-grupo">
            <label for="title">Data de nascimento:</label>
            <input type="date" name="data_nasc" value="{{old('data_nasc',  Auth::user()->data_nasc )}}">
        </div>
        <div class="form-grupo">
            <label for="title">CC:</label>
            <input type="cc" name="cc" value="{{old('cc',  Auth::user()->cc )}}">
        </div>
        <div class="form-grupo">
            <label for="title">NIF:</label>
            <input type="cc" name="nif" value="{{old('nif',  Auth::user()->nif )}}">
        </div>
        <div class="form-grupo">
            <label for="title"> Genero </label>
            <select name="genero">
                <option value="feminino" @if(old('genero', Auth::user()->genero) == 'feminino') selected @endif>Feminino</option>
                <option value="masculino" @if(old('genero', Auth::user()->genero) == 'masculino') selected @endif>Masculino</option>
                <option value="outro"  @if(old('genero', Auth::user()->genero) == 'outro') selected @endif>Outro</option>
                <option value="nao_divulgar"  @if(old('genero', Auth::user()->genero) == 'nao_divulgar') selected @endif>Não divulgar</option>
            </select>
        </div>
        <div class="form-grupo">
            <label for="title">Localidade:</label>
            <input type="text" name="localidade" value="{{old('localidade',  Auth::user()->localidade )}}">
        </div>
        <div class="form-grupo">
            <label for="title">Rua:</label>
            <input type="text" name="rua" value="{{old('rua',  Auth::user()->rua )}}" >
        </div>
        <div class="form-grupo">
            <label for="title">codigo postal:</label>
            <input type="text" name="cod_postal" value="{{old('cod_postal',  Auth::user()->cod_postal )}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success"
            name="ok">Save</button>
            <a href="{{route('perfil')}}" class="btn
            btn-default">Cancel</a>
            </div>

@endsection
