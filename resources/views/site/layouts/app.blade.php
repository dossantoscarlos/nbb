<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @component('site.layouts.cabecalho.meta') @endcomponent
    <title>@yield('title')</title>
    @component('site.layouts.cabecalho.styles') @endcomponent
    @component('site.layouts.cabecalho.scripts') @endcomponent
    <script>
      $('document').ready(function (){
        //troca o titulo pelo valor do texto do html dentro da abbr
        $('abbr').dblclick(function(){let t = event.target;if (t.title && !t.href){
            let f = t.innerHTML;t.innerHTML = t.title; t.title = f;}});
        //disabilida links com a classe disabled
        $('.disabled').click(function (){return false;});
       //disabilida os botoes com a classe btn e o atributo disabled
       $('.btn[disabled]').click(function(){return false;});
    });
    </script>

    @yield('styles')

    @yield('scripts')

</head>
  <body data-spy="scroll" data-target="#navigator-bar">
    @component('site.layouts.corpo.header') @endcomponent
    @component('site.layouts.corpo.nav') @endcomponent
    <section class='container-fluid'>
        @yield('content')
    </section>
    @component('site.layouts.corpo.footer') @endcomponent
</body>
</html>
