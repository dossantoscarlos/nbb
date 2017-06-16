<!Doctype html>
<html lang="{{ config('app.locale')}}">
    <head>
        @component('site.layouts.cabecalho.meta') @endcomponent
        <title>@yield('title')</title>
        <script>
          window.onload = function(){
              var body = document.getElementTagByName('body');
              body.forEach(elem => {
                elem.className="body";
              });
            };
        </script>
        <style >
          .body{
            background-image: url("{{asset('img/factordstudio.png')}}");
            background-repeat: no-repeat;
          }
        </style>
    </head>
    <body>
    </body>
</html>
