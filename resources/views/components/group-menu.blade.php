<div class="btn-group-vertical w-100">
    <button type="button" class="btn btn-primary"
            onclick="window.location.href='{{ route('groups.show', $group) }}'">
        {{ __('Stream') }}
    </button>
    <button type="button" class="btn btn-primary"
            onclick="window.location.href='{{ route('groups.members', $group) }}'">
        {{ __('Members') }}
    </button>
    @if(!$group->hasUser(Auth::user()))
        <button type="button" class="btn btn-success"
                onclick="document.getElementById('leave-form').submit();">
            {{ __('Join Group') }}
        </button>
        <form id="leave-form" action="{{ route('groups.join', [$group->id]) }}" method="POST">
            @csrf
        </form>
    @else
        @if($group->owner->id!=Auth::id())
            <button type="button" class="btn btn-danger"
                    onclick="document.getElementById('join-form').submit();">
                {{ __('Leave Group') }}
            </button>
            <form id="join-form" action="{{ route('groups.leave', [$group->id]) }}" method="POST">
                @csrf
            </form>
        @endif
    @endif
</div>

