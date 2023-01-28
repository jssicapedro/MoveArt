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

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {{-- <form action="{{ route('pedprof.destroy', $pedidos->id) }}" method="POST">
                @csrf
                @method('DELETE') --}}
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Arquivar pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="pedprof_delete_id" id="pedprof_id">
                    <h5>Quer mesmo arquivar o pedido?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Arquivar</button>
                </div>
            <form>
        </div>
    </div>
</div>



<div class="dashboard_main">
    <div class="pedidos_main">
        <h1>Pedidos para Professor <span class="quantidade">({{$quantidade}} pendentes)</span></h1>
        <div class="voltar_quantidade">
            <a class="arquivados" href="{{ asset('/admin/pedprof/archive')}}">Arquivados</a>
        </div>
        <div class="table-wrapper">
            <div class="table-scroll">
                <table id="pedprof" class="table table-striped align-middle dataTable no-footer display">
                    <thead>
                        <tr class="title">
                            <th style="text-align: center;">id</th>
                            <th style="text-align: center;">Nome</th>
                            <th style="text-align: center;">Modalidade</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Telefone</th>
                            <th style="text-align: center;">CV</th>
                            <th style="text-align: center;">Estado</th>
                            <th style="text-align: center;" class="more">
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
                            @if($pedidos->estado_do_pedido =='aceite')
                            <td>
                                <p class="aceite">Aceite</p>
                            </td>
                            @elseif($pedidos->estado_do_pedido =='recusado')
                            <td>
                                <p class="recusado">Recusado</p>
                            </td>
                            @else
                            <td>
                                <p class="pendente">Pendente</p>
                            </td>
                            @endif
                            <td class="option">
                                <ul>
                                    <li>
                                        <a href="{{ route('pedprof.show', $pedidos->id) }}">
                                            <span class="material-symbols-outlined">
                                                visibility
                                            </span>
                                        </a>
                                    </li>
                                    @if($pedidos->estado_do_pedido=='pendente')
                                    <li><a href="{{ route('pedprof.edit', $pedidos->id) }}">
                                            <span class="material-symbols-outlined">
                                                edit
                                            </span>
                                        </a></li>
                                    @else
                                    <li></li>
                                    @endif
                                    <li>
                                        <button type="button" value="{{$pedidos->id}}" data-toggle="modal" data-target="#deletedModal" class="btn btn-danger deletePedBtn">
                                            <span class="material-symbols-outlined delete">
                                                delete
                                            </span>
                                        </button>
                                    </li>
                                    <!-- <li>
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
                                    </li> -->
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


    <!-- <div class="modal fade deletePedBtn" id="deleteModal" tabindex="-1" aria-labelledby="exempleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{-- <form action="{{ route('pedprof.destroy', $pedidos->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exempleModalLabel">Arquivar Pedido</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-boddy">
                        <input type="hidden" name="category_delete_id" id="category_id">
                        <h5>Tens a certeza que queres arquivar o pedido?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Arquivar</button>
                    </div>
                </form> --}}
            </div>
        </div>
    </div> -->
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
                {
                    "bSortable": false
                },
                {
                    "bSortable": false
                },
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

        $('.deletePedBtn').click(function(e) {
            e.preventDefault();

            var pedido_id = $(this).val();
            $('#pedprof_id').val(pedido_id);
            $('#deleteModal').modal('show');
        })
    });
</script>
@endsection