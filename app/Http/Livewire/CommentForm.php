<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentForm extends Component
{
    public $show = false;
    public $content = '';
    public $post;

    protected $rules = [
        'content' => 'required|string|min:1',
    ];

    public function render()
    {
        return view('livewire.comment-form');
    }

    public function save()
    {
        $this->validate();

        Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $this->post->id,
            'content' => $this->content,
        ]);

        $this->toggle();
    }

    public function toggle()
    {
        $this->show = !$this->show;
        $this->content = '';
    }
}
