@extends('layout.master')

@section('title', 'MoveArt - Patrocínio')

@section('links')
<link href="{{ asset('css/inscricoes.css') }}" rel="stylesheet">
@endsection

@section('hero')
<section id="banner_patrocinio">
    <div class="info">
        <h1>Patrocínio</h1>
    </div>
</section>
@include('layout.flash-message')
@endsection

@section('main')
<section id="form_patr">
    <div class="title">
        <h2>Ajuda a nossa associação!</h2>
        <h4>Coloca as informações da tua empresa.</h4>
    </div>
    <div class="form">
        <form action="{{ route('register_patrocinio') }}" method="POST">
            @csrf <!-- impede que vá buscar info de outro lugar -->
            <div class="row">
                <div class="col-6">
                    <label for="">Nome da empresa *</label> <br />
                    <input type="text" name="nome" class="form-control" placeholder="Nome Empresa" value="{{ old('nome', '') }}">
                    @if ($errors->has('nome'))
                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                    @endif
                </div>
                <div class="col-6">
                    <label for="">Telefone</label> <br />
                    <input type="tel" name="telefone" class="form-control" placeholder="Telefone..." max="9" value="{{ old('telefone', '') }}">
                    @if ($errors->has('telefone'))
                    <span class="text-danger">{{ $errors->first('telefone') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">Email *</label> <br />
                    <input type="email" name="email" class="form-control" placeholder="Email..." value="{{ old('email', '') }}">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="col-4">
                    <label for="">Valor *</label> <br />
                    <div class="input-group">
                        <input type="number" min="50" name="valor" class="form-control" placeholder="Valor Patrocínio" value="{{ old('valor', '') }}">
                        <div class="input-group-append">
                            <span class="input-group-text">€</span>
                        </div>
                    </div>
                    <span class="cv">*Valor mínimo de 50€</span>
                    @if ($errors->has('valor'))
                    <span class="text-danger">{{ $errors->first('valor') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Mensagem *</label> <br />
                    <textarea name="mensagem" class="form-control" id="" cols="30" rows="10" placeholder="Breve mensagem sobre o patrocínio">{{ old('mensagem', '') }}</textarea>
                </div>
                @if ($errors->has('mensagem'))
                    <span class="text-danger">{{ $errors->first('mensagem') }}</span>
                    @endif
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