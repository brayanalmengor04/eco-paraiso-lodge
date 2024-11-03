@extends("template.manager")
@section("title", "Hotel EcoParaíso Lodge - Administrador Habitaciones")
@section("title-section", "Hotel Administrador")
@section("actual-section", "Crear Habitación")
@section("content")

<div class="container mt-5 mb-5">
    <h1 class="mb-4">Crear Habitación</h1>
    <form action="{{ route('room.store') }}" method="POST">
        @csrf 
        <div class="row g-4">
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <select name="hotel_id" class="form-select border-0" id="hotel_id" required>
                        <option value="" disabled selected>Selecciona un Hotel</option>
                        @foreach($hotels as $hotel)
                            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                        @endforeach
                    </select>
                    <label for="hotel_id">Hotel</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="number" name="room_number" class="form-control border-0" id="room_number" placeholder="Número de Habitación *" required>
                    <label for="room_number">Número de Habitación</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="text" name="description" class="form-control border-0" id="description" placeholder="Descripción" required>
                    <label for="description">Descripción</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="number" step="0.01" name="price" class="form-control border-0" id="price" placeholder="Precio" required>
                    <label for="price">Precio</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <select name="is_available" class="form-select border-0" id="is_available">
                        <option value="1" selected>Sí</option>
                        <option value="0">No</option>
                    </select>
                    <label for="is_available">¿Disponible?</label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100 py-3">Guardar Habitación</button>
            </div>
        </div>
    </form>
</div>

@stop
