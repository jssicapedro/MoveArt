@extends('layout.masterBO')

@section('title', 'MoveArt - FAQsBO')

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
            <div class="utilizador_dashboard">
                <span>Olá, admin</span>
            </div>

        </div>

        <!--dashboard_funcionarios/eventos-->

<section>
<div class="faqs">
      <div class="conteudo">
        <div class="pergunta-resposta">
          <button id="botao-pergunta1" aria-expanded="false">
            <span class="pergunta">{{ $faqs->pergunta }}</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="resposta">
            <p>
            {{ $faqs->resposta }}
            </p>
          </div>
      </div>
</div>
      </section>
@stop

@section('script')
<script src="{{ asset('js/faqs/faqs.js') }}"></script>
@endsection