<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle"
       href="#"
       id="navbarDropdown"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false"
       wire:click="$count++"
    >
        {{ $count }}
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
            <a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                {{ __('Show All Notifications') }}
            </a>
        </li>
    </ul>
</li>
