@extends('layout.admin')


@section('title', 'Utilizadores')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/users_back.css') }}">
@endsection

@section('script')

@endsection

@section('main')

    <div class="container " style="height: 100vh">
        <div class="d-flex justify-content-center align-items-center" style="padding-top:80px;">


            <div>
                <div class="table-responsive " style="padding: 50px">
                    <table class="table align-middle table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">Género</th>
                                <th scope="col">Função</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($users))
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->primeiro }} {{ $user->apelido }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->data_nasc }}</td>
                                        <td>{{ $user->genero }}</td>
                                        <td>{{ $user->perfil }}</td>
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

@endsection
