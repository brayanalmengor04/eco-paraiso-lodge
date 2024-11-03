    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary"><i><img src="{{ asset('img/logoempresa.png') }}"></i>EcoParaíso Lodge</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('welcome')}}" class="nav-item nav-link active">Inicio</a>
                <a href="{{route('about')}}" class="nav-item nav-link">Sobre Nosotros</a>
                <a href="{{route('service')}}" class="nav-item nav-link">Servicios</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paginas</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('reservation.create')}}" class="dropdown-item">Solicitar Reserva</a>
                        @if(Auth::check())
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="dropdown-item">Cerrar Sesión</button>
                            </form>
                        @else
                            <a href="{{route('login')}}" class="dropdown-item">Iniciar Sesión</a>
                        @endif 

                  
                        <a href="{{route('contact')}}" class="dropdown-item">Contacto</a>
                    </div>
                </div>  
                @if(Auth::check())
                <div class="nav-item dropdown">  
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cuenta</a> 
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Perfil</a>
                        <a href="#" class="dropdown-item">Habitaciones Reservadas</a>
                        <a href="#" class="dropdown-item">Otras Opciones</a>
                    </div> 
                </div>
                @endif  

                @if(Auth::check() && Auth::user()->rol == 'admin')
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Administración</a> 
            <div class="dropdown-menu m-0">
                <a href="{{ route('hotel.index')}}" class="dropdown-item">Administrar Hoteles</a>
                <a href="{{ route('room.index')}}" classs="dropdown-item">Administrar Habitaciones</a> 
                <a href="#" class="dropdown-item">Administrar Reservaciones</a>
                <a href="#" class="dropdown-item">Otras Opciones</a>
            </div> 
        </div>
        @endif
                <a href="{{route('contact')}}" class="nav-item nav-link">Contacto</a>
            </div>
            <div class="d-none d-xl-flex me-3">
                <div class="d-flex flex-column pe-3 border-end border-primary">
                    <a href="tel:+00000000"><span class="text-primary">Contactenos +507 123 7890</span></a>
                </div>
            </div>
            <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
            
            @if(Auth::check())
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Cerrar Sesión</button>
            </form>
        @else
            <a href="{{ route('login')}}" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Iniciar Sesión</a>
        @endif
        </div>
    </nav>
             <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Busca Aqui</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
