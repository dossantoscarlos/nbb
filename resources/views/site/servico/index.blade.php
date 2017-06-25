@extends('site.layouts.app')
@section('title', 'Servicos')
@section('styles')
  <style type="text/css">
    .painel-div{
      width: 400px !important;
      margin:0 auto;
      display: block;
      padding: 22px !important;
      font-size: 14pt;
    }
  </style>
@endsection
@section('content')
    <section class='container'>
      @if(count($servicos)==0)
        <div class='alert alert-info text-center painel-div'>
          <span> Nenhum servico cadastrado no momento volte mais tarde</span>
        </div>
      @else
      @foreach ($servicos as $servico)
        <div class="col-lg-4 col-xs-12 col-sm-6">
            <h4 class='text-justify'>{{ $servico->nome }}</h4>
            <img src="{{ asset($servico->icon) }}" alt="{{ $servico->nome }}"
            title="{{ $servico->descricao}}" class="img-rounded galeria-img">
            <p></p><p>
              <a class='btn btn-success' role="button"
              href="{{ url("galeria/$servico->nome")}}">Galeria...</a></p>
            <p>
              <a class='btn btn-primary' target="_blank" role='button'
              href="{{url("contato/$servico->nome")}}">
              Faça seu Agendamento...</a></p>
        </div>
      @endforeach
    @endif

    {{ $servicos->links()}}
    </section>
    @component('site.default.servicos') @endcomponent
@endsection
