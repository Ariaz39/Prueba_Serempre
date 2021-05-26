<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Client::class, function (Faker $faker) {
    return [
        'cod' => mt_rand(1,99999999),
        'name' => $faker->name,
        'cities_id' => mt_rand(1,5),
    ];
});
