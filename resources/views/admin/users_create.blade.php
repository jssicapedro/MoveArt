@extends('layout.masterBO')


@section('title', 'Utilizadores')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/users_back.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection



@section('main')
    <div id="user_main_content">
        <div class="container " style="height: auto">
            <div id="area" style="padding:40px 100px 0 100px;">

                <div class="head_area">
                    <div class="row">
                        <div class="col-12">
                            @if (session('status'))
                                <h6 class="alert alert-success">{{ session('status') }}</h6>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 head_title">

                            <h2>
                                Criar Utilizador
                            </h2>

                        </div>
                        <div class="col-6">
                            <div class="buttons d-flex justify-content-end">
                                <div id="save">
                                    <a href="{{ url('admin/users') }}" class="btn add">Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div style="padding: 60px 0">



                    <form action="{{ url('add-user') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="container form_add" style="background-color: white;border-radius:25px;">
                            <div style="padding: 0 80px;">
                            <div class="row first_row">
                                <div class="col-12 offset-md-3">
                                    <div class="desc_form">
                                        <h6>Informações Pessoais</h6>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row sec_row">
                                <div class="col-3 foto">
                                    <div class=" d-flex justify-content-start">
                                        <div class="profile-pic-div">
                                            <img src="{{ asset('img/inicio/user.jpg') }}" id="photo">
                                            <input type="file" id="file" name="foto">
                                            <label for="file" id="uploadBtn">
                                                <p class="icon_camara"><i class="bi bi-camera-fill"></i></p>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3 ">
                                    <div class="form-group mb-3">
                                        <label for="priemrionome">Primeiro Nome<span>*</span>:</label>
                                        <input type="text" name="primeiro" id="priemrionome"
                                            class="form-control form-control-sm input_style" value="{{ old('primeiro') }}">

                                        <span>
                                            @error('primeiro')
                                                <p class="msg_p">{{ $message }}</p>
                                            @enderror

                                        </span>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-3">
                                        <label for="apelido">Apelido<span>*</span>:</label>
                                        <input type="text" name="apelido" id="apelido"
                                            class="form-control form-control-sm input_style" value="{{ old('apelido') }}">

                                        <span>
                                            @error('apelido')
                                                <p class="msg_p">{{ $message }}</p>
                                            @enderror

                                        </span>

                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="genero">Género<span>*</span>:</label>
                                    <select class="form-select form-select-sm input_style" name="genero" id="genero">
                                        <option selected disabled hidden>escolhe...</option>
                                        <option value="Feminino" {{ old('genero') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                        <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                        <option value="Outro" {{ old('genero') == 'Outro' ? 'selected' : '' }}>Outro</option>
                                        <option value="Prefiro não divulgar" {{ old('genero') == 'Prefiro não divulgar' ? 'selected' : '' }}>Prefiro não divulgar</option>
                                    </select>

                                    <span>
                                        @error('genero')
                                            <p class="msg_p">{{ $message }}</p>
                                        @enderror

                                    </span>
                                </div>
                            </div>


                            <div class="row third_row">
                                
                                <div class="col-3 col_height offset-md-3">
                                    <div class="form-group mb-3">
                                        <label for="data_nasc">Nascimento<span>*</span>:</label>
                                        <input type="date" name="data_nasc" id="data_nasc"
                                            class="form-control form-control-sm input_style"
                                            value="{{ old('data_nasc') }}">

                                        <span>
                                            @error('data_nasc')
                                                <p class="msg_p">{{ $message }}</p>
                                            @enderror

                                        </span>

                                    </div>
                                </div>
                                <div class="col-3 col_height">
                                    <div class="form-group mb-3">
                                        <label for="telefone">Telefone<span>*</span>:</label>
                                        <input type="tel" name="telefone" id="telefone"
                                            class="form-control form-control-sm input_style" value="{{ old('telefone') }}">

                                        <span>
                                            @error('telefone')
                                                <p class="msg_p">{{ $message }}</p>
                                            @enderror

                                        </span>

                                    </div>
                                </div>
                                <div class="col-3 col_height">
                                    <div class="form-group mb-3">
                                        <label for="email">Email<span>*</span>:</label>
                                        <input type="text" name="email" id="email"
                                            class="form-control form-control-sm input_style" value="{{ old('email') }}">

                                        <span>
                                            @error('email')
                                                <p class="msg_p">{{ $message }}</p>
                                            @enderror

                                        </span>

                                    </div>
                                </div>
                            </div>

                            <div class="row forth_row">
                                
                                <div class="col-3 col_height  offset-md-3">
                                    <div class="form-group mb-3">
                                        <label for="password">Password<span>*</span>:</label>
                                        <input type="password" name="password" id="password"
                                            class="form-control form-control-sm input_style">

                                        <span>
                                            @error('password')
                                                <p class="msg_p">{{ $message }}</p>
                                            @enderror

                                        </span>

                                    </div>
                                </div>
                                <div class="col-3 col_height">
                                    <div class="form-group mb-3">
                                        <label for="password_confirmation">Confirmar Password<span>*</span>:</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="form-control form-control-sm input_style">

                                    </div>
                                </div>
                                <div class="col-3 col_height">
                                    <div class="form-group mb-3">
                                        <label for="cc">CC:</label>
                                        <input type="text" name="cc" id="cc"
                                            class="form-control form-control-sm input_style" value="{{old('cc')}}">
                                            @error('cc')
                                            <p class="msg_p">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row fifth_row">
                                
                                <div class="col-3 col_height offset-md-3">
                                    <div class="form-group mb-3">
                                        <label for="nif">Nif:</label>
                                        <input type="text" name="nif" id="nif"
                                            class="form-control form-control-sm input_style" value="{{old('nif')}}">
                                            @error('nif')
                                            <p class="msg_p">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row sixth_row">
                                <div class="col-12 offset-md-3">
                                    <div class="desc_form">
                                        <h6>Morada Pessoal</h6>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <div class="row seventh_row">
                                <div class="col-3 col_height offset-md-3">
                                    <div class="form-group mb-3">
                                        <label for="localidade">Localidade:</label>
                                        <input type="text" name="localidade" id="localidade"
                                            class="form-control form-control-sm input_style" value="{{old('localidade')}}">
                                            @error('localidade')
                                            <p class="msg_p">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-3 col_height">
                                    <div class="form-group mb-3">
                                        <label for="rua">Rua:</label>
                                        <input type="text" name="rua" id="rua"
                                            class="form-control form-control-sm input_style" value="{{old('rua')}}">
                                            @error('rua')
                                            <p class="msg_p">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-3 col_height">
                                    <div class="form-group mb-3">
                                        <label for="cod_postal">Código Postal:</label>
                                        <input type="text" name="cod_postal" id="cod_postal"
                                            class="form-control form-control-sm input_style" value="{{old('cod_postal')}}">
                                            @error('cod_postal')
                                            <p class="msg_p">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row sixth_row">
                                <div class="col-12 offset-md-3">
                                    <div class="desc_form">
                                        <h6>Definições de Conta</h6>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <div class="row nineth_row">
                                <div class="col-3 col_height offset-md-3">
                                    <div class="form-group mb-3">
                                        <label for="perfil">Perfil<span>*</span>:</label>
                                        <select class="form-select form-select-sm input_style" name="perfil"
                                            id="perfil">
                                            <option selected disabled hidden>escolhe...</option>
                                            <option value="Aluno" {{ old('perfil') == 'Aluno' ? 'selected' : '' }}>Aluno</option>
                                            <option value="Administrador" {{ old('perfil') == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                                            <option value="Professor" {{ old('perfil') == 'Professor' ? 'selected' : '' }}>Professor</option>
                                        </select>

                                        <span>
                                            @error('perfil')
                                                <p class="msg_p">{{ $message }}</p>
                                            @enderror

                                        </span>

                                    </div>
                                </div>
                                <div class="col-3 col_height">
                                    <div class="form-group mb-3">
                                        <label for="modalidade_id">Modalidade<span>*</span>:</label>
                                        <select class="form-select form-select-sm input_style" name="modalidade_id"
                                            id="modalidade_id">
                                            <option selected disabled hidden>escolhe...</option>
                                            <option value="1" {{ old('modalidade_id') == '1' ? 'selected' : '' }}>Ballet</option>
                                            <option value="2" {{ old('modalidade_id') == '2' ? 'selected' : '' }}>Hip-Hop</option>
                                            <option value="3" {{ old('modalidade_id') == '3' ? 'selected' : '' }}>Dança Espanhola</option>
                                            <option value="4" {{ old('modalidade_id') == '4' ? 'selected' : '' }}>Dança Oriental</option>
                                            <option value="5" {{ old('modalidade_id') == '5' ? 'selected' : '' }}>Folclore</option>
                                       
                                        </select>
                                        <span>
                                            @error('modalidade_id')
                                                <p class="msg_p">{{ $message }}</p>
                                            @enderror

                                        </span>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="row d-flex align-items-center" style="padding: 10px 0 80px 0">
                                <div class="col-3 offset-md-3 ">
                                    <div class="buttons d-flex justify-content-start">
                                        <p id="spancampo">( <span style="  color: #eb535b;">*</span> ) -
                                            Campo obrigatório</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="buttons d-flex justify-content-end ">
                                        <div id="adduser">
                                            <button type="submit" class="btn add">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    </form>



                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        //declearing html elements

        const imgDiv = document.querySelector('.profile-pic-div');
        const img = document.querySelector('#photo');
        const file = document.querySelector('#file');
        const uploadBtn = document.querySelector('#uploadBtn');


        file.addEventListener('change', function() {

            const choosedFile = this.files[0];

            if (choosedFile) {

                const reader = new FileReader(); //FileReader is a predefined function of JS

                reader.addEventListener('load', function() {
                    img.setAttribute('src', reader.result);
                });

                reader.readAsDataURL(choosedFile);

            }
        });
    </script>
@endsection
