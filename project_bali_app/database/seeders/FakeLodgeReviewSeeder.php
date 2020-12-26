<?php

namespace Database\Seeders;

use App\Models\LodgeReview;
use Illuminate\Database\Seeder;

class FakeLodgeReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LodgeReview::factory()->count(25)->create();
    }
}
