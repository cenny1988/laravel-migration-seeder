<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        
        'title' => $faker->name(),
        'release' => $faker->date(),
        'views' => $faker->randomNumber(3),
        'sells' => $faker->randomNumber(3),
        'cover' => $faker->word() . ".png",
        'label' => $faker->sentence(),
        'imei' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
        'price' => $faker->numberBetween(500, 10000),
        'record_company' => $faker->word()
    ];
});
