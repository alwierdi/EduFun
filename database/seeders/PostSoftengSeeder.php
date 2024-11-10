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

        $author = Author::all();

        for ($i = 0; $i < count($title); $i++) {
            // Mendapatkan kategori 'Software Engineering'
            $category = Category::where('name', 'Software Engineering')->first();

            // Buat post baru
            $post = Post::create([
                'title' => $title[$i],
                'content' => $faker->paragraph,
                'slug' => Str::slug($title[$i]),
                'author_id' => $author->random()->author_id // pilih author secara acak
            ]);

            // Setelah post dibuat, attach kategori ke post
            // Menggunakan categoriesRelation yang merupakan relasi many-to-many
            $post->categoriesRelation()->attach($category->category_id);
        }
    }
}
