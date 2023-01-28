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


    <!-- Delete Modal -->
    <div class="modal fade" id="deletemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ url('delete-user') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Eliminar
                            Utilizador
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center align-items-center">
                        <div class="main_delete">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="icon_delete">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                </div>
                            </div>

                            <div id="delete_conta_text">
                                <input type="hidden" name="id_user" id="user_id">
                                <h6>
                                    Tem a certeza que pretende eliminar o utilizador?
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary delete_fechar canc"
                            data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary delete_conta delt">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div id="user_main_content">
        <div class="container " style="height: auto">
            <div id="area" style="padding:40px 100px 50px 100px;">

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
                                Utilizadores
                            </h2>

                        </div>
                        <div class="col-6">
                            <div class="buttons d-flex justify-content-end">
                                <div id="add">
                                    <a href="{{ url('add-user') }}" class="btn add">+ Adicionar</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="container" style="padding:35px 0; ">
                    <div class="row">
                        <div class="col-5">
                            <form action="{{ url('admin/users') }}" method="get">
                                <div class="d-flex justify-content-start align-items-center">
                                    <div style="padding-right:10px;">
                                        <input class="form-control" type="text" name="search" placeholder="Pesquisar"
                                            style="height: 44px; border-radius:25px;">

                                    </div>
                                    <div>
                                        <button class="btn search">Pesquisar</button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div>


                    <div id="accordion">
                        <div style="padding-bottom:50px; ">
                            @if (count($users))
                                <div class="table-responsive rr">

                                    <table class="table align-middle" style="margin: 0;">
                                        <thead style="padding:100px 0; ">
                                            <tr class="bottom_tr id-pad">
                                                <th class="pad" scope="col">ID</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Nascimento</th>
                                                <th scope="col">Género</th>
                                                <th scope="col">Função</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>


                                        @foreach ($users as $user)
                                            <tbody id="yy">
                                                <tr class="id-pad">
                                                    <td class="align-middle pad">{{ $user->id }}</td>
                                                    <td class="align-middle">
                                                        <div id="user_photo">
                                                            @if ($user->foto == null)
                                                                <img src="{{ asset('img/inicio/user.jpg') }}"
                                                                    alt="user">
                                                            @else
                                                                <img src="{{ url('storage/professores/' . $user->foto) }}"
                                                                    alt="user">
                                                            @endif
                                                        </div>

                                                    </td>
                                                    <td class="align-middle">{{ $user->primeiro }} {{ $user->apelido }}
                                                    </td>
                                                    <td class="align-middle">{{ $user->email }}</td>
                                                    <td class="align-middle">
                                                        {{ date('d-m-Y', strtotime($user->data_nasc)) }}</td>
                                                    <td class="align-middle">{{ $user->genero }}</td>
                                                    <td class="align-middle">
                                                       
                                                        <div class="{{ $user->perfil }}" >{{ $user->perfil }}</div>
                                                  
                                                   
                                                  
                                                
                                                  
                                                </td>
                                                    <td class="align-middle icon_btns">

                                                        <button class="btn viewbtn collapsed" data-toggle="collapse"
                                                            data-target="#view{{ $user->id }}" aria-expanded="false"
                                                            aria-controls="collapseThree"><i
                                                                class="fa-solid fa-eye"></i></button>

                                                        <a href="{{ url('edit-user/' . $user->id) }}"
                                                            class="btn editbtn"><i class="fa-solid fa-pencil"></i></a>


                                                        <button value="{{ $user->id }}" class="btn deletebtn"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="8" style="border-bottom-right-radius: 15px;"
                                                        class="hiddenRow">
                                                        <div id="view{{ $user->id }}" class="collapse"
                                                            aria-labelledby="headingThree" data-parent="#accordion">
                                                            <div class="container">
                                                                <div id="expand_user">
                                                                    <div class="row">
                                                                        <div class="col-3 nas">
                                                                            <div id="view_user_photo">
                                                                                @if ($user->foto == null)
                                                                                    <img src="{{ asset('img/inicio/user.jpg') }}"
                                                                                        alt="user">
                                                                                @else
                                                                                    <img src="{{ url('storage/professores/' . $user->foto) }}"
                                                                                        alt="user">
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-3 nas">
                                                                            <div class="user_name">
                                                                                <h2>{{ $user->primeiro }}
                                                                                    {{ $user->apelido }}
                                                                                </h2>
                                                                            </div>
                                                                            <div class="user_list">
                                                                                <ul>
                                                                                    <li><span>Nascimento:
                                                                                        </span>{{ date('d-m-Y', strtotime($user->data_nasc)) }}
                                                                                    </li>
                                                                                    <li><span>Género:
                                                                                        </span>{{ $user->genero }}
                                                                                    </li>

                                                                                    <li><span>Telefone:
                                                                                        </span>
                                                                                        @if ($user->telefone == null)
                                                                                            ---
                                                                                        @else
                                                                                            {{ $user->telefone }}
                                                                                        @endif
                                                                                    </li>

                                                                                    <li><span>Email:
                                                                                        </span>{{ $user->email }}
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3 nas">
                                                                            <div class="user_list"
                                                                                style="padding-top: 60px">
                                                                                <ul>
                                                                                    <li><span>CC: </span>
                                                                                        @if ($user->cc == null)
                                                                                            ---
                                                                                        @else
                                                                                            {{ $user->cc }}
                                                                                        @endif
                                                                                    </li>
                                                                                    <li><span>Nif: </span>
                                                                                        @if ($user->nif == null)
                                                                                            ---
                                                                                        @else
                                                                                            {{ $user->nif }}
                                                                                        @endif
                                                                                    </li>
                                                                                    <li><span>Localidade:
                                                                                        </span>
                                                                                        @if ($user->localidade == null)
                                                                                            ---
                                                                                        @else
                                                                                            {{ $user->localidade }}
                                                                                        @endif
                                                                                    </li>
                                                                                    <li><span>Rua: </span>
                                                                                        @if ($user->rua == null)
                                                                                            ---
                                                                                        @else
                                                                                            {{ $user->rua }}
                                                                                        @endif
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3 nas">
                                                                            <div class="user_list"
                                                                                style="padding-top: 60px">
                                                                                <ul>
                                                                                    <li><span>Código-Postal:
                                                                                        </span>
                                                                                        @if ($user->cod_postal == null)
                                                                                            ---
                                                                                        @else
                                                                                            {{ $user->cod_postal }}
                                                                                        @endif
                                                                                    </li>
                                                                                    <li><span>Perfil:
                                                                                        </span>{{ $user->perfil }}
                                                                                    </li>
                                                                                    <li><span>Modalidade:
                                                                                        </span>
                                                                                        @if ($user->modalidade == null)
                                                                                            ---
                                                                                        @else
                                                                                            {{ $user->modalidade }}
                                                                                        @endif
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        @endforeach




                                    </table>
                                </div>
                        </div>
                    @else
                        <h6 class="alert alert-danger">Não existem categorias registadas</h6>
                        @endif
                        <div class="d-flex justify-content-center">
                            {!! $users->withQueryString()->links() !!}
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $(document).on('click', '.deletebtn', function(e) {


                e.preventDefault();

                var user_id = $(this).val();
                $('#user_id').val(user_id);
                $('#deletemodal').modal('show');
            });
        });


        var backcolor = document.getElementById("perfil_css");
 

    </script>
    


@endsection
