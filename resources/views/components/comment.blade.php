<div class="d-flex my-2">
    <div class="flex-shrink-0">
        <img class="rounded-circle" src="{{ $comment->author->profile_photo_url }}" alt="{{ $comment->author->name }}">
    </div>
    <div class="flex-grow-1 ms-3 small">
        <div class="border p-1 rounded">
            {{ $comment->content }}
        </div>
    </div>
</div>
