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
                                <div id="add">
                                    <a href="{{ url('admin/users') }}" class="btn add">Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div>


                
                                <form action="{{ url('add-user') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="container form_add" style="padding:18px 0px 40px 0px;">
                                        <div class="row">
                                            <div class="col-12 foto">
                                                <div class=" d-flex justify-content-center">
                                                    <div class="profile-pic-div">
                                                        <img src="{{ asset('img/inicio/user.jpg') }}" id="photo">
                                                        <input type="file" id="file" name="foto" >
                                                        <label for="file" id="uploadBtn">
                                                            <p class="icon_camara"><i class="bi bi-camera-fill"></i></p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cont_form rr" style="padding:100px 50px 40px 50px;">
                                            <div class="row">


                                                <div class="col-4">
                                                    <div class="form-group mb-3">
                                                        <label for="priemrionome">Primeiro Nome<span>*</span></label>
                                                        <input type="text" name="primeiro" id="priemrionome"
                                                            class="form-control form-control-sm" value="{{old('primeiro')}}">

                                                        <span>
                                                            @error('primeiro')
                                                                <p class="msg_p">{{ $message }}</p>
                                                            @enderror

                                                        </span>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="data_nasc">Nascimento<span>*</span></label>
                                                        <input type="date" name="data_nasc" id="data_nasc"
                                                            class="form-control form-control-sm" value="{{old('data_nasc')}}">

                                                        <span>
                                                            @error('data_nasc')
                                                                <p class="msg_p">{{ $message }}</p>
                                                            @enderror

                                                        </span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="password">Password<span>*</span></label>
                                                        <input type="password" name="password" id="password"
                                                            class="form-control form-control-sm" >

                                                        <span>
                                                            @error('password')
                                                                <p class="msg_p">{{ $message }}</p>
                                                            @enderror

                                                        </span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="nif">Nif</label>
                                                        <input type="text" name="nif" id="nif"
                                                            class="form-control form-control-sm" value="{{old('nif')}}">
                                                            @error('nif')
                                                            <p class="msg_p">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="cod_postal">Código Postal</label>
                                                        <input type="text" name="cod_postal" id="cod_postal"
                                                            class="form-control form-control-sm" value="{{old('cod_postal')}}">
                                                            @error('cod_postal')
                                                            <p class="msg_p">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-4">
                                                    <div class="form-group mb-3">
                                                        <label for="apelido">Apelido<span>*</span></label>
                                                        <input type="text" name="apelido" id="apelido"
                                                            class="form-control form-control-sm" value="{{old('apelido')}}">

                                                        <span>
                                                            @error('apelido')
                                                                <p class="msg_p">{{ $message }}</p>
                                                            @enderror

                                                        </span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="telefone">Telefone<span>*</span></label>
                                                        <input type="tel" name="telefone" id="telefone"
                                                            class="form-control form-control-sm" value="{{old('telefone')}}">

                                                            <span>
                                                                @error('telefone')
                                                                    <p class="msg_p">{{ $message }}</p>
                                                                @enderror
    
                                                            </span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="password">Confirmar Password<span>*</span></label>
                                                        <input type="password" name="passwordc" id="password"
                                                            class="form-control form-control-sm">
                                                            
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="localidade">Localidade</label>
                                                        <input type="text" name="localidade" id="localidade"
                                                            class="form-control form-control-sm" value="{{old('localidade')}}">
                                                            @error('localidade')
                                                            <p class="msg_p">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="perfil">Perfil<span>*</span></label>
                                                        <select class="form-select form-select-sm" name="perfil"
                                                            id="perfil">
                                                            <option selected disabled hidden>escolhe...</option>
                                                            <option value="Aluno">Aluno</option>
                                                            <option value="Administrador">Administrador</option>
                                                            <option value="Professor">Professor</option>
                                                        </select>

                                                        <span>
                                                            @error('perfil')
                                                                <p class="msg_p">{{ $message }}</p>
                                                            @enderror

                                                        </span>

                                                    </div>

                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group mb-3">
                                                        <label for="genero">Género<span>*</span></label>
                                                        <select class="form-select form-select-sm" name="genero"
                                                            id="genero">
                                                            <option selected disabled hidden>escolhe...</option>
                                                            <option value="Feminino">Feminino</option>
                                                            <option value="Masculino">Masculino</option>
                                                            <option value="Outro">Outro</option>
                                                            <option value="Prefiro não divulgar">Prefiro não divulgar</option>
                                                        </select>

                                                        <span>
                                                            @error('genero')
                                                                <p class="msg_p">{{ $message }}</p>
                                                            @enderror

                                                        </span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="email">Email<span>*</span></label>
                                                        <input type="text" name="email" id="email"
                                                            class="form-control form-control-sm" value="{{old('email')}}">

                                                        <span>
                                                            @error('email')
                                                                <p class="msg_p">{{ $message }}</p>
                                                            @enderror

                                                        </span>

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="cc">CC</label>
                                                        <input type="text" name="cc" id="cc"
                                                            class="form-control form-control-sm" value="{{old('cc')}}">
                                                            @error('cc')
                                                            <p class="msg_p">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="rua">Rua</label>
                                                        <input type="text" name="rua" id="rua"
                                                            class="form-control form-control-sm" value="{{old('rua')}}">
                                                            @error('rua')
                                                            <p class="msg_p">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="modalidade_id">Modalidade</label>
                                                        <select class="form-select form-select-sm" name="modalidade_id"
                                                            id="modalidade_id">
                                                            <option selected disabled hidden>escolhe...</option>
                                                            @foreach ($modalidade as $mode)
                                                                <option value=" {{ $mode->id }}">
                                                                    {{ $mode->modalidade }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="buttons d-flex justify-content-start">
                                                        <p id="spancampo">( <span style="  color: #eeb2b5;">*</span> ) -
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



        //lets work for image showing functionality when we choose an image to upload

        //when we choose a foto to upload

        file.addEventListener('change', function() {
            //this refers to file
            const choosedFile = this.files[0];

            if (choosedFile) {

                const reader = new FileReader(); //FileReader is a predefined function of JS

                reader.addEventListener('load', function() {
                    img.setAttribute('src', reader.result);
                });

                reader.readAsDataURL(choosedFile);

                //Allright is done

                //please like the video
                //comment if have any issue related to vide & also rate my work in comment section

                //And aslo please subscribe for more tutorial like this

                //thanks for watching
            }
        });
    </script>
@endsection
