@extends("template.sectiontemplate")
@section("title", "Hotel EcoParaíso Lodge - Reserva")
@section("title-section", "Historial de Reserva")
@section("actual-section", "Reserva")
@section("content")
<div class="container mt-5">
    <!-- Sección de perfil del usuario --> 
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
 
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4>Perfil del Usuario</h4>
        </div>
        <div class="card-body"> 
            <div class="row">  
                <div class="col-md-4">
                    <img src="{{ asset('img/porfile.jpg')}}" alt="Foto de perfil" class="rounded-circle img-fluid">
                </div> 
                <div class="col-md-8">
                    <h5>{{ $user->name }}</h5>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Rol:</strong> {{ $user->rol ?? 'No disponible' }}</p>
                    <p><strong>Cuenta creada:</strong> {{ $user->created_at->format('d-m-Y') }}</p> 
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de historial de reservas -->
    <div class="row"> 
    @if($reservas->isEmpty())
        <div class="col-12 text-center mt-4 mb-4">
            <h5 class="text-muted">Sin Reservaciones Pendiente.</h5>
        </div>
    @else
        @foreach($reservas as $reserva)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="card-title mb-0">Reserva #{{ $reserva->id }}</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Check-in:</strong> {{ $reserva->check_in_date->format('d-m-Y') }}</p>
                        <p><strong>Check-out:</strong> {{ $reserva->check_out_date->format('d-m-Y') }}</p>
                        <p><strong>Estado:</strong> {{ $reserva->status }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-sm" onclick="showDetails({{ $reserva->id }})">Ver detalles</button>
                        @if($user->rol === 'admin' && $reserva->status === 'pending')
                            <button class="btn btn-success btn-sm" onclick="confirmReservation({{ $reserva->id }})">Confirmar</button>
                        @endif
                        <form action="{{ route('reservation.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div> 
 

<!-- reservas  Confrimado administrador -->
@if($user->rol === 'admin')
    <!-- Sección de reservas confirmadas -->
    <h4 class="mt-5 mb-5 text-center">Reservas Confirmadas</h4>
    <div class="row"> 
        
        @if($reservasConfirmadas->isEmpty())
            <div class="col-12 text-center mt-4 mb-4">
                <h5 class="text-muted">No hay reservas confirmadas.</h5>
            </div>
        @else
            @foreach($reservasConfirmadas as $reservaConfirmada)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h5 class="card-title mb-0">Reserva Confirmada #{{ $reservaConfirmada->id }}</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Check-in:</strong> {{ $reservaConfirmada->check_in_date->format('d-m-Y') }}</p>
                            <p><strong>Check-out:</strong> {{ $reservaConfirmada->check_out_date->format('d-m-Y') }}</p>
                            <p><strong>Estado:</strong> Confirmada</p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary btn-sm" onclick="showDetails({{ $reservaConfirmada->id }})">Ver detalles</button>
                            <form action="{{ route('reservation.destroy', $reservaConfirmada->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endif


<!-- Modal para Confirmación de Reserva -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirmar Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas confirmar esta reserva? La habitación se marcará como no disponible.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" id="confirmReservationBtn">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Detalles -->
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Detalles de la Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="reservationDetails"></div>
            </div>
        </div>
    </div>
</div> 

<script>
function showDetails(reservationId) {
    fetch(`/reservations/${reservationId}/details`)
        .then(response => response.json())
        .then(data => {
            const reservation = data.reservation;
            const user = data.user;
            const room = data.room;
            const hotel = data.hotel;
            const total_price= data.total_price;

            const detailsHTML = `
                <h5>Información del Usuario</h5>
                <p><strong>Nombre:</strong> ${user.name}</p>
                <p><strong>Email:</strong> ${user.email}</p>
                <p><strong>Rol:</strong> ${user.rol ?? 'No disponible'}</p>
                <p><strong>Cuenta creada:</strong> ${new Date(user.created_at).toLocaleDateString()}</p>
                
                <h5>Detalles de la Habitación</h5>
                <p><strong>Número de Habitación:</strong> ${room.room_number}</p>
                <p><strong>Descripción:</strong> ${room.description}</p>
                <p><strong>Precio:</strong> ${total_price}</p>  
                <p><strong>Noches:</strong> ${total_price/room.price}</p> 
                <p><strong>Disponible:</strong> ${room.is_available ? 'Sí' : 'No'}</p>
                <p><strong>Estado Pedido:</strong> ${!room.is_available ? 'Se ha Confirmado su reserva' : 'Sin Confirmar'}</p>
                <h5>Detalles del Hotel</h5>
                <p><strong>Nombre:</strong> ${hotel.name}</p>
                <p><strong>Dirección:</strong> ${hotel.address}</p>
                <p><strong>Teléfono:</strong> ${hotel.phone}</p>
            `;

            document.getElementById('reservationDetails').innerHTML = detailsHTML;
            new bootstrap.Modal(document.getElementById('detailsModal')).show();
        })
        .catch(error => console.error('Error al obtener los detalles:', error));
}
let reservationIdToConfirm = null;

function confirmReservation(reservationId) {
    reservationIdToConfirm = reservationId;
    new bootstrap.Modal(document.getElementById('confirmModal')).show();
}

document.getElementById('confirmReservationBtn').addEventListener('click', () => {
    if (reservationIdToConfirm) {
        fetch(`/reservations/${reservationIdToConfirm}/confirm`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log("Reserva confirmada y habitación marcada como no disponible.");
                location.reload();
            } else {
                console.log("Error al confirmar la reserva.");
            }
        })
        .catch(error => console.error('Error al confirmar la reserva:', error));
    }
});

</script>
@stop
