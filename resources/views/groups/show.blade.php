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
                        <x-member-card :member="$member"/>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
