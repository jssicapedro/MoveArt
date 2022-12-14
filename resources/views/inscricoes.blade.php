@extends('layout.master')

@section('title', 'MoveArt - Inscrições')

@section('links')
<link href="{{ asset('css/inscricoes.css') }}" rel="stylesheet">
@endsection

@section('hero')
<section id="benner_inscricoes">
    <div class="info">
        <h1>Inscrições</h1>
    </div>
</section>
@endsection

@section('main')
<section id="form_student">
    <div class="title">
        <h2>Torna-te um profissional na dança!</h2>
        <h4>Escolhe a tua dança e torna-te um(a) aluno(a).</h4>
    </div>
    <fieldset>
        <legend>Perfil</legend>
        <div class="form_perfil">
            <form>
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Nome...">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Apelido...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="genero">Género:</label>
                        <select id="genero" class="form-control">
                            <option value="F">Feminino</option>

                            <option value="M">Masculino</option>
                            <option value="O">Outro</option>
                            <option value="PND">Prefiro não divulgar</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="idade">Data de Nascimento:</label>
                        <input type="date" class="form-control" name="idade" id="idade">
                    </div>
                </div>
    </fieldset>
    <fieldset>
        <legend>Registro</legend>
        <div class="form_registro">
            <form>
                <div class="row">
                    <div class="col-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="password" class="form-control" name="pass" placeholder="Palavra-Passe">
                    </div>
                    <div class="col-6">
                        <input type="password" class="form-control" name="conf_pass" placeholder="Confirmar Palavra-Passe">
                    </div>
                </div>
            </form>
        </div>
    </fieldset>
    <fieldset>
        <legend>Dança</legend>
        <div class="row danca">
            <div class="col-6">
                <label for="tp_danca">Tipo de Dança:</label>
                <div class="card_tp_inscricao">
                    <select class=" tp_danca form-control">
                        @foreach($modalidade as $mod)
                        <option value="{{$mod->id}}">{{$mod->modalidade}}</option>
                        @endforeach
                    </select>
                    <section class="cards">
                        <article class="cart card--1">
                            <div class="card_img" style="background-image: url('{{ asset('img/modalidades/ballet.jpg')}}');"></div>
                            <div class="card_img--hover" style="background-image: url('{{ asset('img/modalidades/ballet.jpg')}}');"></div>
                            <div class="card_info_1">
                                <span class="card_epoca">Anual</span>
                                <input type="radio" name="tp_ins" value="anual" id="anual">
                                <h3 class="card_preco_1">
                                    <span class="valor_anual">880</span>€
                                </h3>

                            </div>
                        </article>
                        <article class="cart card--2">
                            <div class="card_img" style="background-image: url('{{ asset('img/modalidades/ballet.jpg')}}');"></div>
                            <div class="card_img--hover" style="background-image: url('{{ asset('img/modalidades/ballet.jpg')}}');"></div>
                            <div class="card_info_2">
                                <span class="card_epoca">Mensal</span>
                                <input type="radio" name="tp_ins" value="mensal" id="mensal">
                                <h3 class="card_preco_2">
                                    <span class="valor_mensal">75</span>€
                                </h3>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
        <div class="tp_pagamento">
            <div class="titulo">
                <h2>Modo de pagamento:</h2>
            </div>
            <ul>
                <li>
                    <input type="radio" name="pagamento" value="paypal" id="paypal">
                    <img src="{{asset('img/inscricoes/paypal.png')}}" alt="">
                </li>
                <li>
                    <input type="radio" name="pagamento" value="mbway" id="mbway">
                    <img src="{{asset('img/inscricoes/mb_way.png')}}" alt="">
                </li>
                <li>
                    <input type="radio" name="pagamento" value="multibanco" id="multibanco">
                    <img src="{{asset('img/inscricoes/multibanco.png')}}" alt="">
                </li>
                <li>
                    <input type="radio" name="pagamento" value="visa" id="visa">
                    <img src="{{asset('img/inscricoes/visa.png')}}" alt="">
                </li>
            </ul>
        </div>
    </fieldset>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary" id="enviar">Submeter
                <i class="fa-solid fa-square-check"></i>
            </button>
            <button type="reset" class="btn btn-secondary" id="tirar">Limpar
                <i class="fa-solid fa-brush"></i>
            </button>
        </div>
    </div>
    </form>
    </div>
</section>
<section id="imagem"></section>
<section id="form_prof">
    <div class="title">
        <h2>Venha trabalhar connosco!</h2>
        <h4>Deixe aqui o seu CV.</h4>
    </div>
    <div class="form">
        <form>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Nome...">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Apelido...">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="email" class="form-control" name="prof_email" id="prof_email" placeholder="Email...">
                </div>
                <div class="col-5">
                    <input type="number" class="form-control" placeholder="Telefone" max="9">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="dta_nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" name="dta_nasc" id="dta_nasc" placeholder="Data de Nascimento">
                </div>
                <div class="col-6">
                    <label for="tp_modalidade">Tipo de Modalidade:</label>
                    <select id="tp_modalidade" class="form-control ">
                        <option value="hip-hop">Hip-Hop</option>
                        <option value="Ballet">Ballet</option>
                        <option value="Folclore">Folclore</option>
                        <option value="danca_espanhola">Dança Espanhola</option>
                        <option value="danca_oriental">Dança Oriental</option>
                    </select>
                </div>
            </div>
            <div class="titulo">
                <h2>Importação do CV:</h2>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="application/pdf">
                        <span class="cv">*Ficheiro apenas em formato PDF</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary" id="enviar">Submeter
                        <i class="fa-solid fa-square-check"></i>
                    </button>
                    <button type="reset" class="btn btn-secondary" id="tirar">Limpar
                        <i class="fa-solid fa-brush"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
<section id="imagem1"></section>
<section id="form_patr">
    <div class="title">
        <h2>Ajude a nossa associação!</h2>
        <h4>Coloque algumas informações da empresa.</h4>
    </div>
    <div class="form">
        <form>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Nome Empresa">
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" placeholder="Telefone..." max="9">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="email" class="form-control" placeholder="Email...">
                </div>
                <div class="col-4">
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="Valor Patrocínio">
                        <div class="input-group-append">
                            <span class="input-group-text">€</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea name="patrocinio" class="form-control" id="" cols="30" rows="10" placeholder="Breve mensagem sobre o patrocínio"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary" id="sub">Submeter
                        <i class="fa-solid fa-square-check"></i>
                    </button>
                    <button type="reset" class="btn btn-secondary" id="limpar">Limpar
                        <i class="fa-solid fa-brush"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('change', '.tp_danca', function() {
            var mod_id = $(this).val();
            var div = $(this).parent();
            var op = " ";
            $.ajax({
                type: 'GET',
                url: '/precomensal',
                data: {
                    'id': mod_id
                },
                dataType: 'json',
                contentType: 'json',
                success: function(data) {

                    var price = data.valor_mensal;
                    div.find("span.valor_mensal").html(price);
                },
                error: function() {}
            });
        });
        $(document).on('change', '.tp_danca', function() {
            var mod_id = $(this).val();
            var div = $(this).parent();
            var op = " ";
            $.ajax({
                type: 'GET',
                url: '/precoanual',
                data: {
                    'id': mod_id
                },
                dataType: 'json',
                contentType: 'json',
                success: function(data) {

                    var price = data.valor_anual;
                    div.find("span.valor_anual").html(price);
                },
                error: function() {}
            });
        });
    });
</script>
@endsection