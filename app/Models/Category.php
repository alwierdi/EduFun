<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];

    public function postRelatios()
    {
        return $this->belongsToMany(Post::class, 'category_id');
    }
}
