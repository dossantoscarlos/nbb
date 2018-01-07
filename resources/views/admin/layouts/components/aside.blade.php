<aside class="col-sm-3 col-md-2 sidebar nav" role='navigation'>
  <ul class="nav nav-sidebar">
    <li role="presentationb"><a href="{{ route('dashboard')}}" class="active"><span class="glyphicon glyphicon-globe"></span> Dashboard</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false"><span class='glyphicon glyphicon-upload'></span> Upload</a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li role="presentation"><a href="{{route('pictures')}}"><span class='glyphicon glyphicon-picture'></span> Fotos</a></li>
        </ul>
     </li>
     <li class=" dropdown">
         <a href='#' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class='glyphicon glyphicon-pencil'></span> Registrar</a>
         <ul class="dropdown-menu dropdown-menu-right">
             <li role='presentation' class="disabled">
               <a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Usuario</a>
             </li>
             <li role="presentation">
                <a href='{{ route("servico")}}'><span class="glyphicon glyphicon-folder-open"></span> Servicos</a>
             </li>
         </ul>
      </li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class='glyphicon glyphicon-th-list'></span> Contado</a>
          <ul class="dropdown-menu dropdown-menu-right">
              <li><a href='{{ route("contados_recentes")}}'><span class="glyphicon glyphicon-star"></span> Ultimos Contados</a></li>
              <li><a href='{{ route("buscar") }}'><span class="glyphicon glyphicon-ok"></span> Todos Contados</a></li>
          </ul>
      </li>
      <li class=" dropdown">
          <a href='#' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <b class='glyphicon glyphicon-pencil'></b> Deletar
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
              <li role='presentation' class="disabled">
                <a href="#"><span class="glyphicon glyphicon-user"></span> Usuario</a>
              </li>
              <li role="presentation">
                 <a href='{{ route("delete_servico")}}'><span class="glyphicon glyphicon-envelope"></span> Contado</a>
              </li>
              <li role='presentation'>
                <a href='{{ url("/")}}' ><span class='glyphicon glyphicon-th-list'></span> Servico</a>
              </li>
          </ul>
       </li>
  </ul>
</aside>
