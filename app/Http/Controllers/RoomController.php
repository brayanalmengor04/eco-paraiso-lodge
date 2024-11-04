<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Muestra una lista de habitaciones.
     */

     // Lo convierte en json 
     public function apiRooms()
{
    $rooms = Room::with('hotel')->get();
    return response()->json($rooms);
}
    public function index()
    {
        $rooms = Room::with('hotel')->get();
        return view("room.index", compact("rooms"));
    }

    /**
     * Muestra el formulario para crear una nueva habitación.
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view("room.create", compact("hotels"));
    }

    /**
     * Almacena una nueva habitación en la base de datos.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'room_number' => 'required|integer',
            'description' => 'required|string|max:100',
            'price' => 'required|numeric',
            'is_available' => 'boolean',
        ]);

        Room::create($validatedData);

        return redirect()->route('room.index')->with('success', 'Habitación creada exitosamente.');
    }

    /**
     * Muestra los detalles de una habitación específica.
     */
    public function show(Room $room)
    {
        return view("room.show", compact("room"));
    }


    public function edit(Room $room)
    {
        $hotels = Hotel::all();
        return view("room.edit", compact("room", "hotels"));
    }

    /**
     * Actualiza una habitación en la base de datos.
     */
    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'room_number' => 'required|integer',
            'description' => 'required|string|max:100',
            'price' => 'required|numeric',
            'is_available' => 'boolean',
        ]);

        $room->update($validatedData);

        return redirect()->route('room.index')->with('success', 'Habitación actualizada exitosamente.');
    }

    /**
     * Elimina una habitación de la base de datos.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('room.index')->with('success', 'Habitación eliminada exitosamente.');
    }
}
