<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityTrip extends Model
{
    use HasFactory;
    protected $fillable = [
        'trip_id', 'city_id', 'order', 'arrival_time'
    ];
}
