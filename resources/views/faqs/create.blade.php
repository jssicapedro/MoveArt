@extends('layout.masterBO')

@section('title', 'MoveArt - faqsBO')

@section('links')
<link href="{{ asset('css/faqsBO.css') }}" rel="stylesheet">
@endsection

@section('main')
<div class="dashboard_main">
        <div class="parteSuperior">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <h1>faqs</h1>
            <div class="utilizador_dashboard">
                <span>Olá, admin</span>
            </div>

        </div>

        <!--dashboard_funcionarios/faqs-->
        <div class="baixo">
            <div class="dashboard_funcionarios">

        <h3>Adicionar Evento</h3><br>
    <form action="{{ url('evento') }}" method="post">
        {!! csrf_field() !!}
        <label for="">Pergunta</label><br>
        <input type="text" name="pergunta" placeholder="Pergunta" ><br>
        <label for="">Resposta</label><br>
        <input type="text" name="resposta" placeholder="Resposta" ><br>
        <input type="submit" value="Adicionar"  class="btn btn-success"></br>
    </form>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>
</div>
@stop