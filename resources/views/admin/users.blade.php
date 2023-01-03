@extends('layout.admin')


@section('title', 'Utilizadores')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/users_back.css') }}">
@endsection

@section('script')

@endsection

@section('main')

    <div class="container " style="height: auto">
        <div id="area" style="padding-top:80px;">
        <div class="head_area">
            <h2>
                Utilizadores
            </h2>
            <button type="button" class="btn btn-light">Adicionar</button>
        </div>
        <div {{-- class="d-flex justify-content-center align-items-center" --}} >


            <div>
                <div class="table-responsive">
                    <table class="table align-middle table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">Género</th>
                                <th scope="col">Função</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($users))
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td id="user_photo">
                                            @if ($user->foto == null)
                                                <img src="{{ asset('img/inicio/user.jpg') }}" alt="">
                                            @else
                                                <img src="{{ url('storage/professores/' . $user->foto) }}" alt="">
                                            @endif
                                        </td>
                                        <td>{{ $user->primeiro }} {{ $user->apelido }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->data_nasc }}</td>
                                        <td>{{ $user->genero }}</td>
                                        <td>{{ $user->perfil }}</td>
                                        <td>view edit delete</td>
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
