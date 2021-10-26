<section class="d-block d-sm-block d-md-none">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between">
                @auth
                    <div class="dropdown">
                        <button class="btn dropdown-toggle mx-1" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('create') }}">Crear</a>
                            <a class="dropdown-item" href="{{ route('select') }}">Editar / Eliminar</a>
                            <a class="dropdown-item" href="{{ route('return') }}">Recuperar</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesión</a>
                        </div>
                    </div>
                @endauth
                <a href="{{ route('dashboard') }}" class="text-decoration-none">
                    <img src="https://i.imgur.com/SWqxDKN.png" width="240" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="d-none d-sm-none d-md-block">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{ route('dashboard') }}" class="text-decoration-none">
            <img src="https://i.imgur.com/SWqxDKN.png" width="240" alt="">
        </a>

        <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavDropdown">
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create') }}">Crear</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('select') }}">Editar / Eliminar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('return') }}">Recuperar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a>
                    </li>
                </ul>
            @endauth
        </div>
    </nav>
</section>
