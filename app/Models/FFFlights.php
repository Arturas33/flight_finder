<?php

namespace App;



use App\Models\CoreModel;

class FFFlights extends CoreModel
{
    /**
     * $table name DataBases
     */
    protected $table = 'FF_flights';

    /**
     * $fillable is table 'FF_flights' fields
     */

    protected $fillable = ['id', 'name', 'departure', 'arrivel', 'airLine_id', 'origin_id', 'destination_id'];


    protected $with = ['originAirport','destinationAirport','airline'];

    public function originAirport()
    {
        return $this->hasOne(FFAirPorts::class, 'id', 'origin_id');
    }

    public function destinationAirport()
    {
        return $this->hasOne(FFAirPorts::class, 'id', 'destination_id');
    }
    public function airline()
    {
        return $this->hasOne(FFAirLine::class, 'id', 'airLine_id');
    }
}
