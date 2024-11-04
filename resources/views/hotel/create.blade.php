@extends("template.manager")
@section("title","Hotel EcoParaíso Lodge - Administrador Hoteles")
@section("title-section","Hotel Administrador")
@section("actual-section","Hotel")
@section("content")

<div class="container mt-5 mb-5"> <!-- Añadido margen inferior aquí -->
    <h1 class="mb-4">Crear Hotel</h1>
    <form action="{{ route('hotel.store') }}" method="POST">
        @csrf 
        <div class="row g-4">
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control border-0" id="name" placeholder="Nombre hotel *" required>
                    <label for="name">Nombre Hotel</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="text" name="address" class="form-control border-0" id="address" placeholder="Dirección Hotel" required>
                    <label for="address">Dirección Hotel</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="tel" name="phone" class="form-control border-0" id="phone" placeholder="Teléfono" required>
                    <label for="phone">Teléfono</label>
                </div>
            </div>
            
            <div class="col-12">
                <!-- Enviar formulario -->
                <button type="submit" class="btn btn-primary w-100 py-3">Guardar Hotel</button>
            </div>
        </div>
    </form>
</div>

@stop
