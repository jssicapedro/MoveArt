@extends('layout.master')

@section('title', 'MoveArt - FaQs')

@section('links')
<link rel="stylesheet" href="css/faqs.css">
@endsection

{{-- inicio --}}
<div class="imagem_principal_contactos">
</div>
{{-- fim inicio --}}

@section('main')
<div class="faqs">
      <h2>FAQs</h2>
      <div class="conteudo">
        <div class="pergunta-resposta">
          <button id="botao-pergunta1" aria-expanded="false">
            <span class="pergunta">Qual a idade mínima para me inscrever na MoveArt</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="resposta">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
          <button id="botao-pergunta1" aria-expanded="false">
            <span class="pergunta">Posso-me inscrever em mais que uma modalidade?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="resposta">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
          <button id="botao-pergunta1" aria-expanded="false">
            <span class="pergunta">Os produtos da loja só são enviados para Portugal?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="resposta">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
          <button id="botao-pergunta1" aria-expanded="false">
            <span class="pergunta">Onde fica a associação MoveArt?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="resposta">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
          <button id="botao-pergunta1" aria-expanded="false">
            <span class="pergunta">Quantos tipos de dança existem na associação?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="resposta">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
        </div>
      </div>
    </div>
@endsection

@section('script')
<script src="{{ asset('js/faqs/faqs.js') }}"></script>
@endsection