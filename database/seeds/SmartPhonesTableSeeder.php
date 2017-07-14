<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use Faker\Factory as Faker;

class SmartPhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Manufacturer = array('Samsung', 'Vivo', 'TCL-Alcatel', 'Oppo', 'LG',
            'Xiaomi', 'Lenovo-Motorola', 'Huawei', 'Apple');

        $faker = Faker::create();
        foreach (range(1, 30) as $index) {
            DB::table('smartphones')->insert([
                'modelname' => $faker->streetSuffix,
                'manufacturer' => $Manufacturer[array_rand($Manufacturer)],
                'barcode' => $faker->ean13,
                'price' => $faker->numberBetween($min = 1000, $max = 5500),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
