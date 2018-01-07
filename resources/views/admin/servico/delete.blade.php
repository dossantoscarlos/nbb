@extends('admin.layouts.app')
@section('title','Deletar servicos')
@section('scripts')
  <script type='text/javascript'>
    $(document).ready(function(){
      var http = "/nbb-admin/list/servicos/";

       //executa a consulta apos interacao
        $('select').blur(function(){
          $.getJSON(http+$('select').val())
           .done(function(data){
             $('#icon').attr('src',"/".concat(data[0].icon));
             $('#nomeServico').attr('value',data[0].nome);
             $('#textArea').text(data[0].descricao);
             console.log(data);
            })
           .fail(function(data,status,error){
             console.log(data + '\n' + status + '\n' + error);
           });
        });

    });
  </script>
@endsection
@section('styles')
  <style>
    #main{
      margin:0 auto;
      width: 600px;
      height: auto;
    }
  </style>
@endsection
@section('content')
  <div class='jumbotron'>
    <p class='text-center'>
      Painel para deletar serviços. Basta selecionar o serviço e clicar em deletar.
    </p>
  </div>
  @include('admin.servico.include.form')
@endsection
