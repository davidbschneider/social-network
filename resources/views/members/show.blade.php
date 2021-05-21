<x-app-layout>
    <x-slot name="header">
        <x-member-card :member="$member"/>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col">
                @if(Auth::user()->isFollowing($member))
                    <form action="{{ route('members.unfollow', $member) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-danger">
                            {{ __('Unfollow') }}
                        </button>
                    </form>
                @else
                    <form action="{{ route('members.follow', $member) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-primary">
                            {{ __('Follow') }}
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
