<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $guarded = [];
    protected $primaryKey = 'author_id';

    public function postsRelation()
    {
        return $this->hasMany(Post::class);
    }
}
