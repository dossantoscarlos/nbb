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
  <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" 
  data-dojo-config="usePlainJson: true, isDebug: false"></script>
  <script type="text/javascript">
    require(["mojo/signup-forms/Loader"], 
            function(L) { 
              L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"d687c905f7cfe6cd13f3dcc46","lid":"f8b7dfe175"});
            });
  </script>
@endsection
