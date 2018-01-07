<div id='main'>
@if(isset($serv))
    <form class='form' method="post" >
      {{ csrf_field() }}
    <div class="form-group">
      <select name='servicos' class="form-control">
        @foreach ($serv as $service)
            <option value="{{$service->id}}">{{$service->nome}}</option>
        @endforeach
      </select>
    </div>
      <div class="form-group">
          <img class='center-block img-responsive' width="300px" src="#" id='icon'/>
        <div class='form-group'>
          <label>Nome do servico:</label>
          <input type='text' name='nomeServico' id='nomeServico' class='form-control' disabled />
        </div>
        <div class='form-group'>
            <textarea class="form-control" cols="40" rows="10" id='textArea' disabled></textarea>
        </div>
        <div class='form-group'>
          <button type='submit' class="btn btn-danger col-lg-offset-4">Deletar</button>
          <button type='reset' class='btn btn-primary'>Cancelar</button>
        </div>
      </form>
@else
  <div class='alert alert-warning text-center'>
    <h4><b class='glyphicon glyphicon-warning-sign'></b>
    &nbsp;Nenhum item encontrado no sistema!!!</h4>
  </div>
@endif
</div>
