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
        @if (isset($faqs))
@foreach($faqs as $item)
          <button id="botao-pergunta1" aria-expanded="false">
            <span class="pergunta">{{ $item->pergunta }}</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="resposta">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
            @endforeach
      @else
      <td>Não existem categorias registadas</td>
      @endif
          </div>
      </div>
</div>

@endsection

@section('script')
<script src="{{ asset('js/faqs/faqs.js') }}"></script>
@endsection