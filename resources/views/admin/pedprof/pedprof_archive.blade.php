@extends('layout.masterBO')

@section('title', 'MoveArt - Patrocínios')

@section('links')
<link rel="stylesheet" href="{{ asset('css/pedidos_back.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('main')
<div class="dashboard_main">
    <div class="pedidos_main">
        <h1>Pedidos Arquivados</h1>
        <a class="voltar" href="{{ asset('admin/pedprof')}}">Voltar</a>
        <div class="table-wrapper">
            <div class="table-scroll">
                <table id="arquivados" class="tabela-arquivados table table-striped align-middle dataTable no-footer display">
                    <thead>
                        <tr class="title">
                            <th>Nome</th>
                            <th>Modalidade</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>CV</th>
                            <th>Restaurar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($arquivados))
                        @foreach($arquivados as $arquivados)
                        <tr>
                            <td>{{$arquivados->primeiro}} {{$arquivados->apelido}}</td>
                            <td>{{$arquivados->modalidade}}</td>
                            <td>{{$arquivados->email}}</td>
                            <td>{{$arquivados->telefone}}</td>
                            <td><a href="{!! route('cv_download', $arquivados->cv) !!}" download>{{ $arquivados->cv }}</a></td>
                            <td>
                                <form action="{{ route('restore.pedprof', $arquivados->id) }}" method="GET">
                                    @csrf
                                    @method('get')
                                    <button type="submit" class="delete">
                                        <a href="">
                                            <span class="material-symbols-outlined restaurar">
                                                restore_from_trash
                                            </span>
                                        </a>
                                    </button>
                                </form>
                            </td>
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
        $('#arquivados').DataTable({

            searching: false,

            "columns": [
                null,
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
                {
                    "bSortable": false
                },
            ],
            pageLength: 10,
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
                "info": " _PAGE_ de _PAGES_ ",
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