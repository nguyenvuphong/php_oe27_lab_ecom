<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(app\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'quantity' => $faker->quantity,
        'price' => $faker->price,
        'price_sale' => $faker->price_sale,
        'description' => $faker->description,
        'brand' => $faker->brand,
        'thumbnail' => $faker->thumbnail,
        'category_id' => $faker->category_id,
        'CPU' => $faker->CPU,
        'RAM' => $faker->RAM,
        'color' => $faker->color,
    ];
});
