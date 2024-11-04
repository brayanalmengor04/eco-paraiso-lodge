@extends("template.sectiontemplate")
@section("title", "Hotel EcoParaíso Lodge - Reserva")
@section("title-section", "Reserva")
@section("actual-section", "Reserva")
@section("content")
<div class="container-fluid reserva bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Reserva tu estancia</h4>
                    <h1 class="display-3 text-capitalize mb-3">Complete su reserva</h1>
                </div>           
                 <!-- Mostrar mensaje de error si existe -->
                 @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                        <!-- Mensaje de éxito -->
                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <!-- Formulario de reserva -->
                <form action="{{ route('reservation.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="form-floating">
                        <select class="form-select border-0" id="room_id" name="room_id">
                                <option selected disabled>Seleccione una Habitación</option>
                                @foreach($hotels as $hotel)
                                    <optgroup label="{{ $hotel->name }}">
                                        @foreach($hotel->rooms as $room)
                                            <option value="{{ $room->id }}" {{ $room->id == $selectedRoomId ? 'selected' : '' }}>
                                                {{ $room->type }} - ${{ $room->price }} / noche
                                            </option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div>
<!--              <!-- Número de noches -->
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="number" class="form-control border-0" id="guests" name="nights" placeholder="Número de Personas" min="1" max="10">
                            <label for="guests">Número de Noches</label>
                        </div>
                    </div>
                    <!-- Fechas de Entrada y Salida -->
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="date" class="form-control border-0" id="checkin" name="check_in_date" placeholder="Fecha de Entrada">
                                <label for="checkin">Fecha de Entrada</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-floating">
                                <input type="date" class="form-control border-0" id="checkout" name="check_out_date" placeholder="Fecha de Salida">
                                <label for="checkout">Fecha de Salida</label>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Botón de envío -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100 py-3">Reservar Ahora</button>
                    </div>
                </form> <!-- Cierre del formulario -->
            </div>
            <!-- Información adicional -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <!-- Detalles adicionales aquí -->
            </div>
        </div>
    </div>
</div>
@stop
