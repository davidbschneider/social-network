<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('members.index') }}">
                        {{ __('Members') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('groups.index') }}">
                        {{ __('Groups') }}
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth

                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->currentTeam->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><h6 class="dropdown-header">{{ __('Manage Group') }}</h6></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Group Settings') }}
                                    </a>
                                </li>
                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <li>
                                        <a class="dropdown-item" href="{{ route('teams.create', Auth::user()->currentTeam->id) }}">
                                            {{ __('Create New Group') }}
                                        </a>
                                    </li>
                                @endcan
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">{{ __('Switch Group') }}</h6></li>
                                @foreach (Auth::user()->allTeams() as $team)
                                    <li>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                            document.getElementById('switch-team-form-{{ $team->id }}').submit();">
                                            {{ $team->name }}
                                        </a>
                                        <form method="POST" action="{{ route('current-team.update') }}" id="switch-team-form-{{ $team->id }}">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="team_id" value="{{ $team->id }}">
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><h6 class="dropdown-header">{{ __('Manage Account') }}</h6></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <li>
                                    <a class="dropdown-item" href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </a>
                                </li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Log out') }}
                                </a>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
