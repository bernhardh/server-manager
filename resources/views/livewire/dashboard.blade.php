<div>
    <div class="text-right mb-4">
        <livewire:server-monitor-run slot="Run all checks" />
    </div>

    <div class="md:grid md:grid-cols-1 gap-6">
        @foreach($hosts as $host)
            <livewire:server-monitor-table :host="$host"></livewire:server-monitor-table>
        @endforeach
    </div>

    <div class="text-center mt-5">
        <small>Last page update at {{ date("Y-m-d H:i:s") }}</small>
    </div>
</div>
