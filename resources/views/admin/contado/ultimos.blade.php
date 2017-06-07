@extends('admin.layouts.app')
@section('title','Contados Recentes')
@section('content')
  <div class="row">
    <script type='text/javascript' src='{{asset('js/contados.js')}}'></script>
    <div class="jumbotron">
      <p class="text-center"><b class="glyphicon glyphicon-th-list"></b>&nbsp;
        Aqui o senhor(a) é capaz de ver os ultimos 40 contados mais recentes</p>
    </diV>
    @include('admin.contado.include.table')
    @component('admin.contado.components.modal') @endcomponent
</div>
@endsection
