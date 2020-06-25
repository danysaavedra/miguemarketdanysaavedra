<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
'id' => $faker->unique()->randomDigit(),

        'name' => $faker->name,
        'lastname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'foto' => 0,
'admin' => $faker->randomDigit(),
'domicilio' => 0,
'nro' =>$faker->randomDigit(),
'dto' => $faker->randomDigit(),

'piso' => $faker->randomDigit(),
'localidad' => $faker->name,
'partido' => $faker->name,
'calle1' => $faker->name,
'calle2' => $faker->name,
'tel1' => 0,
'tel2' => 0,
    ];
});

