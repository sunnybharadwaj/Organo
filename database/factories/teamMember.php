<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Organo\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        "imagepath" => $faker->sentence,
        "name" => $faker->name,
        "role" => $faker->sentence,
        "linkedin" => $faker->url,
        "description" => $faker->paragraph,
    ];
});
