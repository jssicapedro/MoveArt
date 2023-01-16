@extends('layout.master')

@section('title', 'MoveArt - Perfil')

@section('links')
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
@endsection

@section('main')
    <div class="junção_de_tudo_perfil">
        <div class="bloco_um_da_divisão_do_perfil">
            <div class="foto_do_perfil_perfi">
                <img src="{{ asset('storage/professores/' . Auth::user()->foto) }}" alt="">
            </div>
            <div class="tudo_meu_perfil_perfil">
                <div class="meu_perfil_perfil">
                    <h1>Meu Perfil</h1>
                </div>
                <div class="texto_do_meu_perfil_perfil">
                    <p>{{ Auth::user()->localidade }} {{ Auth::user()->rua }} {{ Auth::user()->cod_postal }}, {{ Auth::user()->data_nasc }}</p>
                </div>
            </div>
            <div class=" todas_as_informações_da_pessoa_bloco_um">
                <div class=" nome_da_pessoa_perfil ">
                    <h2>Nome</h2> 
                    <p> {{ Auth::user()->primeiro }} {{ Auth::user()->apelido }}</p>                    
                </div>
                <hr>
                <div class=" numero_da_pessoa_perfil ">
                    <h2>Telefone</h2>
                    <p> {{ Auth::user()->telefone }} </p>
                </div>
                <hr>
                <div class=" email_da_pessoa_perfil ">
                    <h2>Email</h2>
                    <p> {{ Auth::user()->email }} </p>
                </div>
                <hr>
            </div>
            <div class="frame">
                <a href="{{ route('update_perfil') }}"><button class="custom-btn-perfil btn-1-perfil">Edit</button></a>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('js/perfil/perfil.js') }}"></script>
@endsection
