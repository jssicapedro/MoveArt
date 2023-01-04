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
                <h2>
                    Utilizadores
                </h2>
                <button type="button" class="btn btn-light">Adicionar</button>
            </div>
            <div {{-- class="d-flex justify-content-center align-items-center" --}}>


                <div>
                    <div class="table-responsive" style="padding-bottom:50px; padding-top:50px;">
                        <table class="table align-middle ">
                            <thead>
                                <tr class="bottom_tr">
                                    <th scope="col">ID</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nascimento</th>
                                    <th scope="col">Género</th>
                                    <th scope="col">Função</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($users))
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="align-middle">{{ $user->id }}</td>
                                            <td class="align-middle" id="user_photo">
                                                @if ($user->foto == null)
                                                    <img src="{{ asset('img/inicio/user.jpg') }}" alt="user">
                                                @else
                                                    <img src="{{ url('storage/professores/' . $user->foto) }}"
                                                        alt="user">
                                                @endif
                                            </td>
                                            <td class="align-middle">{{ $user->primeiro }} {{ $user->apelido }}</td>
                                            <td class="align-middle">{{ $user->email }}</td>
                                            <td class="align-middle">{{ $user->data_nasc }}</td>
                                            <td class="align-middle">{{ $user->genero }}</td>
                                            <td class="align-middle">{{ $user->perfil }}</td>
                                            <td class="align-middle"><button data-toggle="collapse"
                                                    data-target="#demo{{ $user->id }}"
                                                    class="btn viewbtn accordion-toggle"><i
                                                        class="fa-solid fa-eye"></i></button><button class="btn editbtn"
                                                    data-bs-toggle="modal" data-bs-target="#editmodal"><i
                                                        class="fa-solid fa-pencil"></i></button><button
                                                    class="btn deletebtn"><i class="fa-solid fa-trash"></i></button></td>
                                        </tr>
                                        <tr>

                                            <td colspan="8" class="hiddenRow">
                                                <div id="demo{{ $user->id }}" class="accordian-body collapse">
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
                                                                        <h2>{{ $user->primeiro }} {{ $user->apelido }}
                                                                        </h2>
                                                                    </div>
                                                                    <div class="user_list">
                                                                        <ul>
                                                                            <li><span>Nascimento: </span>{{ $user->data_nasc }}</li>
                                                                            <li><span>Género: </span>{{ $user->genero }}</li>
                                                                            <li><span>Telefone: </span>{{ $user->telefone }}</li>
                                                                            <li><span>Email: </span>{{ $user->email }}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3 nas">
                                                                    <div class="user_list" style="padding-top: 46px">
                                                                        <ul>
                                                                            <li><span>CC: </span>{{ $user->cc }}</li>
                                                                            <li><span>Nif: </span>{{ $user->nif }}</li>
                                                                            <li><span>Localidade: </span>{{ $user->localidade }}</li>
                                                                            <li><span>Rua: </span>{{ $user->rua }}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3 nas">
                                                                    <div class="user_list" style="padding-top: 46px">
                                                                        <ul>
                                                                            <li><span>Código-Postal: </span>{{ $user->cod_postal }}</li>
                                                                            <li><span>Perfil: </span>{{ $user->perfil }}</li>
                                                                            <li><span>Modalidade: </span>{{ $user->telefone }}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                @else
                                    <h6>Não existem categorias registadas</h6>
                                @endif

                            </tbody>

                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {!! $users->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
