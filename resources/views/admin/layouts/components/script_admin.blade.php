{{-- script --}}
<script>
   window.Laravel = {!! json_encode([
         'csrfToken' => csrf_token(),
   ]) !!};
</script>
{{-- script --}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/holder.min.js') }}"></script>

<script >
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN':$('meta[name="csrf_token"]').attr('content')
  } });

 $(document).ready(
    function (){
      //disabilida links com a classe disabled
      $('.disabled').click(function (){
        return false;
      });

      //disabilida os botoes com a classe btn e o atributo disabled
      $('.btn[disabled]').click(function(){
          return false;
      });
    }
 );
</script>
