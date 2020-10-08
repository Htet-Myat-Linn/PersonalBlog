<?php

use App\Article;
use App\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Article::class,20)->create();
       	factory(App\Comment::class,15)->create();
        factory(App\Category::class,5)->create();
    }
}
