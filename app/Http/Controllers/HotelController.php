<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{

    public function index()
    {
        $hotels = Hotel::all();
        return view("hotel.index", compact("hotels"));
    }

    public function create()
    {
        return view("hotel.create");
    }

    public function store(Request $request)
    {
        // Validación de los datos
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        Hotel::create($validatedData);

        // Redirigir a la página de índice con un mensaje de éxito
        return redirect()->route('hotel.index')->with('success', 'Hotel creado exitosamente.');
    }

    public function show(Hotel $hotel)
    {
        return view("hotel.show", compact("hotel"));
    }

    public function edit(Hotel $hotel)
    {
        return view("hotel.edit", compact("hotel"));
    }

    public function update(Request $request, Hotel $hotel)
    {
        // Validación de los datos
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Actualizar el hotel con los datos validados
        $hotel->update($validatedData);

        // Redirigir a la página de índice con un mensaje de éxito
        return redirect()->route('hotel.index')->with('success', 'Hotel actualizado exitosamente.');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('hotel.index')->with('success', 'Hotel eliminado exitosamente.');
    }
}
