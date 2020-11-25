<tr class="{{ $check->status == "failed" ? "bg-red-300" : "bg-white" }} border-2 border-gray-200 text-left">
    <td>
        <span class="ml-2 font-semibold">{{ $check->type }}</span>
    </td>
    <td class="px-3 py-2">
        @if($check->status == "success")
            <x-heroicon-o-check-circle height="24" class="text-green-500" />
        @elseif($check->status == "warning")
            <x-heroicon-o-exclamation-circle height="24" class="text-yellow-300"/>
        @elseif($check->status == "failed")
            <x-heroicon-o-exclamation height="24" class="text-red-600" />
        @elseif($check->status)
            {{ $check->status }}
        @else
            <x-heroicon-o-question-mark-circle height="24" class="text-gray-500" />
        @endif
    </td>
    <td class="px-3 py-2">
        {{ $check->last_run_message }}
    </td>
    <td class="px-3 py-2">
        {{ $check->last_ran_at }}
    </td>
    <td class="px-3 py-2">
        @if($check->status)
            <x-jet-secondary-button wire:click="$toggle('showModal')">
                Details
            </x-jet-secondary-button>
        @endif

        <x-jet-dialog-modal wire:model="showModal">
            <x-slot name="title">
                <div class="text-center">{{ $check->host->name }} - {{ $check->type }}</div>
            </x-slot>

            <x-slot name="content">
                <livewire:server-monitor-detail :check="$check"></livewire:server-monitor-detail>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('showModal')">
                    Ok
                </x-jet-secondary-button>
            </x-slot>
        </x-jet-dialog-modal>
    </td>
</tr>
