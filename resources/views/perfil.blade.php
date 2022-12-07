@extends('layout.master')

@section('title', 'MoveArt - Perfil')

@section('links')
<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
@endsection

@section('main')

<div class="container todas_informacoes_perfil">
<div class="foto_perfil_perfil">
    <img src="{{asset('img/contactos/foncionarios/imagem1.jpg')}}" alt="">
    </div>

    <div class="texto_perfil">
        <div class="row">
            <div class="primeiro_nome_perfil col-6">
                <p>Diogo</p>
            </div>
    
    
            <div class="apelido_nome_perfil col-6">
                <p>Santos</p>
            </div>
        </div>
    
        <div class="email_da_pessoa_perfil">
            <p>ptdiogohd@gmail.com</p>
        </div>
    
    
        <div class="contacto_da_pessoa_perfil">
            <p>914960317</p>
        </div>

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
    </div> 
    
    

</div>

<div class="modalidades_da_pessoa_perfil">

</div>
@endsection


@section('script')
<script src="{{ asset('js/perfil/perfil.js') }}"></script>
@endsection