<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LodgeType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('lodge_types')->insert([
//           'name' => 'Harambe',
//            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam'
//        ]);
//        DB::table('lodge_types')->insert([
//            'name' => 'Zamballa',
//            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam'
//        ]);
//        DB::table('lodge_types')->insert([
//            'name' => 'Bonque',
//            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam'
//        ]);
//        DB::table('lodge_types')->insert([
//            'name' => 'Rayquaza',
//            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam'
//        ]);

        $lodgeTypes = \App\Models\LodgeType::factory()->count(10)->create();
    }
}
