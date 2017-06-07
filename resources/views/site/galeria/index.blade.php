@extends('site.layouts.app')
@section('title',"$rotulo")
@section('content')
    <div class="container">
      @for ($i=0; $i < 9; $i++)
      <div class="col-lg-4">
        <figure class="figure">
            <img src="{{asset('img/logo.jpg')}}" width="270" height='200' title='{{ $rotulo }}' class="img-rounded" alt="galeria">
        </figure>
        <dl class="col-lg-9" style="padding:3px">
          <dt class="text-capitalize panel-heading">descricao</dt>
            <dd class="text-left">
              <p>
                Titulo: <b>{{ "Image" }}</b><br/>
                Data: <b>{{ "10/03/1991" }}</b><br>
              </p>
              <address class="text-left">
                <span class="text-capitalize">Fotografo: <b>{{ "nome" }}</b></span><br>
                <abbr title="E-mail">E-mail: </abbr>
                <a class="text-left" href='malito://email@email.com'>{{ "Email@email.com" }}</a>
              </address><!--dados de contado-->
            </dd><!--descricao-->
          </dl><!--fim da descricao -->
        </div><!-- col-lg-4 -->
    @endfor
  </div><!--container-->
@component('site.default.servicos')@endcomponent
@endsection
