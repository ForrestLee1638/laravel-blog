<?php

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

$factory->define(App\Xws::class, function (Faker $faker) {
    return [
        'bt' => $faker->sentence,
        'lx' => $faker->randomElement(['个人日记','学习笔记','心情记录']),
        'nr' => $faker->paragraphs(10,true),
        'fbr' =>$faker->name,
    ];
});
