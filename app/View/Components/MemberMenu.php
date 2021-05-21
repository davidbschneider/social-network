<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class MemberMenu extends Component
{
    public $member;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(User $member)
    {
        $this->member = $member;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.member-menu')
            ->withMember($this->member);
    }
}
