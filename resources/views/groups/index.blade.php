<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Groups') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach($groups as $group)
                    <h2 class="display-4">
                        {{ $group->name }}
                        <a href="{{ route('groups.show', $group) }}">
                            {{ __('Show') }}
                        </a>
                    </h2>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
