<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Post::class, function (Faker $faker) {
    return [
        'slug' => Str::lower($faker->word),
        'title' => $faker->sentence,
        'body' => $faker->text($maxNbChars = 300),
        'deleted_at' => null,
        'created_at' => now(),
        'updated_at' => null,
        'published_at' => null,
        'authored_by' => 1,
    ];
});
