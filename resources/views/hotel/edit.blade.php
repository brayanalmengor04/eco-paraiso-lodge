@extends("template.manager")
@section("title","Hotel EcoParaíso Lodge - Administrador Hoteles")
@section("title-section","Hotel Administrador")
@section("actual-section","Hotel")
@section("content")
<div class="container mt-5 mb-5"> 
    <h1 class="mb-4">Editar Hotel</h1>
    <form action="{{ route('hotel.update', $hotel->id) }}" method="POST">
        @csrf 
        @method('PUT') 
        <div class="row g-4">
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control border-0" id="name" placeholder="Nombre hotel *" required value="{{ old('name', $hotel->name) }}">
                    <label for="name">Nombre Hotel</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="text" name="address" class="form-control border-0" id="address" placeholder="Dirección Hotel" required value="{{ old('address', $hotel->address) }}">
                    <label for="address">Dirección Hotel</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="tel" name="phone" class="form-control border-0" id="phone" placeholder="Teléfono" required value="{{ old('phone', $hotel->phone) }}">
                    <label for="phone">Teléfono</label>
                </div>
            </div>
            
            <div class="col-12">
                <!-- Enviar formulario -->
                <button type="submit" class="btn btn-primary w-100 py-3">Actualizar Hotel</button>
            </div>
        </div>
    </form>
</div>
@stop
