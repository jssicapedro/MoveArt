@extends('layout.masterBO')

@section('title', 'MoveArt - FaqsBO')

@section('links')
<link href="{{ asset('css/eventosBO.css') }}" rel="stylesheet">
@endsection

@section('main')
<div class="dashboard_main">
        <div class="parteSuperior">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <h1>FAQs</h1>
            @auth
            <div class="utilizador_dashboard">
                <span>Olá, {{ Auth::user()->primeiro }}</span>
            </div>@endauth
        </div>

        <!--dashboard_funcionarios/eventos-->
        <div class="baixo">
            <div class="dashboard_funcionarios">

        <h3>Adicionar FAQ</h3><br>
    <form action="{{ url('faq') }}" method="post">
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