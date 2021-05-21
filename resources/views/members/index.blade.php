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
                    <x-member-card :member="$member"/>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
