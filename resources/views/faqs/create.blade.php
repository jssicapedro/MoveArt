@extends('layout.masterBO')

@section('title', 'MoveArt - faqsBO')

@section('links')
<link href="{{ asset('css/faqsBO.css') }}" rel="stylesheet">
@endsection

@section('main')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('faqs') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="pergunta" id="pergunta" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="resposta" id="resposta" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop