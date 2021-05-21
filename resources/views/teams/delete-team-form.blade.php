<x-jet-action-section>
    <x-slot name="title">
        {{ __('Delete Group') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Permanently delete this group.') }}
    </x-slot>

    <x-slot name="content">
        <div class="test-sm text-muted">
            {{ __('Once a group is deleted, all of its resources and data will be permanently deleted. Before deleting this group, please download any data or information regarding this group that you wish to retain.') }}
        </div>

        <div class="mt-3">
            <x-jet-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                {{ __('Delete Group') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingTeamDeletion">
            <x-slot name="title">
                {{ __('Delete Group') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete this group? Once a group is deleted, all of its resources and data will be permanently deleted.') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingTeamDeletion')"
                                        wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-danger-button wire:click="deleteTeam" wire:loading.attr="disabled">
                    {{ __('Delete Group') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
