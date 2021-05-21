<div class="btn-group-vertical w-100">
    <button type="button" class="btn btn-primary text-white btn-outline-primary"
            onclick="window.location.href='{{ route('members.show', $member) }}'">
        {{ __('Stream') }}
    </button>
    @if(Auth::user()->isFollowing($member))
        <button type="button" class="btn btn-danger text-white btn-outline-danger"
                onclick="document.getElementById('unfollow-form').submit();">
            {{ __('Unfollow') }}
        </button>
        <form id="unfollow-form" action="{{ route('members.unfollow', [$member->id]) }}" method="POST">
            @csrf
        </form>
    @else
        <button type="button" class="btn btn-success text-white btn-outline-success"
                onclick="document.getElementById('follow-form').submit();">
            {{ __('Follow') }}
        </button>
        <form id="follow-form" action="{{ route('members.follow', [$member->id]) }}" method="POST">
            @csrf
        </form>
    @endif
</div>
