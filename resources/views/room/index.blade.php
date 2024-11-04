@extends("template.manager")
@section("title", "Hotel EcoParaíso Lodge - Administrador Habitaciones")
@section("title-section", "Hotel Administrador")
@section("actual-section", "Habitaciones")
@section("content")
<div class="container mt-5">
    <h1 class="mb-4">Listado de Habitaciones</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif 
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Hotel</th>
                    <th>Número de Habitación</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->hotel->name }}</td>
                    <td>{{ $room->room_number }}</td>
                    <td>{{ $room->description }}</td>
                    <td>{{ $room->price }}</td>
                    <td>{{ $room->is_available ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('room.edit', $room->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('room.destroy', $room->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta habitación?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mb-3">
        <a href="{{ route('room.create') }}" class="btn btn-primary">Agregar Nueva Habitación</a>
    </div>
</div>

@stop
