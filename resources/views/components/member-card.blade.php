<div class="d-flex">
    <div class="flex-shrink-0">
        <img class="rounded-circle" width="64" height="64" src="{{ $member->profile_photo_url }}" alt="{{ $member->name }}">
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
