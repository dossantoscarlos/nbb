@extends('admin.layouts.app')
@section('title','Upload - Fotos')
@section('scripts')
  <script type="text/javascript" src='{{asset('js/photos.js')}}'></script>
@endsection
@section('styles')
<style>
  .jumbotron{
    border:1px solid lightblue;
    background-color: #d9edf7 !important;
  }
  .customBackground{
    background-color: #EFA;
    border-radius: 12px;
    padding: 12px;
    text-align: center;
  }
</style>
@endsection

@section('content')
<div class="row">
  <div class='jumbotron bg-info'>
    <p class='text-center'>Faça upload de suas fotos fotos. Upload ate a 30 imagens.</p>
  </div>
  @if (count($errors) > 0 )
    <div class='alert alert-danger'>
      <ul>
        @foreach($errors as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
{{--galeria--}}
  <div class='col-lg-offset-2 col-lg-10'>
  <form accept-charset="utf-8" id='form' name='form'
  enctype="multipart/form-data" method="post" action="{{ route('pictures')}}">
    {{csrf_field() }}
    <div class='form-group col-lg-8'>
        <label for='galeria'>Nome da Galeria: </label>
        <input type='text' name='galeria' id='galeria' title='Nome da galeria' class='form-control' placeholder="Nome do evento">
     </div>
    <div class='form-group col-lg-8'>
      <label for='servico'>Servico: </label>
      <select name='servico' id='servico' class='form-control'>
        <option value="">Selecione o servico</option>
       @if(isset($servico))
        @foreach($servico as $itens)
          <option value="{{$itens->id}}" class='selector' >{{$itens->nome}}</option>
        @endforeach
       @endif
      </select>
      </div>
    <div class='form-group col-lg-8'>
      <input type="file" accept="image/*" class="form-control sr-only"  name="file_show[]" required multiple id="file_show">
      <div class='customBackground'>
        <span id='simulaFile'>Nenhum arquivo selecionado...&nbsp;</span>
        <label for='file_show' name='label[]' id='label' class='btn btn-success'>Upload File</label>
      </div>
    </div>
      <div class='form-group col-lg-8'>
        <label for='descricao'>Descrição:</label>
        <textarea name='descrição' id='descricao' placeholder="Descreva sua galeria" class='form-control' rows="7"></textarea>
      </div>
    <div class='col-lg-8 text-center'>
      <Button class='btn btn-primary' type='Submit' id='enviar'>Salvar Galeria</Button>
    </div>
  </form>
  </div>
</div>
</body>
@endsection
