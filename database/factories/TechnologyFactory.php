<?php

use Faker\Generator as Faker;

$factory->define(App\Technology::class, function (Faker $faker) {
    return [
        'tech' => $faker->text(20),
        'description' => $faker->text(75)
    ];
});
