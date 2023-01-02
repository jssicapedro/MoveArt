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

<section>
        <div class="container">
          <div class="card">
            <div class="shoeBackground">
            <img src="{{ asset('img/eventosBO/arraial.png') }}" style="width:100%; border-radius:5px; " alt="">
            </div>
            <div class="info">
              <div>
                <div>
                  <h1>{{ $eventos->nome }}</h1>
                </div>
                <h3>Modalidade</h3>
              </div><br>
              <div class="description">
                <h3 class="title">Descrição</h3>
                <p class="text">
                {{ $eventos->descricao }}
                </p>
              </div>
              <div class="color-container">
                <h3>Data</h3>
                <div class="colors">
                {{ $eventos->data }}
                </div>
              </div>
              <div class="size-container">
                <h3 class="title">Localização</h3>
                <div class="sizes">
                {{ $eventos->localizacao }}
                </div>
              </div>
              <div class="buy-price">
                <div class="price">
                <img src="{{ asset('img/logo/logoBallet_p.png') }}" style="width:180px; margin-left:85px;" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


<!--
<h1>Editar Evento</h1>
<h1>{{ $eventos->nome }}</h1>

<h5>Data : {{ $eventos->data }}</h5>
<h5>Localização : {{ $eventos->localizacao }}</h5>
<h5>Foto : {{ $eventos->foto }}</h5>
<h5>Descrição : {{ $eventos->descricao }}</h5>
</div>-->

@stop