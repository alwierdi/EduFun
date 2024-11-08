<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $guarded = [];

    public function articlesRelation()
    {
        return $this->hasMany(Post::class);
    }
}
