<!Doctype html>
<html lang="{{ config('app.locale'}}">
    <head>
        @component('site.layouts.cabecalho.meta') @endcomponent
        <title>@yield('title')</title>
        @component('site.layouts.cabecalho.scripts') @endcomponent
        @component('site.layouts.cabecalho.styles') @endcomponent
    </head>
    <body>
    <section class='container-fluid'>
    <div class='container text-center'>
        <h1 class='panel-heading'>404</h1>
        <h2>{{ $exception->getMessage() }}</h2>
    </div>
</section>
</body>
</html>
