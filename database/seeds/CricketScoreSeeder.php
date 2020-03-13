<?php

use App\CricketScore;
use Illuminate\Database\Seeder;

class CricketScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CricketScore::class, 10)->create();
    }
}