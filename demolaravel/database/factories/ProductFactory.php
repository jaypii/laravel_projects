<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'name' => $faker->word(), 
        'description' => $faker->paragraph(),         
        'price' => $faker->randomNumber(4)  
    ];
});
