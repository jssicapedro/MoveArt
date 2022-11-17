@extends('layout.master')

@section('title', 'MoveArt - Contactos')

@section('links')
<link rel="stylesheet" href="{{asset("css/contactos.css")}}">
@endsection

@section('hero')

{{-- inicio --}}
<div class="imagem_principal_contactos" style="background-image: url({{asset('img/contactos/intrudocao/intrudocao.jpg')}})">
    <h1>Contactos</h1>
</div>
{{-- fim inicio --}}

@endsection
@section('main')
    {{-- espaço --}}
    <div style="margin: 50px"></div>
    {{-- fim de espaço --}}
    {{-- texto --}}
    
        <h2> Sobre nós </h2>
        <div class="sobre_nos_contactos">      
            <div class="sobre_nos_contactos_img">
                <img src="{{asset('img/contactos/sobre_nos/sobre_nos.png')}}">
            </div>
            
            <div class="sobre_nos_contactos_p">
                <p>
                    Nós somos uma instituição de dança em que inglobamos varios tipos de dança para qualquer um conseguir partecipar.
                </p>
            </div>
        </div>  
          {{-- fim texto --}}
        {{-- espaço --}}
        <div style="margin: 50px"></div>
        {{-- fim de espaço --}}
        <div class="container">
        <section class="splide funcionario_contactos" aria-labelledby="carousel-heading">
            <h3 id="carousel-heading" style="margin-bottom: 100px">Foncionarios</h3>
      
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <div class="card_slide">
                    <div class="img">
                      <img src="{{asset('img/contactos/foncionarios/imagem1.jpg')}}" style="width: 300px">
                    </div>
                  </div>
                  <div class="txt">
                    Jéssica Rodrigues
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="card_slide">
                    <div class="img">
                      <img src="{{asset('img/contactos/foncionarios/imagem2.jpg')}}" style="width: 300px">
                    </div>
                  </div>
                  <div class="txt">
                    Nuno Alves
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="card_slide">
                    <div class="img">
                      <img src="{{asset('img/contactos/foncionarios/imagem3.jpg')}}" style="width: 300px">
                    </div>
                  </div>
                  <div class="txt">Beatriz Sousa</div>
                </li>
                <li class="splide__slide">
                  <div class="card_slide">
                    <div class="img">
                      <img src="{{asset('img/contactos/foncionarios/imagem4.jpg')}}" style="width: 300px">
                    </div>
                  </div>
                  <div class="txt">Ema Pinto</div>
                </li>
                <li class="splide__slide">
                  <div class="card_slide">
                    <div class="img">
                      <img src="{{asset('img/contactos/foncionarios/imagem5.jpg')}}" style="width: 300px">
                    </div>
                  </div>
                  <div class="txt">Antonio Rodrigues</div>
                </li>
                <li class="splide__slide">
                    <div class="card_slide">
                      <div class="img">
                        <img src="{{asset('img/contactos/foncionarios/imagem6.jpg')}}" style="width: 300px">
                      </div>
                    </div>
                    <div class="txt">Rui Pavia</div>
                  </li>
                  <li class="splide__slide">
                    <div class="card_slide">
                      <div class="img">
                        <img src="{{asset('img/contactos/foncionarios/imagem7.jpg')}}" style="width: 300px">
                      </div>
                    </div>
                    <div class="txt">Nicol Povua</div>
                  </li>
                  <li class="splide__slide">
                    <div class="card_slide">
                      <div class="img">
                        <img src="{{asset('img/contactos/foncionarios/imagem8.jpg')}}" style="width: 300px">
                      </div>
                    </div>
                    <div class="txt">Saiman Saraiva</div>
                  </li>
                  <li class="splide__slide">
                    <div class="card_slide">
                      <div class="img">
                        <img src="{{asset('img/contactos/foncionarios/imagem9.jpg')}}" style="width: 300px">
                      </div>
                    </div>
                    <div class="txt">Bernardo Oliveira</div>
                  </li>
              </ul>
            </div>
          </section>
        </div>
        {{-- espaço --}}
        <div style="margin: 50px"></div>
        {{-- fim de espaço --}}
    {{-- mapa/contactos --}}
    <div>
        <h4>Contactos</h4>
    </div>
    <div class="contactos_mapa_contactos">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.462909770209!2d-8.809606355315596!3d39.751713900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22731378971305%3A0xb58c9ab655036fa7!2sAv.%2022%20de%20Maio%202%2C%20Leiria!5e0!3m2!1spt-PT!2spt!4v1668530300711!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>
            Localização: Av. Eng. Adelino Amaro da Costa 21, 2415-367 Leiria<br>
            Telefoné: 244 099 299<br>
            email: movart@gmail.com<br>
        </p>
    </div>
    {{-- fim mapa/contactos --}}
     {{-- espaço --}}
     <div style="margin: 50px"></div>
     {{-- fim de espaço --}}






@endsection
