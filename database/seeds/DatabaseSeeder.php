<?php

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
        $this->call(CricketScoreSeeder::class);
        $this->call(HockeyScoreSeeder::class);
        $this->call(FootballScoreSeeder::class);
        $this->call(MatchSeeder::class);
        $this->call(PlayerSeeder::class);
    }
}