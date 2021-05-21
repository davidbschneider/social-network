<?php

namespace App\View\Components;

use App\Models\Team;
use Illuminate\View\Component;

class GroupMenu extends Component
{
    public $group;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Team $group)
    {
        $this->group = $group;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.group-menu')
            ->withGroup($this->group);
    }
}
