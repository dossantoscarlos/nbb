@extends('admin.layouts.app')
@section('title' ,'Serviços')

@section('scripts')
<script type='text/javascript'>
    $(function(){

        $('input[type=file]').each(function()
        {
            $(this).attr('accept','image/*');
        });
        form();
    });

    function form(){

        $('input[type=file]').on('change',function(){
            var item = $(this).get(0).files.length;
            if (item == 1){
                var objetoTratado = $(this).val().toUpperCase();
                objetoTratado = objetoTratado.substring(12);
                if(objetoTratado.length > 30){
                    $('#texto').text(objetoTratado.substring(0,31)+"...");
                }else{
                    $('#texto').text(objetoTratado);
                }
                var label = $("#texto").text().toUpperCase();
                if (label.length==0){
                    $('#texto').text(("Nenhum arquivo selecionado").toUpperCase());
                }
            }
        });
    }

</script>

@endsection

@section('content')
<div class='jumbotron'>
    <p class='text-center'>Cadastre seus servicos de forma rapida e facil</p>
</div>

@if(count($errors) > 0)
 <div class='col-lg-offset-4 col-lg-4 alert alert-danger'>
   <ul class='list'>
       @foreach($errors->all() as $erro)
          <li>{{ $erro }}</li>
       @endforeach
    </ul>
 </div>
@endif
<form method='post' action='{{route("create_servico")}}' enctype='multipart/form-data'>
    {{csrf_field()}}
    <div class='col-lg-12'>
        <div class='form-group col-lg-12'> 
            <div class='col-lg-2'>
                <label for="servico">Nome do servico:</label>
            </div>
            <div class='col-lg-8'>
                <input class='form-control' name='servico' id='servico' type='text' placeholder='Informe o servico' aria-label='servico' title='campo servico'> 
            </div>
        </div>
        <div class="form-group col-lg-12">
            <div class='col-lg-2'>
                <label>Icone:</label>
            </div>
            <div class='col-lg-8'>
                <input class='form-control sr-only' name='file' type='file' id='file' required >
                <label for='file' class='form-control btn btn-success' id='texto'>Upload</label>
            </div>   
        </div>
        <div class='form-group col-lg-12'>
            <div class='col-lg-2'><label for="descricao">Descrição:</label></div>
            <div class='col-lg-8'>
                <textarea name="descricao" id="descricao" rows='5' class='form-control'></textarea>
            </div>
        </div>
    </div>
    <div class='form-group col-lg-12 text-center'>
        <button type='submit' class='btn btn-primary'>Salvar</button>
    </div>
</form>
@endsection