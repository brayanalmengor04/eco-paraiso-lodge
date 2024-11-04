<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation; 
use App\Models\Hotel; 
use App\Models\Room;

class Room extends Model
{

    protected $fillable = [
        'hotel_id',
        'room_number', 
        'description',
        'price',
        'is_available',
    ];

    //
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

public function reservations()
{
    return $this->hasMany(Reservation::class);
}
}
