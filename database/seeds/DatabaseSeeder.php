<?php

use App\Post;
use App\Topic;
use App\User;
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
        // $this->call(UserSeeder::class);
        factory(User::class, 20)->create();

        Topic::create(['name' => 'Featured Site', 'slug' => 'featured']);
        Topic::create(['name' => 'Useful Links', 'slug' => 'link']);
        Topic::create(['name' => 'Guides & Tutorials', 'slug' => 'tutorials']);

        factory(Post::class, 20)->create();
    }
}
