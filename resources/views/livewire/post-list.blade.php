<div wire:poll.60000ms>
    @foreach($posts as $post)
        <livewire:post :post="$post"/>
    @endforeach
</div>
