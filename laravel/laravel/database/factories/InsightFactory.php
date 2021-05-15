<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Insight;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Insight::class, function (Faker $faker) {
    return [
        'impressions' => $faker->numberBetween(1, mt_rand(1000, 10000)),
        'conversions' => $faker->numberBetween(0, mt_rand(1, 3)),
        'clicks' => $faker->numberBetween(1, mt_rand(1, 100)),
        'spend' => $faker->numberBetween(500, mt_rand(501, 3000)),
        'created_at' => $faker->dateTimeBetween('-3 years', 'now'),
    ];
});
