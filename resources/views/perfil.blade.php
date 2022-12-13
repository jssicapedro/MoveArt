@extends('layout.master')

@section('title', 'MoveArt - Perfil')

@section('links')
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
@endsection







@section('main')

    <div class="container todas_informacoes_perfil">
        <div class="titulo_perfil">
            <h1>Meu Perfil</h1>
        </div>
        <div class="infurmcoes_fundamental_perfil">
            <div class="foto_perfil_perfil">
                <img src="{{ asset('img/contactos/foncionarios/imagem1.jpg') }}" alt="">
            </div>
            <div class="bloco_total_de_texto_perfil">
                <div class="nome_da_pessoa_perfil">
                    <p>{{ Auth::user()->primeiro }} {{ Auth::user()->apelido }}</p>
                </div>

                <div class="genero_da_pessoa_perfil">
                    <p> Genero: {{ Auth::user()->genero }} </p>
                </div>

                <div class="perfil_da_pessoa_perfil">
                    <p> perfil: {{ Auth::user()->perfil }} </p>
                </div>

            </div>
            <div>
                    
            </div>
        </div>
        <div class="botoes_iguais_perfil">

            {{-- editar --}}

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

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fim editar --}}

            {{-- apagar --}}

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                apagar
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

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- fim apagar --}}

        </div>
    </div>

    {{-- localidade --}}
    <div class="segundo_bloco_total_perfil">
        <div>
            <div class="titulo_Morada_perfil">
                <h2>Morada</h2>
            </div>
            <div class="localidade_da_pessoa_perfil">
                <p>Localidade: {{ Auth::user()->localidade }}</p>
            </div>
            <hr>
            <div class=" rua_da_pessoa_perfil">
                <p>Rua: {{ Auth::user()->rua }}</p>
            </div>
            <hr>
            <div class=" codigo_postal_da_pessoa_perfil">
                <p>Codigo Postal: {{ Auth::user()->cod_postal }}</p>
            </div>
        </div>
        <div>
            <div class="titulo_contactos_perfil">
                <h2>Contactos</h2>
            </div>
            <div class="email_da_pessoa_perfil">
                <p>Email: {{ Auth::user()->email }}</p>
            </div>
            <hr>
            <div class="telefone_da_pessoa_perfil">
                <p>Telefone: {{ Auth::user()->telefone }}</p>
            </div>
        </div>
        <div>
            <div class="Modalidades">
                <h2>Informações</h2>
            </div>
            <div class="cc_da_pessoa_perfil">
                <p>Cartão de Cidadão: {{ Auth::user()->cc }}</p>
            </div>
            <hr>
            <div class="nif_da_pessoa_perfil">
                <p>NIF: {{ Auth::user()->nif }}</p>
            </div>
        </div>

    </div>
@endsection


@section('script')
    <script src="{{ asset('js/perfil/perfil.js') }}"></script>
@endsection
