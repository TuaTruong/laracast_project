<?php

namespace Database\Seeders;
use \App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();


        $user = User::factory()->create([
            "name" => "Tuan dep trai"
        ]);

        
        Post::factory(10)->create([
            "user_id"=> $user->id,
        ]);
        // $user = User::factory()->create();

        // $person = Category::create([
        //     "name"=> "Personal",
        //     "slug"=> "Personal",
        // ]);

        // $family = Category::create([
        //     "name"=> "Family",
        //     "slug"=> "family",
        // ]);

        // $work = Category::create([
        //     "name"=> "Work",
        //     "slug"=> "work",
        // ]);

        // Post::create([
        //     "user_id" => $user->id,
        //     "category_id" => $family->id,
        //     "title" => "My Family Post",
        //     "slug" => "my-family-post",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum perferendis at similique totam modi iste quisquam quasi iure consectetur. Quos.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quisquam, unde est quasi impedit vitae voluptatum sunt neque consectetur! Nostrum ipsam libero eveniet! Facere doloribus ipsum voluptates molestias. Sequi, sed.</p>"
        // ]);

        // Post::create([
        //     "user_id" => $user->id,
        //     "category_id" => $person->id,
        //     "title" => "My Personal Post",
        //     "slug" => "my-personal-post",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum perferendis at similique totam modi iste quisquam quasi iure consectetur. Quos.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quisquam, unde est quasi impedit vitae voluptatum sunt neque consectetur! Nostrum ipsam libero eveniet! Facere doloribus ipsum voluptates molestias. Sequi, sed.</p>"
        // ]);

        // Post::create([
        //     "user_id" => $user->id,
        //     "category_id" => $work->id,
        //     "title" => "My Work Post",
        //     "slug" => "my-work-post",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum perferendis at similique totam modi iste quisquam quasi iure consectetur. Quos.",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quisquam, unde est quasi impedit vitae voluptatum sunt neque consectetur! Nostrum ipsam libero eveniet! Facere doloribus ipsum voluptates molestias. Sequi, sed.</p>"
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
