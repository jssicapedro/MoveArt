@extends('layout.masterBO')

@section('title', 'MoveArt - Patrocínios')

@section('links')
<link rel="stylesheet" href="{{ asset('css/patrocinios_back.css') }}">
<!-- icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- datatable
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> -->
@endsection

@section('main')
<div class="dashboard_main">
    <div class="patrocinio_main">
        <h1>Patrocínios</h1>
        <table class="table table-bordered yajra-datatable">
            <tr>
                <th>id</th>
                <th>Patrocinador</th>
                <th>Mensagem</th>
                <th>Valor</th>
                <th>Estado</th>
                <th>
                    <span class="material-symbols-outlined">
                        more_vert
                    </span>
                </th>
            </tr>
            <tbody>
                @if (count($patrocinios))
                @foreach($patrocinios as $patrocinio)
                <tr>
                    <td>{{$patrocinio->id}}</td>
                    <td>{{$patrocinio->nome}}</td>
                    <td class="mensagem">{{$patrocinio->mensagem}}</td>
                    <td>{{$patrocinio->valor}}</td>
                    
                        @if($patrocinio->estado =='sem reposta')
                            <td><p class="semR">Sem Resposta</p></td>
                        @elseif($patrocinio->estado =='respondido')
                            <td><p class="comR">Respondido</p></td>
                            @else
                            <h6>Não existem categorias registadas</h6>
                        @endif
                    </td>

                    <td>
                        <a href="">
                            <span class="material-symbols-outlined">
                                visibility
                            </span>
                        </a>
                        <a href="">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                        </a>
                        <a href="">
                            <span class="material-symbols-outlined">
                                delete
                            </span>
                        </a>
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
@endsection

@section('script')
<!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->

@endsection