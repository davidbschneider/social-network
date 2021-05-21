<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Create Group') }}
        </h2>
    </x-slot>

    <div>
        @livewire('teams.create-team-form')
    </div>
</x-app-layout>
