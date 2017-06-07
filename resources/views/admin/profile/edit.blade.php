@extends('admin.layouts.app')
@section('title','Editar perfil')
@section('scripts')
<script src='{{asset('js/editUser.js')}}'>
</script>
@endsection
@section('content')
  <div class="row">
    <div class='jumbotron col-lg-12 bg-primary'>
        <p class="text-center display-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
    <div class="col-lg-6">
      <form name="form-edit-user" action='#' method="get">
          <div class="form-group">
          <label for='nome' class="sr-only">Nome:</label>
          <input type="text" id='nome' name='nome' class="form-control" disabled placeholder="" value="{{ $users['nome'] }}">
        </div>
          <div class="form-group">
            <label for='email' class="sr-only">Email:</label>
            <input type="text" id="email" name="email" class="form-control" disabled placeholder="email@email.com" value="{{ $users['email'] }}" title="digite seu email" aria-label="email">
            <input type="hidden" id='_email' name='_email' value="{{$users['email']}}">
          </div>
          <div class="form-group sr-only" >
            <label for='nivel' class="sr-only">Nivel</label>
            <select id="nivel" name="nivel" class="form-control" disabled>
              <option value="">Forneca o nivel de acesso</option>
              <option value="administrador">Administrador</option>
              <option value="moderador">Moderador</div>
            </select>
          </div>

          <div class="form-group">
            <label for='pass' class='sr-only' >Nova senha:</label>
            <input type="password" id='pass' name='pass' class="form-control" placeholder="nova senha" aria-label='nova senha' title='digite uma senha nova' >
          </div>
          <div class="form-group">
            <label for='confirm-pass' class='sr-only' >Confirmar senha:</label>
            <input type="password" id='c-pass' name='c-pass' class="form-control" disabled aria-label='confirmar senha' title='confirme a nova senha' placeholder=" confirmar senha">
          </div>
          <div class="form-group">
            <input class="form-control-static btn btn-primary" type="submit" value='Atualizar...' disabled id='submit-button'>
            <button class="form-control-static btn btn-success" type="reset">Limpar</button>
          </div>
      </form>
    </div>
    <div class="col-lg-6">
      <dl class="alert alert-info">
        <dt class='text-center'> Informando...</dt>
        <dd class="text-justify">
            <b> O botao atualizar sera liberado assim que todas as informacoes forem fornecidas</b>
        </dd>
      </dl>
      <dl class="alert alert-warning">
          <dt class="text-center">Descrição</dt>
          <dd>
            <p class="text-justify" data-description="email">
                Digite seu Email novo ou deixe
                como esta causo deseje permanecer com o  mesmo.
            </p>
            <p class="text-justify" data-description='senha'>
                Ao fornecer uma nova senha ira apagar a senha aniga
                note que é importante o senhor(a) comfirmar essa alteração.
            </p>
            <p class="text-justify" data-description='confirm_senha'>
              Forneça a mesma senha digita da no  campo acima para devem
              ser a mesma para seguir adiante
            </p>
          <dd>
      </dl>
    </div>
  </div>
@endsection
