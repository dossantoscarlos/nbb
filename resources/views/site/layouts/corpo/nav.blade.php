<nav class="container-fluid navbar navbar-default border-right-none border-left-none" id='navigator-bar' role='navigation'>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="#navbar">
                <span class="sr-only">Toggle Navigate</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id='navbar' role='tablist'>
            <ul class="nav navbar-nav">
               <li>
                    <a href="{{ route('home') }}" class='padding-bottom-clear padding-top-clear'>Home</a>
               </li>
               <li>
                    <a href="{{ route('servicos.index') }}" class='padding-bottom-clear padding-top-clear'>Serviços</a>
                </li>
               <li><a href="{{ url('/contato') }}" class='padding-bottom-clear padding-top-clear'>Contato</a></li>
               <li><a href="{{ route('about') }}" class='padding-bottom-clear padding-top-clear'>Quem sou eu</a></li>
               {{-- <li class="disabled">
                    <a href="{{ url('/agendamento')}}" class='padding-bottom-clear padding-top-clear'>Agendamento</a>
               </li> --}}
            </ul>
        </div>
    </div>
</nav>
