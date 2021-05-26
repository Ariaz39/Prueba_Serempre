<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\City::class, function (Faker $faker) {
    return [
        'cod' => mt_rand(1,200),
        'name' => $faker->city,
    ];
});
