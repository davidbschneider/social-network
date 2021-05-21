<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ $group->name }}
        </h2>
    </x-slot>
    <x-stream>
        <x-slot name="menu">
            <x-group-menu :group="$group"/>
        </x-slot>

        <h1>
            {{ __('Members') }}
        </h1>
        @foreach($group->allUsers() as $member)
            <x-member-card :member="$member"/>
        @endforeach
    </x-stream>
</x-app-layout>
