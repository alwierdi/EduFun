<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PostSoftengSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $title = [
            'Menjadi Fullstack Developer 2024',
            'Siap Menjadi Seorang Software Engineering',
        ];

        $category = Category::where('name', 'Software Engineering')->first();

        $author = Author::all();
        for ($i = 0; $i < count($title); $i++) {
            Post::create([
                'title' => $title[$i],
                'content' => $faker->paragraph,
                'slug' => Str::slug($title[$i]),
                'category_id' => $category->category_id,
                // 'category_id' => Category::where('name', 'Software Engineering'),
                // 'category_id' => 2,
                'author_id' => $author->random()->author_id
            ]);
        }
    }
}
