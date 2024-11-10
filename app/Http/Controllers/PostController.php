<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author as AuthorModel;
use App\Models\Post as PostModel;

class PostController extends Controller
{
    public function displayMulmed()
    {
        // $authors = AuthorModel::with('postsRelation')->get();
        $posts = PostModel::with('authorsRelation', 'categoriesRelation')->get();
        dd($posts);
        // dd(PostModel::with('categoriesRelation')->get());

        return view('posts.mulmedPosts', compact('posts'));
    }

    public function addCategoryToPost($postId, $categoryId)
    {
        $post = PostModel::findOrFail($postId);

        // Menggunakan attach untuk menambahkan kategori
        $post->categories()->attach($categoryId);

        return redirect()->back()->with('message', 'Category added successfully');
    }

    // Method untuk memperbarui kategori post menggunakan sync
    public function updatePostCategories($postId, array $categoryIds)
    {
        $post = PostModel::findOrFail($postId);

        // Menggunakan sync untuk memperbarui kategori, menggantikan yang lama dengan yang baru
        $post->categories()->sync($categoryIds);

        return redirect()->back()->with('message', 'Categories updated successfully');
    }

    // Method untuk menghapus kategori dari post menggunakan detach
    public function removeCategoryFromPost($postId, $categoryId)
    {
        $post = PostModel::findOrFail($postId);

        // Menggunakan detach untuk menghapus kategori tertentu
        $post->categories()->detach($categoryId);

        return redirect()->back()->with('message', 'Category removed successfully');
    }
}
