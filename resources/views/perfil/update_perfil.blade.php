@extends('layout.master')

@section('title', 'MoveArt - EditPerfil')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/perfil_back.css') }}">
@endsection

@section('main')
    <div class="perfil_edit_tudo">
        <div class="perfil-edit-titulu" class="col-md-6 offset-md-3">
            <h1>Edite o seu perfil</h1>
        </div>

        @php
            /* print_r($errors); */
        @endphp
        
        @if($errors->any())
        <div class="alerta">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('update_perfil') }}" method="POST" class="tabela">
            @csrf
            @method('PUT')
            <div class="fila-perfi-edit">
                <div class="form-row">
                    <label>
                        <span> Primeiro nomes:</span>
                    </label>
                    <input type="text" name="primeiro" value="{{ old('primeiro', Auth::user()->primeiro) }}">
                </div>
                <div class="form-row">
                    <label>
                        <span>Aplido:</span>
                    </label>
                    <input type="text" name="apelido" value="{{ old('apelido', Auth::user()->apelido) }}">
                </div>
            </div>
            <div class="fila-perfi-edit">
                <div class="form-row">
                    <label>
                        <span>Email:</span>
                    </label>
                    <input type="text" name="email" value="{{ old('email', Auth::user()->email) }}">
                </div>
                <div class="form-row">
                    <label>
                        <span>Telemovel:</span>
                    </label>
                    <input type="number" name="telefone" value="{{ old('telefone', Auth::user()->telefone) }}">
                </div>
            </div>
            <div class="fila-perfi-edit">
                <div class="form-row">
                    <label>
                        <span>Data de nascimento:</span>
                    </label>
                    <input type="date" name="data_nasc" value="{{ old('data_nasc', Auth::user()->data_nasc) }}">
                </div>
                <div class="form-row">
                    <label>
                        <span>CC:</span>
                    </label>
                    <input type="cc" name="cc" value="{{ old('cc', Auth::user()->cc) }}">
                </div>
            </div>
            <div class="fila-perfi-edit">
                <div class="form-row">
                    <label>
                        <span>NIF:</span>
                    </label>
                    <input type="cc" name="nif" value="{{ old('nif', Auth::user()->nif) }}">
                </div>
                <div class="form-row">
                    <label>
                        <span>Localidade:</span>
                    </label>
                    <input type="text" name="localidade" value="{{ old('localidade', Auth::user()->localidade) }}">
                </div>
            </div>
            <div class="fila-perfi-edit">
                <div class="form-row">
                    <label>
                        <span>Rua:</span>
                    </label>
                    <input type="text" name="rua" value="{{ old('rua', Auth::user()->rua) }}">
                </div>
                <div class="form-row">
                    <label>
                        <span>codigo postal:</span>
                    </label>
                    <input type="text" name="cod_postal" value="{{ old('cod_postal', Auth::user()->cod_postal) }}">
                </div>
            </div>
            <div class="fila-perfi-edit">
                <div class="form-row">
                    <label>
                        <span> Genero </span>
                    </label>
                    <select name="genero">
                        <option value="feminino" @if (old('genero', Auth::user()->genero) == 'feminino') selected @endif>Feminino</option>
                        <option value="masculino" @if (old('genero', Auth::user()->genero) == 'masculino') selected @endif>Masculino
                        </option>
                        <option value="outro" @if (old('genero', Auth::user()->genero) == 'outro') selected @endif>Outro</option>
                        <option value="nao_divulgar" @if (old('genero', Auth::user()->genero) == 'nao_divulgar') selected @endif>Não divulgar
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="ok">Save</button>
                <a href="{{ route('perfil') }}" class="btn
            btn-default">Cancel</a>
            </div>
    </div>

@endsection
