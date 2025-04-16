@extends("template.sectiontemplate") 
@section("title","Hotel EcoParaíso Lodge - Registro")   
@section("title-section","Cuenta")
@section("actual-section","Cuenta")
@section("content")
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img rounded h-100">
                    <img src="{{ asset('img/hospedajes.jpg') }}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="Ecoparaiso Lodge">
                    <div class="about-exp"><span>Hotel Eco Paraiso Lodge</span></div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-item">
                    <div class="container py-5">
                        <div class="row justify-content-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <!-- Mostrar mensajes de error y éxito -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if (session('log'))
                                        <div class="alert alert-success">
                                            {{ session('log') }}
                                        </div>
                                    @endif

                                    <!-- Mostrar formularios solo si el usuario no está autenticado -->
                                    @if (!Auth::check())
                                        <!-- Formulario de Iniciar Sesión -->
                                        <div class="col-lg-10" id="loginForm">
                                            <h3 class="mb-4 text-center">Eco Paraiso - Iniciar Sesión</h3>  
                                            <form action="{{ route('login') }}" method="POST"> 
                                                @csrf
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="email" name="email" class="form-control border-0" id="loginEmail" placeholder="Ingrese su correo" required>
                                                            <label for="loginEmail">Correo Electrónico</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="password" name="password" class="form-control border-0" id="loginPassword" placeholder="Ingrese su contraseña" required>
                                                            <label for="loginPassword">Contraseña</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary w-100 py-3">Iniciar Sesión</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="mt-4 text-center text-muted">
                                                ¿No tienes una cuenta? 
                                                <a href="#" onclick="toggleForms(event)" class="text-primary">Regístrate aquí</a>
                                            </p>
                                        </div>

                                        <!-- Formulario de Registro -->
                                        <div class="col-lg-10 d-none" id="registerForm">
                                            <h3 class="mb-4 text-center">Crear Cuenta</h3>
                                            <form action="{{ route('register.submit') }}" method="POST">
                                                @csrf
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="text" name="name" class="form-control border-0" id="registerName" placeholder="Ingrese su nombre completo" required>
                                                            <label for="registerName">Nombre Completo</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="email" name="email" class="form-control border-0" id="registerEmail" placeholder="Ingrese su correo" required>
                                                            <label for="registerEmail">Correo Electrónico</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="password" name="password" class="form-control border-0" id="registerPassword" placeholder="Cree una contraseña" required>
                                                            <label for="registerPassword">Contraseña</label>
                                                        </div>
                                                    </div> 
                                                    <!-- Para agregar un administrador  ----------------------------------------->
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="rol" name="rol" class="form-control border-0" id="registerPassword" placeholder="Cree una contraseña" required>
                                                            <label for="registerPassword">Rol</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <input type="password" name="password_confirmation" class="form-control border-0" id="registerConfirmPassword" placeholder="Confirme su contraseña" required>
                                                            <label for="registerConfirmPassword">Confirmar Contraseña</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-success w-100 py-3">Registrarse</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="mt-4 text-center text-muted">
                                                ¿Ya tienes una cuenta? 
                                                <a href="#" onclick="toggleForms(event)" class="text-primary">Inicia sesión aquí</a>
                                            </p>
                                        </div>
                                    @else 

                                    @if(Auth::check() && Auth::user()->rol == 'admin') 
                                    <div class="alert alert-warning text-center">
                                            Estas en modo administrador, {{ Auth::user()->name }}.
                                        </div>                     
                                    @endif
                                        <!-- Mensaje de la autenticacion obtenido de la base datos -->
                                        <div class="alert alert-success text-center">
                                            Gracias por iniciar sesión, {{ Auth::user()->name }}.
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleForms(event) {
        event.preventDefault();
        document.getElementById("loginForm").classList.toggle("d-none");
        document.getElementById("registerForm").classList.toggle("d-none");
    }
</script>
@stop
