<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PostMulmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // inisialisasi Faker
        $faker = Faker::create('id_ID');
        $title = [
            'Tips Golden Ratio Pada Multimedia',
            'Hooks Interactive Multimedia'
        ];

        // Query semua data authors == SELECT * FROM authors
        $author = Author::all();

        // Memastikan bahwa category yang sesuai ada di database
        $category = Category::where('name', 'Interactive Multimedia')->first();

        for ($i = 0; $i < count($title); $i++) {
            Post::create([
                'title' => $title[$i],
                'content' => $faker->paragraph,
                'slug' => Str::slug($title[$i]),
                // 'category_id' => Category::where('name', 'Interactive Multimedia')->value('id'),
                'category_id' => 5,
                'author_id' => $author->random()->id
            ]);
        }
    }
}
