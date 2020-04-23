<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\System;
use Faker\Generator as Faker;

$factory->define(System::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'offset' => rand(0, 30 * 1000), 
        'glass_thickness' => rand(0, 30 * 1000), 
        'glass_spacing' => rand(0, 30 * 1000), 
    ];
});
