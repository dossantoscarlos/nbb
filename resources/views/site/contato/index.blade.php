@extends('site.layouts.app')
@section('title','Contado')
@section('content')
  <script type='text/javascript'>
    window.onload = function(){
      'use strict';
      //variaveis de elementos html
      const span = document.getElementById('limite');
      const textarea = document.getElementById('mensagem');
      //variavel resposta 300
      let resposta = 300;
      //criando um evento keyup ao clickar
      textarea.addEventListener('keyup',valor,false);
      //funcao para contar as palavras e atualizar o innerHTML
      function valor(){
        let limites = textarea.value;
        resposta = (300 - limites.length);
        if (resposta<0){
            textarea.value = textarea.value.substring(0,301);
        }
        span.innerHTML = (resposta >=0) ? resposta : 0 ;
        recovery();
      }
      //funcao para "resetar" o campo da resposta do span
      function recovery(){
          if(resposta == 300){
            span.innerHTML = resposta;
          }
      }
      //inicia a funcao recovery
      recovery();
    };
  </script>
<section class='container' >
  <div class="row">
    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
        <div class='col-lg-12'>
            <h3 class='text-center text-capitalize'>QR code</h3>
            <img src="{{asset('img/qrcode.jpg')}}" id='qrcode' alt="QR Code" class='img-responsive center-block'/>
        </div>
        <div class='col-lg-12 text-center'>
            <address title='Locadouro'>
                <strong>Nega Branca Beauty</strong><br>
                Rua Luiz Reis, 425, Anchieta, Rio de Janeiro - RJ<br>
                <abbr title='telefone' class="text-capitalize">Tel</abbr>: (21) 9 9321 - 4565
            </address>
        </div>
    </div>
    <div class='col-md-6 col-lg-6 col-sm-6 col-xs-12'>
        <h3 class='panel-heading text-capitalize' style="margin-bottom:5%;">formulario para contado</h3>
      {{--
        @if(count($errors)==0)
          <div class="alert alert-success">
            <span class="text-success">
              Mensagem enviada com sucesso
            </span>
          </div>
        @endif
      --}}
        <form method="post" name="form_contato" action="{{ route('formulario') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                <input type="text" class="form-control" id="nome" placeholder="Nome" name='nome' value='{{ old("nome")}}' /></p>
                 @if ($errors->has('nome'))
                    <span class="help-block">
                        <b>{{ $errors->first('nome') }}</b>
                    </span>
                 @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" id="email" placeholder="E-mail" name='email' value='{{ old("email") }}'/></p>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <b>{{ $errors->first('email') }}</b>
                    </span>
                 @endif
            </div>
            <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                <input type="tel" class="form-control" id="tel" placeholder="(21) 9 9999-999" name='tel' value='{{ old("tel") }}'/></p>
                @if ($errors->has('tel'))
                    <span class="help-block">
                        <b>{{ $errors->first('tel') }}</b>
                    </span>
                 @endif
            </div>
            <div class='form-group'>
              @if(isset($servicos))
                <select name="assunto" class='form-control' id="assunto">
                  @foreach($servicos as $servico)
                    <option value='{{ $servico }}'>{{ $servico }}</option>
                  @endforeach
                </select>
              @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <textarea  name='mensagem' id='mensagem' placeholder="Mensagem" rows='5' class="form-control">{{ old("mensagem") }}</textarea></p>
                @if ($errors->has('mensagem'))
                    <span class="help-block">
                        <b>{{ $errors->first('mensagem') }}</b>
                    </span>
                 @endif
                <p>Mensagem: <span id='limite'></span> caracteres</p>
            </div>
            <p style="float:right"><Button class='btn btn-lg  btn-primary'>Send</Button></p>
        </form>
    </div>
  </div>
    @component('site.default.servicos') @endcomponent
</section>
@endsection
