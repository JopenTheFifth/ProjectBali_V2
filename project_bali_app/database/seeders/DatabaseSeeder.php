<?php

namespace Database\Seeders;

use App\Models\Lodge;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             LodgeType::class,
             UserRoleSeeder::class,
             UserSeeder::class,
             FakeLodgeSeeder::class,
             AccommodationResourceSeeder::class,
         ]);

    }
}
