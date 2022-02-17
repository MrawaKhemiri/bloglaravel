<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Author;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call([PostSeeder::class, CategorySeeder::class,AuthorSeeder::class]);
    }
}
