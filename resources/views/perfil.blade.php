@extends('layout.master')

@section('title', 'MoveArt - Perfil')

@section('links')
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
@endsection

@section('hero')

    <div class="titulo_perfil">
        <h1>Meu Perfil</h1>
    </div>

@endsection

@section('main')

    <div class="container todas_informacoes_perfil">
        <div class="foto_perfil_perfil">
            <img src="{{ asset('img/contactos/foncionarios/imagem1.jpg') }}" alt="">
        </div>

        <div class="texto_perfil">
            <div class="row">
                <div class="col-3">
                    <h2>Primeiro</h2>
                    <div class="primeiro_nome_perfil ">
                        <p>{{ Auth::user()->primeiro }}</p>
                    </div>
                </div>
                <div class="col-3">
                    <h3>Apelido</h3>
                    <div class="apelido_nome_perfil">
                        <p>{{ Auth::user()->apelido }}</p>
                    </div>
                </div>
                <div class="col-6">
                    <h3>Email</h3>
                    <div class="email_da_pessoa_perfil ">
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-3">
                    <h6>Genero</h6>
                    <div class="genero_perfil">
                        <p>{{ Auth::user()->genero }}</p>
                    </div>
                </div>
                <div class="col-3">
                    <h4>numero</h4>
                    <div class="contacto_da_pessoa_perfil ">
                        <p>{{ Auth::user()->telefone }}</p>
                    </div>
                </div>
                <div class="col-3">
                    <h6>Perfil</h6>
                    <div class="perfil_perfil">
                        <p>{{ Auth::user()->perfil }}</p>
                    </div>
                </div>
                <div class="col-3">
                    <h5>Data de Nacimento</h5>
                    <div class="data_de_nacimento_perfil">
                        <p>{{ Auth::user()->data_nasc }}</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
               
                <div class="col-4">
                    <h6>Cartão de Cidadão</h6>
                    <div class="Cartao_de_credito_perfil">
                        <p>{{ Auth::user()->cc }}</p>
                    </div>
                </div>
                <div class="col-4">
                    <h6>NIF</h6>
                    <div class="nif_perfil">
                        <p>{{ Auth::user()->nif }}</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">

                

            </div>
            <div class="row">
                <div class="col-4">
                    <h6>Localidade</h6>
                    <div class="Localidade_perfil">
                        <p>{{ Auth::user()->localidade }}</p>
                    </div>
                </div>
                <div class="col-4">
                    <h6>rua</h6>
                    <div class="rua_perfil">
                        <p>{{ Auth::user()->rua }}</p>
                    </div>
                </div>
                <div class="col-4">
                    <h6>Codigo Postal</h6>
                    <div class="cod_postal_perfil">
                        <p>{{ Auth::user()->cod_postal }}</p>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Edita
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="modalidades_da_pessoa_perfil">

    </div>
@endsection


@section('script')
    <script src="{{ asset('js/perfil/perfil.js') }}"></script>
@endsection
