<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = [];

    public function authorsRelation()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function categoriesRelation()
    {
        return $this->hasMany(Category::class, 'category_id');
    }
}
