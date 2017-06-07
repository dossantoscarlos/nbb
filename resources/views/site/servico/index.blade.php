@extends('site.layouts.app')
@section('title', 'Servicos')
@section('content')
    <section class='container'>
      @foreach ($servicos as $rotulo)
        <div class="col-md-4 col-xs-12 col-sm-6">
            <h4 class='text-justify'>{{ $rotulo }}</h4>
            <img src="{{ asset('img/slide1.jpg') }}" alt="" class="img-rounded galeria-img">
            <p></p><p><a class='btn btn-success' role="button" href="{{ url("galeria/$rotulo")}}">Galeria...</a></p>
            <p><a class='btn btn-primary' target="_blank" role='button' href="{{url("contato/$rotulo")}}">Faça seu Agendamento...</a></p>
        </div>
      @endforeach
    </section>
    @component('site.default.servicos') @endcomponent
@endsection
