<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Category;
use App\Author;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'content'=>$faker->paragraph,
        'category_id'=>factory(Category::class)->create()->id,
        'author_id'=>factory(Author::class)->create()->id,
        'image'=>$faker->url('fond.jpg')

    ];
});
