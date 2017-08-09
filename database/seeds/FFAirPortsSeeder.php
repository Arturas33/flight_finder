<?php

use App\FFAirPorts;
use App\FFCountry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 8/9/2017
 * Time: 11:24 AM
 */

class FFAirPortsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airlines =[
            ['name' => 'AirTanker','country' => 'Niger'] ,
            ['name' => 'Atlantic Airlines','country' => 'Nigeria'],
            ['name' => 'BA CityFlyer','country' => 'Norway'],
            ['name' => 'BAE Systems Corporate Air Travel','country' => 'Oman'],
            ['name' => 'BMI Regional','country' => 'Pakistan'],
            ['name' => 'Bristow Helicopters','country' => 'Panama'],
            ['name' => 'British Airways','country' => 'Peru'],
            ['name' => 'CargoLogicAir','country' => 'Poland'],
            ['name' => 'Cello Aviation','country' => 'Portugal'],
            ['name' => 'DHL Air UK','country' => 'Romania'],
            ['name' => 'Eastern Airways','country' => 'Rwanda'],
            ['name' => 'EasyJet','country' => 'Serbia'],
            ['name' => 'Flybe','country' => 'Somalia'],
            ['name' => 'Jet2','country' => 'Spain'],
            ['name' => 'Jota Aviation','country' => 'Sudan'],
        ];
        DB::beginTransaction();
        try {
            foreach ($airlines as $item) {
                $record = FFAirPorts::find($item['name']);
                if (!$record ) {
                    FFAirPorts::create([
                        'id' => Uuid::uuid4(),
                        'name' => $item['name'],
                        'contry_id'=> FFCountry::where('name',$item['country'])->value('id'),
                        'city' => $item['name'],
                    ]);
                }
            }
        } catch (Exception $e) {
            DB::rollback();
            echo 'Point of failure ' . $e->getCode() . ' ' . $e->getMessage();
            throw new Exception($e);
        }
        DB::commit();
    }

}