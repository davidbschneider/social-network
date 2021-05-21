<div class="card">
    <div class="card-body">
        <label for="new_post_content" class="form-label">
            {{ __('Write something ...') }}
        </label>
        <textarea rows="4" id="new_post_content" class="form-control" wire:model="content"></textarea>
        <div class="text-end pt-2">
            <button wire:click="save" class="btn btn-primary">
                {{ __('Save') }}
            </button>
        </div>
    </div>
</div>
