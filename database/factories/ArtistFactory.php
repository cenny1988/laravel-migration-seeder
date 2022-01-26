<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
       
        'name' => $faker->firstName(),
        'lastname' => $faker->lastName(),
        'stagename' => $faker->name(),
        'date_of_birth' => $faker->date(),
        'birth_city' => $faker->citySuffix(),
        'genre' => $faker->randomElement(['male', 'female']),
        
        'email' => $faker->email(),
        'phone' => $faker->numberBetween(),
        'web-site' => $faker->url(),
        'address'=> $faker->streetAddress(),
        'bio'=> $faker->text()
    ];
});
