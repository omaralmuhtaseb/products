<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'description' =>$faker->sentence,
        'quantity'=>$faker->numberBetween(1,100),
        'price' =>$faker->randomFloat(3,1,2000) ,
        'image' =>'https://upload.wikimedia.org/wikipedia/commons/d/d7/Mawdoo3_Logo.png',
        'creator_id' =>$faker->numberBetween(1,100)
    ];
});
