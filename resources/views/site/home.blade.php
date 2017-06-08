@extends('site.layouts.app')
@section('title','Home')
@section('content')
  @component('site.homeComponents.slides') @endcomponent
<!-- Collect the nav links, forms, and other content for toggling -->
@if(isset($result) && $result === true)
    <div class='alert alert-success text-center'>
        <span>Cadastrado com sucesso</span>
    </div>
    @elseif(isset($result)&& $result==false)
      <div class='alert alert-warning text-center'>
        <span>Erro ao se cadastrar</span>
    </div>
 @endif
  @component('site.homeComponents.listhome') @endcomponent
  @component('site.default.emailland') @endcomponent
  @component('site.default.servicos') @endcomponent

@endsection
