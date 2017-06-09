$(function(){
  form();
});
function form(){
  $('input[type=file]').on('change',function(){
      var numArquivos = $(this).get(0).files.length;
      if ( numArquivos > 1 ) {
        $('#texto').text( numArquivos+' arquivos selecionados' );
      } else {
        var objetoTratado = $(this).val();
        objetoTratado = objetoTratado.substring(12);

        if(objetoTratado.length > 30){
            $('#texto').text(objetoTratado.substring(0,31)+"...");
        }else{
            $('#texto').text(objetoTratado);
        }
        var label = $("#texto").text();
        if (label.length==0){
            $('#texto').text("Nenhum arquivo selecionado");
        }
      }
  });
  $("form").submit(function(){ return true;});
}
