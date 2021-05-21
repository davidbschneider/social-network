<x-app-layout>
    <x-slot name="header">
        <x-member-card :member="$member" />
    </x-slot>
    <x-stream>
        <x-slot name="menu">
            <x-member-menu :member="$member" />
        </x-slot>

        <livewire:post-form :postable="$member"/>
        <livewire:post-list :postable="$member"/>

    </x-stream>

</x-app-layout>
