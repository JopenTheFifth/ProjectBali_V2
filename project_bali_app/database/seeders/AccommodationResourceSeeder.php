<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccommodationResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accommodation_resources')->insert([
            'resource_name' => 'WiFi',
            'icon_path' => 'wifi.jpg'
        ]);
        DB::table('accommodation_resources')->insert([
            'resource_name' => 'parking',
            'icon_path' => 'parking.jpg'
        ]);
        DB::table('accommodation_resources')->insert([
            'resource_name' => 'pool',
            'icon_path' => 'pool.jpg'
        ]);
    }
}
