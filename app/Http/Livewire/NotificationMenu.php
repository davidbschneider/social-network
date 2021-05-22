<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationMenu extends Component
{
    public $count = 1;

    public function update()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.notification-menu');
    }
}
