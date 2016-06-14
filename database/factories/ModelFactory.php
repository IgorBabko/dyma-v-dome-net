<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(DymaVDomeNet\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(DymaVDomeNet\Chimney::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'type' => 'одностенный',
        'image' => str_random(10),
    ];
});

$factory->define(DymaVDomeNet\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'text' => implode('<br><br>', $faker->paragraphs(rand(5, 7))),
        'image' => str_random(10),
    ];
});
