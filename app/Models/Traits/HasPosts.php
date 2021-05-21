<?php

namespace App\Models\Traits;

use App\Models\Post;

trait HasPosts
{
    public function posts()
    {
        return $this->morphMany(Post::class, 'postable');
    }
}
