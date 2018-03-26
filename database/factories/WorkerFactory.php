<?php

use Faker\Generator as Faker;

$factory->define(App\Worker::class, function (Faker $faker) {
    return [
        'ip' => $faker->ipv4,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'country' => $faker->country,
    ];
});
