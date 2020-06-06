<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Product;
use Faker\Generator as Faker;




$factory->define(Product::class, function (Faker $faker) {
    return [
      "name" => $faker->sentence(3),
      "description" => $faker->sentence(6),
      "price" =>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
      "avatar" => $faker->image('storage/app/public',400,300, null, false),

      "category_id"=>$faker->numberBetween(1,22)
    ];
});
