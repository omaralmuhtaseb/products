<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'description' =>$faker->sentence,
        'quantity'=>$faker->numberBetween(1,100),
        'price' =>$faker->randomFloat(3,1,1000) ,
        'image' =>'2021-chevrolet-tahoe-promo.jpg',
        'creator_id' =>$faker->numberBetween(1,20),
        'created_at' =>$faker->dateTimeBetween('01-06-2021','07-06-2021'),
        'updated_at' =>$faker->dateTimeBetween('01-06-2021','07-06-2021')
    ];
});
