@extends('layout.masterBO')

@section('title', 'MoveArt - Dashboard')

@section('links')
<link href="{{ asset('css/dashboardBO.css') }}" rel="stylesheet">
@endsection

@section('main')

    <div class="dashboard_main">
        <div class="parteSuperior">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <h3>Dashboard</h3>
            <div class="utilizador_dashboard">
                <span>Olá, admin</span>
            </div>

        </div>

        <div class="details">
            <div class="estatistica">
                <div class="caixa">
                    <div>
                        <div class="valor">X</div>
                        <div class="nome">Funcionários</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
                <div class="caixa">
                    <div>
                        <div class="valor">X</div>
                        <div class="nome">Modalidades</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="share-social-outline"></ion-icon>
                    </div>
                </div>
                <div class="caixa">
                    <div>
                        <div class="valor">X</div>
                        <div class="nome">Patrocínios</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="reader-outline"></ion-icon>
                    </div>
                </div>
                <div class="caixa">
                    <div>
                        <div class="valor">X</div>
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
                        <tr>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>X</td>
                            <td>X</td>
                        </tr>
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
                            <td>Modalidade</td>
                            <td>Função</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>

                        <tr>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>

                        <tr>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="dashboard_eventos">
                <div class="dashboard_subtitulo">
                    <h2>Eventos</h2>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Imagem</td>
                            <td>Nome</td>
                            <td>Data</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>

            <div>
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
                        <tr>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection