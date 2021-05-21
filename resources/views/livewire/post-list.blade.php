<div wire:poll.1m>
    @foreach($posts as $post)
        <div class="card mt-2">
            <div class="card-body">
                {{ $post->author->name }}: {{ $post->content }}
            </div>
        </div>
    @endforeach
</div>
