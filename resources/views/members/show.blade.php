<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <img class="rounded-circle" src="{{ $member->profile_photo_url }}" alt="{{ $member->name }}">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h2 class="">
                        {{ $member->name }}
                    </h2>
                </div>
            </div>
        </h2>
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
