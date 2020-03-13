<?php

use App\HockeyScore;
use Illuminate\Database\Seeder;

class HockeyScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HockeyScore::class, 10)->create();
    }
}