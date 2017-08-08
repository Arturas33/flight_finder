<?php

namespace App;

use App\Models\CoreModel;


class FFCountry extends CoreModel
{
    /**
     * $table name DataBases
     */
    protected $table = 'FF_country';

    /**
     * $fillable is table 'FF_country' fields
     */

    protected $fillable = ['id', 'name'];
}
