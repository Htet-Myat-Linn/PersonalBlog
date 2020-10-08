<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
	static $article_id=1;
    return [
        'article_name'=> $faker->name,
        'content'=>$faker->paragraph,
        'category_id'=>rand(1,3),
        'article'=>$article_id++,
        'description'=>$faker->paragraph,
    ];

});
