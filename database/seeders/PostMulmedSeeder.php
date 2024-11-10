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

        // Query semua data authors dan categories
        $author = Author::all();
        $categories = Category::all();

        for ($i = 0; $i < count($title); $i++) {
            // Memastikan bahwa category yang sesuai ada di database
            $category = $categories->where('name', 'Interactive Multimedia')->first();

            // Membuat post baru
            $post = Post::create([
                'title' => $title[$i],
                'content' => $faker->paragraph,
                'slug' => Str::slug($title[$i]),
                'author_id' => $author->random()->author_id // memilih author secara acak
            ]);

            // Setelah post dibuat, kaitkan kategori ke post
            $post->categoriesRelation()->attach($category->category_id);
        }
    }
}
