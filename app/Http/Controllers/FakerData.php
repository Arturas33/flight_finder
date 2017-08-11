<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 8/10/2017
 * Time: 1:41 PM
 */

namespace App\Http\Controllers;


use App\FFAirLine;
use App\FFAirPorts;
use App\FFFlights;
use Carbon\Carbon;
use Faker\Factory;

class FakerData extends Controller
{


    public function generateAirports($count = 100)
    {
         function getRandomString($length = 3)
        {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $airport_id = '';


            for ($i = 0; $i < $length; $i++) {
                $airport_id .= $characters[mt_rand(0, strlen($characters) - 1)];
            }

            return $airport_id;
        }

        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {
            FFAirPorts::create([
                'id' => getRandomString(),
                'name' => $faker->company,
                'city' => $faker->city,
                'contry_id' => FF_contries::all()->random()->id,
            ]);
        }

    }

    public function generateFlights($count = 5000)
    {
        $faker = Factory::create();
        for ($i = 0; $i < $count; $i++) {
            $time = Carbon::create(rand(2017, 2018), rand(1, 12), rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59));
            FFFlights::create([
                'id' => $faker->uuid,
                'airLine_id' => FFAirLine::all()->random()->id,
                'origin_id' => FFAirPorts::all()->random()->id,
                'departure' => $time->toDateTimeString(),
                'destination_id' => FFAirPorts::all()->random()->id,
                'arrivel' => $time->addMinutes(rand(30, 960))->toDateTimeString()
            ]);
        }
    }
}

