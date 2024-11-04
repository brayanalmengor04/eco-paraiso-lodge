<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\Models\User; 


class Reservation extends Model
{
    //
    protected $fillable = [
        'user_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'total_price',
        'status',
    ];

    // Configurar los atributos de fecha
    protected $dates = [
        'check_in_date',
        'check_out_date',
        'created_at',
        'updated_at',
    ]; 

    protected $casts = [
        'check_in_date' => 'datetime',
        'check_out_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}

public function room()
{
    return $this->belongsTo(Room::class);
}

}
