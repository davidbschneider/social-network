<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostList extends Component
{
    public $postable;

    public function render()
    {
        $posts = $this->postable->posts()
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('livewire.post-list')->withPosts($posts);
    }
}
