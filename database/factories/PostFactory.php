<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->name,
        'description' => Str::random(50),
        'email' => "abc@gmail.com",
        'created_at' => \Carbon\Carbon::parse('2019-06-16')
    ];
});
