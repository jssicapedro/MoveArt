@extends('layout.master')

@section('title', 'MoveArt - Inscrições')

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
                    <div class="col-8">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email...">
                    </div>
                    <div class="col-4">
                        <input type="number" class="form-control" name="idade" id="idade" placeholder="Idade...">
                    </div>
                </div>
                <div class="titulo">
                    <h2>Tipos de dança:</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="radio" name="hip-hop" id="hip-hop">Hip-Hop
                        <input type="radio" name="ballet" id="ballet"> Ballet
                        <input type="radio" name="folclore" id="folclore"> Folclore
                        <input type="radio" name="danca_oriental" id="danca_oriental"> Dança Oriental
                        <input type="radio" name="danca_espanhola" id="danca_espanhola"> Dança Espanhola
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
                    <div class="col-5">
                        <input type="number" class="form-control" placeholder="Telefone" max="9">
                    </div>
                </div>
                <div class="titulo">
                    <h2>Importação do CV:</h2>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
                        <input type="text" class="form-control" placeholder="Nome...">
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control" placeholder="Telefone..." max="9">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="email" class="form-control" placeholder="Email..." >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <textarea name="patrocinio" class="form-control" id="" cols="30" rows="10" placeholder="Breve mensagem sobre o patrocínio"></textarea> 
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
@endsection