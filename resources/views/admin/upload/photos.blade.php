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
    background-color: #BF5329;
    border-radius: 12px;
    padding: 12px;
    color:#FFF;
    font-size: 18pt;
    text-align: center;
  }
  .file{
    padding-right: 12px;
  }
  #divUpload{
    margin-top: 70px;
  }
  label.btn{
    width: 300px;
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
  <div class='col-lg-12'>
    <form accept-charset="utf-8" name='form' enctype="multipart/form-data" method="post" action="{{route('pictures')}}">
      {{csrf_field()}}
      <div class="col-lg-8">
      <div class='form-group'>
          <label for='tag'>Nome da Galeria: </label>
          <input type='text' name='tag' id='tag' title='Nome da galeria' class='form-control' placeholder="Nome do evento">
       </div>
      <div class='form-group'>
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
      <div class='form-group'>
          <label for='descricao'>Descrição:</label>
          <textarea name='descrição' id='descricao' placeholder="Descreva sua galeria" class='form-control' rows="7"></textarea>
      </div>
      <div class='text-center'>
        <Button class='btn btn-primary' type='Submit' id='enviar'>Salvar Galeria</Button>
      </div>
    </div>
    <div id='divUpload' class="center-block col-lg-4">
      @include('admin.upload.include.file')
    </div>
    </form>
  </div>
  <div class='col-lg-4'>
  @if(isset($find))
    <a href={{asset($find->nomefoto)}}>image</a>
  @endif
</div>
 </body>
@endsection
