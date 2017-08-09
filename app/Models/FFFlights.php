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
}
