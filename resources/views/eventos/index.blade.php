@extends('layout.masterBO')

@section('title', 'MoveArt - EventosBO')

@section('links')
<link href="{{ asset('css/eventosBO.css') }}" rel="stylesheet">
@endsection

@section('main')
<div class="dashboard_main">
        <div class="parteSuperior">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <h1>Eventos</h1>
            <div class="utilizador_dashboard">
                <span>Olá, admin</span>
            </div>

        </div>

        <!--dashboard_funcionarios/eventos-->
        <div class="baixo">
        <h3><a href="{{ url('/evento/create') }}" class="btn btn-success btn-sm" title="Adicionar Evento"><img src="{{ asset('img/eventosBO/add.png') }}" style="width:30px; height:; " alt=""></a></h3><br>
            <div class="dashboard_funcionarios">

                <table>
                    <thead>
                        <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Localização</th>
                        <th>Descrição</th>
                        </tr>
                    </thead>

                    <tbody>
                    @if (isset($eventos))
                    @foreach($eventos as $item)
                                    <tr>
                                        <td><img src="/img/eventosBO/{{ $item->foto }}" style="width:60px; height:; " alt=""></td>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->data }}</td>
                                        <td>{{ $item->localizacao }}</td>
                                        <td>{{ $item->descricao }}</td>
                                        <td>
                                        <a href="{{ url('/evento/' . $item->id) }}" title="View evento"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/evento/' . $item->id . '/edit') }}" title="Edit evento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            <form method="POST" action="{{ url('/evento' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete evento" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                            <td>Não existem categorias registadas</td>
                    @endif
                    </tbody>
                </table>
        </div>
</div>
@endsection



