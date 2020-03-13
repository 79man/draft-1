<?php

use App\FootballScore;
use Illuminate\Database\Seeder;

class FootballScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FootballScore::class, 10)->create();
    }
}