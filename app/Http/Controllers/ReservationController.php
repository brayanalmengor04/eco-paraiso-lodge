<?php

namespace App\Http\Controllers;

use App\Models\User; // Asegúrate de importar el modelo User
use App\Models\Reservation; // Asegúrate de usar la nomenclatura correcta 
use App\Models\Room;

use App\Models\Hotel; // Asegúrate de usar la nomenclatura correcta
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Agregar esta línea 

class ReservationController extends Controller 


{
   
    public function index()
    {
        // Lógica para listar reservas
    }

    
    public function create()
    {
        $hotels = Hotel::with('rooms')->get();
        return view('reservation.create', compact('hotels'));
    }
    // Método para almacenar la reserva en la base de datos
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'room_id' => 'required|integer|exists:rooms,id',
            'nights' => 'required|integer|min:1',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
        ]);

        // Verificar autenticación del usuario
        if (!Auth::check()) {
            return redirect()->route("reservation.create")->with('error', 'Debes estar autenticado para hacer una reserva.');
        }

        // Obtener el precio de la habitación y calcular el total
        $room = Room::findOrFail($request->room_id);
        $totalPrice = $room->price * $request->nights;

        // Crear la reserva
        Reservation::create([
            'user_id' => Auth::id(),
            'room_id' => $room->id,
            'check_in_date' => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        // Redireccionar con mensaje de éxito
        return redirect()->route("reservation.create")->with('message', '¡Has reservado tu habitación con éxito!');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        // Lógica para mostrar una reserva específica
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        // Lógica para mostrar el formulario de edición
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        // Lógica para actualizar la reserva
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        // Lógica para eliminar la reserva
    }

    /**
     * Mostrar las reservaciones de un usuario específico.
     */
    
}
