<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function postRelatios()
    {
        return $this->belongsToMany(Post::class, 'category_id');
    }
}
