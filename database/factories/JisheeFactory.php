<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\jishee;
use Faker\Generator as Faker;

$factory->define(jishee::class, function (Faker $faker) {
    return [
        'ovog'=>$faker->name,
        //
    ];
});
