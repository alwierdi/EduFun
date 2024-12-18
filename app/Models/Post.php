<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = [];
    protected $primaryKey = 'post_id';

    public function authorsRelation()
    {
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }

    public function categoriesRelation()
    {
        return $this->belongsToMany(Category::class, 'category_post', 'post_id', 'category_id');
    }
}
