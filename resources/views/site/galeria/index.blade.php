@extends('site.layouts.app')
@section('title',$galerias)
@section('scripts')
<script>
  $(document).ready(function (){
      $('#voltar').on('click',function(){
          return history.back();
      });
  });

</script>
@endsection
@section('content')
    <div class="container">
    @if(count($results)>0)
      @foreach($results as $result)
      <div class="col-lg-4" style="padding:20px">
        <figure class="figure">
            <img src="{{asset($result->url)}}" data-toggle="modal" data-target=".bd-example-modal-lg" width="270" height='200' title='{{ $result->nome }}' class="img-rounded" alt="galeria">
            <input type='hidden' value='id'/>
        </figure>
        </div><!-- col-lg-4 -->
      @endforeach
    @else
      <div class='alert alert-info text-center'>
        <blockquote>
          <h3>Não há fotos na galeria, volte mais tarde!!! </h3>
          <a href='#' id='voltar' class='btn btn-success'>Voltar</a>
        </blockquote>
      </div>
    @endif
  </div><!--container-->
  {{-- modal --}}

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <img src="{{}}" id='modalImage' />
    </div>
  </div>
</div>
{{--fim modal--}}
@component('site.default.servicos')@endcomponent
@endsection
