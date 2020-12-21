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
        Lodge::factory(30)
            ->has(\App\Models\LodgeType::factory()->count(1))->create();
    }
}
