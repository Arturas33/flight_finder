<?php

use App\FFAirLine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 8/9/2017
 * Time: 11:03 AM
 */

class FFAirLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airlines =[
            ['name' => 'AirTanker'] ,
            ['name' => 'Atlantic Airlines'],
            ['name' => 'BA CityFlyer'],
            ['name' => 'BAE Systems Corporate Air Travel'],
            ['name' => 'BMI Regional'],
            ['name' => 'Bristow Helicopters'],
            ['name' => 'British Airways'],
            ['name' => 'CargoLogicAir'],
            ['name' => 'Cello Aviation'],
            ['name' => 'DHL Air UK'],
            ['name' => 'Eastern Airways'],
            ['name' => 'EasyJet'],
            ['name' => 'Flybe'],
            ['name' => 'Jet2'],
            ['name' => 'Jota Aviation'],
        ];
        DB::beginTransaction();
        try {
            foreach ($airlines as $item) {
                $record = FFAirLine::find($item['name']);
                if (!$record ) {
                    FFAirLine::create([
                        'id' => Uuid::uuid4(),
                        'name' => $item['name']
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