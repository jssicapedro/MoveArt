@extends('layout.master')

@section('title', 'MoveArt - Mapa de Aulas')

@section('links')
<link href="{{ asset('css/mapaaulas.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

<!--@section('hero')
<section id="hero" class="inner-page d-flex align-items-center">
    <div class="img_banner mapadeaulas">
        <h1>Mapa de Aulas</h1>
    </div>
</section>
@endsection-->
@section('hero')
<section id="hero" class="inner-page d-flex align-items-center">
    <div class="img_banner ballet">
        <h1>Ballet</h1>
    </div>
</section>
@endsection

@section('main')

<section class="gallery">
    <div class="container mapaaulas_container">
        <h2 class="section__title">
            Calendário
        </h2>
        <div class="row">
            <div class="gallery-filter">
                <span class="filter-item active" data-filter="geral">Geral</span>
                @if (count($modalidade))
                @foreach($modalidade as $modalidades)
                <span class="filter-item" data-filter="dancaballet">{{$modalidades->modalidade}}</span>
                @endforeach
                    @else
                    <h6>Não existem categorias registadas</h6>
                    @endif
            </div>
        </div>
        <div class="row">

            <div class="gallery-item geral">
                <div class="gallery-item-inner">
                    <img src="{{ asset('img/mapaaulas/calendar.png') }}" alt="geral">
                </div>
            </div>
            <div class="gallery-item dancaHiphop">
                <div class="gallery-item-inner">
                    <img src="{{ asset('img/mapaaulas/calendar_hiphop.png') }}" alt="hiphop">
                </div>
            </div>
            <div class="gallery-item dancaOrien">
                <div class="gallery-item-inner">
                    <img src="{{ asset('img/mapaaulas/calendar_oriental.png') }}" alt="dancaOrien">
                </div>
            </div>

            <div class="gallery-item dancaEsp">
                <div class="gallery-item-inner">
                    <img src="{{ asset('img/mapaaulas/calendar_espanhola.png') }}" alt="dancaEsp">
                </div>
            </div>

            <div class="gallery-item dancaballet">
                <div class="gallery-item-inner">
                    <img src="{{ asset('img/mapaaulas/calendar_ballet.png') }}" alt="ballet">
                </div>
            </div>

            <div class="gallery-item dancafolclore">
                <div class="gallery-item-inner">
                    <img src="{{ asset('img/mapaaulas/calendar_folclore.png') }}" alt="folclore">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="mapaaulas_imagem">
    <div>
        <div id="textoimagem">
            <h2 class="section__title">
                Inscreve-te na nossa associação
            </h2>
            <button>Novo Registo</button>
        </div>
    </div>
</section>

@endsection

@section('script')
<script src="{{ asset('js/mapaaulas/mapaaulas.js') }}"></script>
@endsection