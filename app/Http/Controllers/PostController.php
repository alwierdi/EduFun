<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author as AuthorModel;
use App\Models\Post as PostModel;

class PostController extends Controller
{
    public function displayMulmed()
    {
        $authors = AuthorModel::with('postsRelation')->get();
        $posts = PostModel::with('authorsRelation', 'categoriesRelation')->get();
        // dd($authors, $posts);

        return view('posts.mulmedPosts', compact('authors', 'posts'));
    }
}
