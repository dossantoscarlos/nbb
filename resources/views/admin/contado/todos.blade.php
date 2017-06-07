@extends('admin.layouts.app')
@section('title','Todos os contados')
@section('scripts')
  <script type='text/javascript' src='{{asset('js/contados.js')}}'></script>
@endsection
@section('styles')
<style>
  .navbar-form > .form-control{
    width: 70% !important;
  }
</style>
@endsection
@section('content')

<section class="row">
  <div class="col-lg-offset-2 jumbotron col-lg-8">
    <p class="text-center">Painel de exibição de todos os contados</p>
    <div class="container text-center" role="form">
      <form class="navbar-form" role="search" method='get' action='{{route('buscar')}}'>
        {{-- csrf_field() --}}
          <input type="text" class="form-control" name='buscar' id='buscar' placeholder="Buscar por nome e  email ou telefone">
          <button type="submit" class="btn btn-primary"><b class="glyphicon glyphicon-search"></b></button>
      </form><!-- navbar-form -->
    </div><!-- container do form -->
  </div><!-- fim jumbotron -->
  @include('admin.contado.include.table')
  @component('admin.contado.components.modal') @endcomponent
</section><!--section row -->
@endsection
