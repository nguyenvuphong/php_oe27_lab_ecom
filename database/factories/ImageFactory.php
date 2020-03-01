<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(app\Models\Image::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'product_id' => $faker->product_id,
    ];
});
