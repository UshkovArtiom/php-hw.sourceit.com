<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'), // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Post::class, function (Faker $faker) {
    $imageUrl = $faker->image('public/uploads/images', 640, 480, 'cats');
    $imageUrl = str_replace('public','', $imageUrl);
    $title = $faker->sentence;
    return [
        'title' => $title,
        'preview_text' => $faker->realText(100),
        'detail_text' => $faker->paragraphs(20, true),
        'image' => $imageUrl,
        'slug' => str_slug($title)
    ];
});