<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 8/10/2017
 * Time: 1:41 PM
 */

namespace App\Http\Controllers;


use Faker\Factory;

class FakerData extends Controller
{

    public function generateAirport($count = 500 )
    {
        $faker = Factory::create();
    }



}