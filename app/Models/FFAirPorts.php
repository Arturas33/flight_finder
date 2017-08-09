<?php

namespace App;

use App\Models\CoreModel;

class FFAirPorts extends CoreModel
{
    /**
     * $table name DataBases
     */
    protected $table = 'FF_airports';

    /**
     * $fillable is table 'FF_airports' fields
     */

    protected $fillable = ['id', 'name', 'city', 'contry_id'];
}
