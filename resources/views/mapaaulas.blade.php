@extends('layout.master')

@section('title', 'MoveArt - Mapa de Aulas')

@section('hero')
<section id="hero" class="inner-page d-flex align-items-center">
    <div class="img_banner mapadeaulas">
        <h1>Mapa de Aulas</h1>
    </div>
</section>
@endsection

@section('main')

<section class="gallery">
    <div class="container">
        <h2 class="section__title">
            Calendário
        </h2>
        <div class="row">
            <div class="gallery-filter">
                <span class="filter-item active" data-filter="geral">Geral</span>
                <span class="filter-item" data-filter="dancaballet">Ballet</span>
                <span class="filter-item" data-filter="dancaHiphop">Hip-hop</span>
                <span class="filter-item" data-filter="dancaEsp">Dança Espanhola</span>
                <span class="filter-item" data-filter="dancaOrien">Dança Oriental</span>
                <span class="filter-item" data-filter="dancafolclore">Folclore</span>
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