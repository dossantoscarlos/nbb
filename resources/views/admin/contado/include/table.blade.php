<table class="table table-responsive table-hover">
  <thead class="text-capitalize">
    <tr>
      <th>id</th><th>nome</th><th>email</th><th>telefone</th><th>assunto</th><th>mensagem</th>
    </tr>
  </thead>
  <tbody>
    @if(sizeOf($pesquisa)>0)
    @foreach ($pesquisa as $contado)
    <tr>
      <td>{{$contado->id}}</td><td>{{$contado->nome}}</td>
      <td>{{$contado->email}}</td><td>{{$contado->tel}}</td>
      <td>{{$contado->servico}}</td>
      <td>
        <button type="button" data-target='#modal' data-id='{{$contado->id}}' data-toggle="modal" class="btn btn-xs btn-success btnModal">Mensagem</button>
      </td>
    </tr>
  @endforeach
  @else
  <tr>
      <td colspan="6">
          <div class='bg-warning alert alert-warning text-warning text-center'>
              <b class="glyphicon glyphicon-warning-sign"></b>
              &nbsp;<span>Nenhum contado encontrado</span>
          </div>
    </td>
  </tr>
@endif
  </tbody>

</table>
<div>
  {{ $pesquisa->links()}}
</div>
