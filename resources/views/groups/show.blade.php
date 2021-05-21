<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ $group->name }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col">
                @if(!$group->hasUser(Auth::user()))
                    <form action="{{ route('groups.oin', $group) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-primary">
                            {{ __('Join Group') }}
                        </button>
                    </form>
                @else
                    @if($group->owner->id!=Auth::id())
                        <form action="{{ route('groups.leave', $group) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-danger">
                                {{ __('Leave Group') }}
                            </button>
                        </form>
                    @endif
                @endif
                <h1>
                    {{ __('Members') }}
                </h1>
                @foreach($group->allUsers() as $member)
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img class="rounded-circle" src="{{ $member->profile_photo_url }}" alt="{{ $member->name }}">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h2 class="display-4">
                                {{ $member->name }}
                                <a href="{{ route('members.show', $member) }}">
                                    {{ __('Show') }}
                                </a>
                            </h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
