<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            Proyecto X
        </a>
        <button class="navbar-toggler" type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class=" nav-item ">
                    <a class="nav-link" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class=" nav-item ">
                    <a class="nav-link" href="{{ route('sponsores') }}">
                        Sponsores
                    </a>
                </li>
                <li class=" nav-item ">
                    <a class=" nav-link" href="{{ route('mentores') }}">
                        Mentores
                    </a>
                </li>
                <li class=" nav-item ">
                    <a class="nav-link" href="{{ route('organizadores') }}">
                        Organizadores
                    </a>
                </li>
                <li class=" nav-item ">
                    <a class="nav-link" href="{{ route('eventos') }}">
                        Eventos
                    </a>
                </li>
                @auth
                    <li class=" nav-item ">
                        <a class="nav-link" 
                        href="#"
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                            Cerrar sesion
                        </a>
                    </li>    
                @else    
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('login') }}"
                        href="{{ route('login') }}">
                            Login
                        </a>
                    </li>            
                @endauth
            </ul>
        </div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>