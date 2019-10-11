<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
       'title' => $faker->sentence(rand(1,3)),
       'body' => $faker->paragraph(rand(3.10))
    ];
});
