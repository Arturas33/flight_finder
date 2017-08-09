<?php

namespace App;

use App\Models\CoreModel;


class FFAirLine extends CoreModel
{
    /**
     * $table name DataBases
     */
    protected $table = 'FF_airline';

    /**
     * $fillable is table 'FF_airline' fields
     */

    protected $fillable = ['id', 'name'];
}
