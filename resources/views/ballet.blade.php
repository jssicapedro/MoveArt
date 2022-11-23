@extends('layout.master')

@section('title', 'MoveArt - Ballet')

@section('links')
<link rel="stylesheet" href="{{asset("css/danca.css")}}">
<link rel="stylesheet" href="{{asset("css/calendar.css")}}">
@endsection

@section('hero')
<section id="hero" class="inner-page d-flex align-items-center">
    <div class="img_banner ballet">
        <h1>Ballet</h1>
    </div>
</section>
@endsection

@section('main')
<div class="about">
    <div class="txt">
        <p>O Ballet é uma dança é o estilo de dança mais popular no
            mundo que exige muita técnica e precisão nos movimentos, com
            a ajuda dos nossos profissionais vais aprender e ser um dos
            melhores. </p>
        <br>
        <p>A nossa Instituição já foi premiada com ouro em 2020 e 2021.
            Queres ser o próximo? Vem connosco e entra nesta aventura.
        </p>
    </div>
    <img src="{{ asset('img/dancas/ballet/ballet_app.png') }}"
        alt="Criança a treinar ballet de tutu dentro de uma forma irregular sem background e com borda de cor de rosa">
</div>
<div class="advisors">
    <h2>Orientadores</h2>
    <div class="advisors_prof">
        <div>
            <img class="grafic1" style="position: absolute;" src="{{ asset('img/dancas/ballet/ballet_prof_.png') }}"
                alt="">
            <img class="prof" src="{{ asset('img/dancas/ballet/orientadores(3).png') }}" alt="">
            <h3>Andreia</h3>
        </div>
        <div>
            <img class="grafic2" style="position: absolute;" src="{{ asset('img/dancas/ballet/ballet_prof_.png') }}"
                alt="">
            <img class="prof" src="{{ asset('img/dancas/ballet/orientadores(2).png') }}" alt="">
            <h3>Beatriz</h3>
        </div>
        <div>
            <img class="grafic3" style="position: absolute;" src="{{ asset('img/dancas/ballet/ballet_prof_.png') }}"
                alt="">
            <img class="prof" src="{{ asset('img/dancas/ballet/orientadores(1).png') }}" alt="">
            <h3>André</h3>
        </div>
    </div>
</div>
<div class="calendar">
    <h2>Horário</h2>
    <div id="carousel" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <img width="100%" src="{{ asset('img/danasc/calendar.png') }}" class="d-block" alt="..."> -->
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Seg</th>
                            <th>Ter</th>
                            <th>Qua</th>
                            <th>Qui</th>
                            <th>Sex</th>
                            <th>Sab</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan=2>9h<br>10h</td>
                            <td rowspan=2 class="calendar_ballet"> Grátis </td>
                            <td rowspan=2 class="calendar_hiphop"> Grátis </td>
                            <td rowspan=2 class="calendar_oriental"> Grátis </td>
                            <td rowspan=2 class="calendar_espanhola"> Grátis </td>
                            <td rowspan=2 class="calendar_folclore"> Grátis </td>
                            <td class="calendar_ballet">Kids</td>
                        </tr>
                        <tr>
                            <td class="calendar_hiphop">Adulto</td>
                        </tr>
                        <tr>
                            <td rowspan=2>10h<br>11h</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="calendar_hiphop">Kids</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="calendar_ballet">Adulto</td>
                        </tr>
                        <tr>
                            <td>17h<br>18h</td>
                            <td class="calendar_ballet">Sénior</td>
                            <td class="calendar_folclore">Sénior</td>
                            <td class="calendar_espanhola">Sénior</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>18h<br>19h</td>
                            <td class="calendar_ballet">Kids</td>
                            <td class="calendar_espanhola">Kids</td>
                            <td class="calendar_hiphop">Kids</td>
                            <td class="calendar_folclore">Kids<br>Adulto<br>Sénior</td>
                            <td class="calendar_ballet">Kids</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan=2>19h<br>20h</td>
                            <td rowspan=2 class="calendar_folclore">Adulto</td>
                            <td rowspan=2 class="calendar_ballet">Adulto</td>
                            <td rowspan=2 class="calendar_oriental">Adulto</td>
                            <td></td>
                            <td class="calendar_hiphop">Kids</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="calendar_hiphop">Adulto</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="carousel-item">
                <img width="100%" src="{{ asset('img/dancas/ballet/calendar_ballet.png') }}" class="d-block" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="calendar_mobile">
    <h2>Horário</h2>
    <div class="image">
        <img src="{{asset('img/dancas/ballet/calendar_ballet.png') }}" data-toggle="modal"
            data-target="#exampleModal" />
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                    <!--Modal body with image-->
                    <div class="modal-body">
                        <img width="100%" src="{{ asset('img/dancas/ballet/calendar_ballet.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
*passe com o rato por cima para ver todos os detalhes da aula
@endsection