<div>
    @if($show)
        <textarea rows="3" id="new_post_content" class="form-control" wire:model="content"></textarea>
        <div class="text-end pt-2">
            <button wire:click="save" class="btn btn-primary">
                {{ __('Save') }}
            </button>
            <button class="btn btn-primary" wire:click="toggle">{{ __('Abort') }}</button>
        </div>
    @else
        <div class="text-end pt-2">
            <button class="btn btn-primary" wire:click="toggle">{{ __('Comment') }}</button>
        </div>
    @endif

</div>
