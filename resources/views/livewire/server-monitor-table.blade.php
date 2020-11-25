<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="float-right mt-3">
        <livewire:server-monitor-run :host="$host" slot="Run checks" />
    </div>
    <h2 class="text-2xl text-center my-3">
        {{ $host->name }}
    </h2>

    <table class="min-w-full table-auto">
        <thead class="justify-between">
        <tr class="bg-gray-100 text-black text-left">
            <th class="px-3 py-2">Name</th>
            <th class="px-3 py-2">Status</th>
            <th class="px-3 py-2">Info</th>
            <th class="px-3 py-2">Last run</th>
            <th class="px-3 py-2">Details</th>
        </tr>
        </thead>
        <tbody class="bg-gray-200">
        @foreach($host->checks as $check)
            <livewire:server-monitor-row :check="$check" />
        @endforeach
        </tbody>
    </table>
</div>
