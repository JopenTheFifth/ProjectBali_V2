<?php

namespace Database\Seeders;

use App\Models\AccommodationResource;
use App\Models\Lodge;
use App\Models\LodgeReview;
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
        $roles = AccommodationResource::all()->random(2);
        $reviews = LodgeReview::all()->where('user_id', 1);
        Lodge::factory(50)->has(\App\Models\LodgeType::factory()->count(1))
            ->hasAttached($roles)->
            hasAttached($reviews)->create();
    }
}
