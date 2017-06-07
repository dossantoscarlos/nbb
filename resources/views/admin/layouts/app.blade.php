<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @component('admin.layouts.components.meta_admin') @endcomponent
    <title>@yield('title')</title>
    @component('admin.layouts.components.style_admin') @endcomponent
    @component('admin.layouts.components.script_admin') @endcomponent
    @yield('scripts')
    @yield('styles')
</head>
<body>
  <noscript>
      Ative o javascript de seu navegador
  </noscript>
  @component('admin.layouts.components.navbar') @endcomponent
  @if(Auth::check())
    @component('admin.layouts.components.body') @endcomponent
  @else
    @yield('content')
  @endif
</body>
</html>
