<nav class="navbar navbar-expand-lg bg-navy py-4">
    <div class="container-fluid ">
        <a href="/" ><img src="{{asset('storage/img/icon/logo.navbar.png') }}" alt="logo"></a>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class=" col-lg-10 col-sm-12 navbar-nav">
                <li class="nav-item text-center">
                    <a class="nav-link text-black fs-4" aria-current="page" href="/dashboard">Home</a>
                </li>
                <li class="nav-item text-center dropdown">
                    <a class="nav-link dropdown-toggle text-black fs-4" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Clientes
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><button type="button" class="dropdown-item text-black fs-5" data-bs-toggle="modal"
                                data-bs-target="#categoria">Adicionar</button></li>
                        <li><a class="dropdown-item text-black fs-5" href="/list/category">Listar</a></li>
                    </ul>
                </li>
                <li class="nav-item text-center dropdown">
                    <a class="nav-link dropdown-toggle text-black fs-4" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Carros de clientes
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><button type="button" class="dropdown-item text-black fs-5" data-bs-toggle="modal"
                                data-bs-target="#tipo">Adicionar</button></li>
                        <li><a class="dropdown-item text-black fs-5" href="/list/collection">Listar</a></li>
                    </ul>
                </li>
                <li class="nav-item text-center dropdown">
                    <a class="nav-link dropdown-toggle text-black fs-4" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Usuario
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><button type="button" class="dropdown-item text-black fs-5" data-bs-toggle="modal"
                                data-bs-target="#user">Adicionar</button></li>
                        <li><a class="dropdown-item text-black fs-5" href="/list/user">Listar</a></li>
                    </ul>
                </li>
            </ul>
            <div class="col-lg-2 col-sm-12 nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black text-center fs-4" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu text-center">
                    <li data-toggle="dropdown-item" ><a class="dropdown-item text-black fs-5" href="/profile">Configuração</a></li>
                    <li data-toggle="dropdown-item ">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link class="dropdown-item text-black fs-5" :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Sair') }}
                            </x-dropdown-link>
                        </form>
                    </li>    
                </ul>
            </div>
        </div>
    </div>
</nav>