<div class="d-flex my-2">
    <div class="flex-shrink-0">
        <a href="{{ route('members.show', $comment->author) }}">
        <img width="64" height="64" class="rounded-circle" src="{{ $comment->author->profile_photo_url }}" alt="{{ $comment->author->name }}">
        </a>
    </div>
    <div class="flex-grow-1 ms-3 small">
        <div class="border p-1 rounded">
            {{ $comment->content }}
        </div>
        <div class="small text-muted text-end py-1">
            {{ $comment->created_at->diffForHumans() }}
        </div>
    </div>
</div>
