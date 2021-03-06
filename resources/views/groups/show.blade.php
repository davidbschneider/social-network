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

        <livewire:post-form :postable="$group"/>
        <livewire:post-list :postable="$group"/>

    </x-stream>
</x-app-layout>
