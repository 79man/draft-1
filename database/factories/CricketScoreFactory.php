<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\CricketScore;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(CricketScore::class, function (Faker $faker) {
    return [
        'runs' => random_int(-2147483648, 2147483647),
        'wickets' => random_int(-2147483648, 2147483647),
        'fours' => random_int(-2147483648, 2147483647),
        'sixes' => random_int(-2147483648, 2147483647)
    ];
});