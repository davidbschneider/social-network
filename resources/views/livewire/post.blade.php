<div class="card mt-2">
    <div class="card-body">
        <h5 class="card-title border-bottom pb-2">
            {{ $post->author->name }}
            <span class="text-muted small">
                ({{ $post->created_at->diffForHumans() }})
            </span>
        </h5>

        <div class="border-bottom pb-2">
            {{ $post->content }}
        </div>
        @foreach($post->comments as $comment)
            <livewire:comment :comment="$comment"/>
        @endforeach
        <livewire:comment-form :post="$post">
    </div>
</div>
