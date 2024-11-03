@extends("template.manager")
@section("title","Hotel EcoParaíso Lodge - Administrador Hoteles")
@section("title-section","Hotel Administrador")
@section("actual-section","Hotel")
@section("content")

<div class="container mt-5">
    <h1 class="mb-4">Inicio</h1>
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
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->address }}</td>
                    <td>{{ $hotel->phone }}</td>
                    <td>
                        <a href="{{ route('hotel.edit', $hotel->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('hotel.destroy', $hotel->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este hotel?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mb-3">
        <a href="{{ route('hotel.create') }}" class="btn btn-primary">Agregar Nuevo Hotel</a>
    </div>
</div>


@stop
