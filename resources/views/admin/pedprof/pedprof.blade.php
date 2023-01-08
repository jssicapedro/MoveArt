@extends('layout.masterBO')

@section('title', 'MoveArt - Pedidos Professor')

@section('links')
<link rel="stylesheet" href="{{ asset('css/pedidos_back.css') }}">
<!-- icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('main')
<div class="dashboard_main">
    <div class="pedidos_main">
        <h1>Pedidos para Professor</h1>
        <a class="arquivados" href="{{ asset('/admin/pedprof/archive')}}">Arquivados</a>
        <div class="table-wrapper">
            <div class="table-scroll">
                <table id="pedprof" class="table table-striped align-middle dataTable no-footer display">
                    <thead>
                        <tr class="title">
                            <th>id</th>
                            <th>Nome</th>
                            <th>Modalidade</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>CV</th>
                            <th>Estado</th>
                            <th class="more">
                                <span class="material-symbols-outlined">
                                    more_vert
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($pedidos))
                        @foreach($pedidos as $pedidos)
                        <tr>
                            <td>{{$pedidos->id}}</td>
                            <td>{{$pedidos->primeiro}} {{$pedidos->apelido}}</td>
                            <td>{{$pedidos->modalidade}}</td>
                            <td>{{$pedidos->email}}</td>
                            <td>{{$pedidos->telefone}}</td>
                            <td><a href="{!! route('cv_download', $pedidos->cv) !!}" download>Fazer Download </a></td>
                            @if($pedidos->estado =='aceite')
                            <td>
                                <p class="aceite">Aceite</p>
                            </td>
                            @elseif($pedidos->estado =='recusado')
                            <td>
                                <p class="recusado">Recusado</p>
                            </td>
                            @else
                            <td>
                                <p class="pendente">Pendente</p>
                            </td>
                            @endif
                            </td>
                            <td class="option">
                                <ul>
                                    <li>
                                        <a href="{{ route('pedprof.show', $pedidos->id) }}">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pedprof.edit', $pedidos->id) }}">
                                            <span class="material-symbols-outlined">
                                                edit
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('pedprof.destroy', $pedidos->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete">
                                                <a href="">
                                                    <span class="material-symbols-outlined delete">
                                                        delete
                                                    </span>
                                                </a>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
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
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#pedprof').DataTable({

            searching: false,

            "columns": [
                null,
                {
                    "bSortable": false
                },
                {
                    "bSortable": false
                },
                {
                    "bSortable": false
                },
                null,
                null,
                null,
                {
                    "bSortable": false
                },
            ],
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ],
            "order": [
                [0, 'desc']
            ],
            "language": {
                "lengthMenu": "_MENU_ por página",
                "zeroRecords": "Sem dados",
                "info": "",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "paginate": {
                    "first": "Primeiro",
                    "last": "Ultimo",
                    "next": ">",
                    "previous": "<"
                }
            }

        });
    });
</script>
@endsection