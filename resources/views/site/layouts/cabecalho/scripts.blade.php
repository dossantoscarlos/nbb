{{-- script --}}
<script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};</script>
{{-- script --}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/holder.min.js') }}"></script>
      