<?php

use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
    return [
        'model' => $faker->name,
        'year' => $faker->year($max = 'now'),
        'make' => $faker->randomElement($array = array ('ford','honda','toyota')),
    ];
});
