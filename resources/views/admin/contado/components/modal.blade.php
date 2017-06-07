
  <div class="file-zoom-dialog modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Dados do Contado</h3>
            <address title='cabecalho'>
              <div class="text-capitalize">
                <b>nome:</b> <span id='nome'></span><br>
                <b>assunto:</b> <span id='assunto'></span><br>
                <b>telefone:</b> <span id='telefone'></span>
              </div>
              <b>Email:</b> <span id='email'></span><br>
            </address><!-- cabecalho -->
        </div><!-- modal-header -->
        <div class="modal-body">
          <dl>
              <dt class="text-capitalize">mensagem do contado</dt>
              <dd class="text-justify">
                <p class="panel-body" id='mensagem'></p>
              </dd>
          </dl><!-- fim da descricao-->
        </div><!--modal-body -->
        <div class="modal-footer"> 
          <a type="button" class="btn btn-primary" id='enviarEmail' >Responder</a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div><!-- modal-footer -->
      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!--modal -->
