<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\FootballScore;
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

$factory->define(FootballScore::class, function (Faker $faker) {
    return [
        'goals' => random_int(-2147483648, 2147483647),
        'fouls' => random_int(-2147483648, 2147483647),
        'offsides' => random_int(-2147483648, 2147483647),
        'penalties' => random_int(-2147483648, 2147483647)
    ];
});