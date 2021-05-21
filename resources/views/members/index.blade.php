<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Members') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach($members as $member)
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
