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
        $user = Auth::user();
        if (!$user) {
            return redirect()->route("login")->with('error', 'Debes estar autenticado para ver tu historial de reservas.');
        }
        $reservasConfirmadas = Reservation::where('status', 'confirmed')->get(); // Obtener reservas confirmadas para administrador
        // Si el usuario es administrador, obtener todas las reservas pendientes de todos los usuarios
        if ($user->rol === 'admin') {
            $reservas = Reservation::where('status', 'pending')
                ->with('room') // Cargar relación con las habitaciones
                ->paginate(6);
        } else {
            // Si no es administrador, obtener solo las reservas del usuario
            $reservas = Reservation::where('user_id', $user->id)
                ->with('room')
                ->paginate(6);
        }
    
        return view('reservation.index', compact('user', 'reservas','reservasConfirmadas'));
    }

    public function details($id)
{
    // Obtener la reserva y cargar relaciones necesarias
    $reserva = Reservation::with(['room.hotel', 'user'])->findOrFail($id); 
    $totalPrice = Reservation::where('id', $id)->value('total_price');

    return response()->json([
        'reservation' => $reserva, 
        'total_price'=>$totalPrice,
        'user' => $reserva->user,
        'room' => $reserva->room,
        'hotel' => $reserva->room->hotel
    ]);
}

    
    public function create(Request $request)
    { 
        $hotels = Hotel::with('rooms')->get();
        $selectedRoomId = $request->query('room_id'); // Obtén el ID de la habitación de la URL
        return view('reservation.create', compact('hotels', 'selectedRoomId'));

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
    public function destroy($id)
    {
        // Lógica para eliminar la reserva   
        $reservation = Reservation::findOrFail($id);
       
        // Tanto como admin o un usuario si cancela no se elimina completamente si no tambien lo vuelve al
        // catalogo de habitaciones
        if ($reservation->status === 'confirmed' || $reservation->status === 'pending') {
            $room = $reservation->room;
            $room->is_available = 1; // Cambiar disponibilidad a true (1)
            $room->save();
        }
        $reserva = Reservation::findOrFail($id);
        $reserva->delete();
        return redirect()->back()->with('message', 'Reserva eliminada y habitación marcada como disponible.');
    }


    public function confirm($id)
{
    $reserva = Reservation::findOrFail($id);
    
    // Actualizar el estado de la reserva
    $reserva->status = 'confirmed';
    $reserva->save();

    // Actualizar la disponibilidad de la habitación
    $reserva->room->is_available = false;
    $reserva->room->save();

    return response()->json(['success' => true]);
}
    /**
     * Mostrar las reservaciones de un usuario específico.
     */
    
}
