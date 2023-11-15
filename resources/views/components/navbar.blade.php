<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('game.index')}} ">Lista dei giochi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">contatti</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}
            </ul>
            @guest
            <a class="nav-link px-3" href="{{route('register')}} ">Register</a>
            <a class="nav-link px-3" href="{{route('login')}} ">Login</a>
            @else
            <form action="{{route('logout')}} " method="post">
                @csrf
                <button class="btn btn-primary mx-3">Logout</button>
            </form>
            @endguest
            <div>
                <a class="btn btn-danger btn-create" href="{{route('game.create')}} ">Crea gioco</a>
            </div>
        </div>
    </div>
</nav>