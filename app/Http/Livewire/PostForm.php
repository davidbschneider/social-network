<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostForm extends Component
{
    public $content = '';
    public $postable;

    protected $rules = [
        'content' => 'required|string|min:1',
    ];

    public function render()
    {
        return view('livewire.post-form');
    }

    public function save()
    {
        $this->validate();

        Post::create([
            'author_id' => Auth::id(),
            'postable_id' => $this->postable->id,
            'postable_type' => get_class($this->postable),
            'content' => $this->content,
        ]);

        $this->content = '';
    }
}
