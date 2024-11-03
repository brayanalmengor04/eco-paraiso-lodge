<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;


class Hotel extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'phone'
    ]; 

    public function rooms()
{
    return $this->hasMany(Room::class);
}
}
