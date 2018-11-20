@extends('site.layouts.app')
@section('title','about')
@section('content')
<style >
  /*about*/
  article.bg-info{
    border:2px solid lightblue;
    border-radius:12px !important;
  }
</style>
<section class='col-md-12 col-sm-12 col-xs-12'>
  <h1 class="col-md-12 col-lg-12">Ola eu sou {{'NBB'}}</h1>
  <article class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
    <img src='{{ secure_asset('img/maxresdefault.jpg') }}' alt='minha foto' title='quem sou' class="img-responsive block-center img-circle">
  </article>
  <p></p>
  <article class="col-lg-offset-1 col-lg-4 col-md-4 col-sm-12 col-xs-12 panel-body bg-info">
    <dl>
      <dt class='text-center' > Bem vindo a NBB </dt>
      <dd class='text-justtify'>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
          non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </dd>
    </dl>
  </article>
</section>
    @component('site.default.servicos') @endcomponent
@endsection
