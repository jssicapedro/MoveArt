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

            <h1>Eventos</h1>
            @auth
            <div class="utilizador_dashboard">
                <span>Olá, {{ Auth::user()->primeiro }}</span>
            </div>@endauth
        </div>

        <!--dashboard_funcionarios/eventos-->
        <div class="baixo">
            <div class="dashboard_funcionarios">

            
        <h3>Editar FAQ</h3><br>
      <form action="{{ url('faq/' .$faqs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$eventos->id}}" id="id" />
        <label>Pergunta</label></br>
        <input type="text" name="pergunta" id="pergunta" placeholder="Pergunta" value="{{$faqs->pergunta}}" class="form-control"></br>
        <label>Resposta</label></br>
        <input type="text" name="resposta" id="resposta" placeholder="Resposta" value="{{$faqs->resposta}}" class="form-control"></br>
        <input type="submit" value="Atualizar" class="btn btn-success"></br>
    </form>
</div>
</div>
@stop