@extends('layout.masterBO')

@section('title', 'MoveArt - Dashboard')

@section('links')
<!-- <link href="{{ asset('css/dashboardBO.css') }}" rel="stylesheet"> -->
@endsection

@section('script')
<script src="{{ asset('js/dashboardBO/contactos.js') }}"></script>
@endsection

@section('main')

    <div class="dashboard_main">
        <div class="parteSuperior">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <h3>Dashboard</h3>
            @auth
            <div class="utilizador_dashboard">
                <span>Olá, {{ Auth::user()->primeiro }}</span>
            </div>@endauth
        </div>

        <div class="details">
            <div class="estatistica">
                <div class="caixa">
                    <div>
                        <div class="valor">{{$users->count()}}</div>
                        <div class="nome">Funcionários</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
                <div class="caixa">
                    <div>
                        <div class="valor">{{$modalidade->count()}}</div>
                        <div class="nome">Modalidades</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="share-social-outline"></ion-icon>
                    </div>
                </div>
                <div class="caixa">
                    <div>
                        <div class="valor">{{$patrocinios->count()}}</div>
                        <div class="nome">Patrocínios</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="reader-outline"></ion-icon>
                    </div>
                </div>
                <div class="caixa">
                    <div>
                        <div class="valor">{{$evento->count()}}</div>
                        <div class="nome">Eventos</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="ticket-outline"></ion-icon>
                    </div>
                </div>
            </div>


            <!--Alunos por Modalidade-->
            <div class="alunosModalidade">
                <div class="dashboard_subtitulo">
                    <h2>Alunos por Modalidade</h2>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Modalidade</td>
                            <td>Nº Alunos</td>
                        </tr>
                    </thead>

                    
                    <tbody>
                    @if (count($modalidade))
                    @foreach($modalidade as $modalidades)
                    <tr>
                        <td>{{$modalidades->modalidade}}</td>
                        <td>{{$alunos_hiphop}}</td>
                    </tr>
                    @endforeach
                    @else
                    <td>Não existem dados registados</td>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>




        <!--dashboard_funcionarios/eventos-->
        <div class="baixo">
            <div class="dashboard_funcionarios">
                <div class="dashboard_subtitulo">
                    <h2>Funcionários</h2>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Email</td>
                            <td>Data Nascimento</td>
                            <td>Género</td>
                            <td>Função</td>
                        </tr>
                    </thead>

                    <tbody>
                    @if (isset($users))
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->primeiro}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{ date('d-m-Y', strtotime($user->data_nasc))}}</td>
                        <td>{{$user->genero}}</td>
                        <td>{{$user->perfil}}</td>
                    </tr>
                    @endforeach
                    @else
                    <h6>Não existem dados registados</h6>
                    @endif
                    </tbody>
                </table>
            </div>


            <div class="dashboard_patrocinios">
                <div class="dashboard_subtitulo">
                    <h2>Patrocínios</h2>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Valor</td>
                        </tr>
                    </thead>

                    <tbody>
                    @if (isset($patrocinios))
                    @foreach($patrocinios as $patrocinio)
                    <tr>
                        <td>{{$patrocinio->nome}}</td>
                        <td>{{$patrocinio->valor}}€</td>
                    </tr>
                    @endforeach
                    @else
                    <h6>Não existem categorias registadas</h6>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/dashboardBO/dashboardBO.js') }}"></script>
@endsection