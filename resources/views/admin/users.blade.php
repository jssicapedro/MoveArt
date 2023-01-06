@extends('layout.admin')


@section('title', 'Utilizadores')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/users_back.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('script')

@endsection

@section('main')

    <div class="container " style="height: auto">
        <div id="area" style="padding:100px 100px 50px 100px;">
            <div class="head_area">
                <div class="row">
                    <div class="col-6">
                        <h2>
                            Utilizadores
                        </h2>

                    </div>
                    <div class="col-6">
                        <div class="buttons d-flex justify-content-end">
                            <div id="add">
                                <button type="button" class="btn add">+ Adicionar</button>
                            </div>
                            <div id="load">
                                <button onClick="window.location.reload();" type="button"
                                    class="btn load">Atualizar</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div {{-- class="d-flex justify-content-center align-items-center" --}}>


                <div id="accordion">
                    <div style="padding:50px 0; ">
                    <div class="table-responsive rr" >
                        
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

                            @if (count($users))
                                @foreach ($users as $user)
                            
                                    <tbody id="yy">


                                        <tr class="id-pad">
                                            <td class="align-middle pad">{{ $user->id }}</td>
                                            <td class="align-middle">
                                                <div id="user_photo">
                                                    @if ($user->foto == null)
                                                        <img src="{{ asset('img/inicio/user.jpg') }}" alt="user">
                                                    @else
                                                        <img src="{{ url('storage/professores/' . $user->foto) }}"
                                                            alt="user">
                                                    @endif
                                                </div>

                                            </td>
                                            <td class="align-middle">{{ $user->primeiro }} {{ $user->apelido }}</td>
                                            <td class="align-middle">{{ $user->email }}</td>
                                            <td class="align-middle">{{ $user->data_nasc }}</td>
                                            <td class="align-middle">{{ $user->genero }}</td>
                                            <td class="align-middle">{{ $user->perfil }}</td>
                                            <td class="align-middle icon_btns">

                                                <button class="btn viewbtn collapsed" data-toggle="collapse"
                                                    data-target="#view{{ $user->id }}" aria-expanded="false"
                                                    aria-controls="collapseThree"><i class="fa-solid fa-eye"></i></button>

                                                <button class="btn editbtn collapsed" data-toggle="collapse"
                                                    data-target="#edit{{ $user->id }}" aria-expanded="false"
                                                    aria-controls="collapseThree"><i
                                                        class="fa-solid fa-pencil"></i></button>

                                                <button class="btn deletebtn"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="8" style="border-bottom-right-radius: 15px;" class="hiddenRow">
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
                                                                                </span>{{ $user->data_nasc }}</li>
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
                                                                    <div class="user_list" style="padding-top: 46px">
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
                                                                    <div class="user_list" style="padding-top: 46px">
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



                                        <tr>

                                            <td colspan="8" class="hiddenRow">
                                                <div id="edit{{ $user->id }}" class="collapse"
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
                                                                        <h2>esta bemmmm
                                                                        </h2>
                                                                    </div>
                                                                    <div class="user_list">
                                                                        <ul>
                                                                            <li><span>Nascimento:
                                                                                </span>{{ $user->data_nasc }}</li>
                                                                            <li><span>Género:
                                                                                </span>{{ $user->genero }}
                                                                            </li>
                                                                            <li><span>Telefone:
                                                                                </span>{{ $user->telefone }}</li>
                                                                            <li><span>Email: </span>{{ $user->email }}
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3 nas">
                                                                    <div class="user_list" style="padding-top: 46px">
                                                                        <ul>
                                                                            <li><span>CC: </span>{{ $user->cc }}
                                                                            </li>
                                                                            <li><span>Nif: </span>{{ $user->nif }}
                                                                            </li>
                                                                            <li><span>Localidade:
                                                                                </span>{{ $user->localidade }}</li>
                                                                            <li><span>Rua: </span>{{ $user->rua }}
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3 nas">
                                                                    <div class="user_list" style="padding-top: 46px">
                                                                        <ul>
                                                                            <li><span>Código-Postal:
                                                                                </span>{{ $user->cod_postal }}</li>
                                                                            <li><span>Perfil:
                                                                                </span>{{ $user->perfil }}
                                                                            </li>
                                                                            <li><span>Modalidade:
                                                                                </span>{{ $user->telefone }}</li>
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
                            @else
                                <h6>Não existem categorias registadas</h6>
                            @endif



                        </table>
                    </div>
                </div>

                    <div class="d-flex justify-content-center">
                        {!! $users->withQueryString()->links() !!}
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
