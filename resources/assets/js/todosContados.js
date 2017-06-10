$(document).ready(function (){
  $('button[data-id]').each(
    function(){
        'use strict';
       $(this).click(function(){
            const host = location.href;
            const http = host.replace('filtro',"json/");
            const agenda = $(this).attr('data-id');
            if(valida(agenda)==false)
            {
              $.getJSON(http + agenda)
                .done(function(data){
                  $('#nome').text(data[0].nome);
                  $('#mensagem').text(data[0].mensagem);
                  $('#email').text(data[0].email);
                  $('#telefone').text(data[0].tel);
                  $('#assunto').text(data[0].servico);
                  $('#enviarEmail').attr('href',"mailto://" + data[0].email);
                }).fail(function(){
                    console.log('erro ao receber resposta', http + agenda);
                });
            }
          });
      });
});
function valida(agenda){
    'use strict';
   return (isNaN(agenda)) ? true : false;
}
