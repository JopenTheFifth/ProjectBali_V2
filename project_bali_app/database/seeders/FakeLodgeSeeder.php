<?php

namespace Database\Seeders;

use App\Models\Lodge;
use Illuminate\Database\Seeder;

class FakeLodgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $lodges = Lodge::factory()->count(10)->create();
        Lodge::factory(10)
            ->has(\App\Models\LodgeType::factory()->count(1))->create();
    }
}
