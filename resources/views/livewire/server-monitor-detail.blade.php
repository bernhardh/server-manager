<div>
    <p class="mb-3"><strong>Last run:</strong><br>{{ $check->last_ran_at }}</p>
    <p class="mb-3"><strong>Last message:</strong><br>{{ $check->last_run_message }}</p>
    @if($check->last_run_output)
        @if($check->last_run_output["output"])
            <p class="mb-3"><strong>Details:</strong><br>{{ $check->last_run_output["output"] }}</p>
        @endif
        @if($check->last_run_output["error_output"])
            <p><strong>Error-Output:</strong><br>{{ $check->last_run_output["error_output"] }}</p>
        @endif
        @if($check->custom_properties)
            <p><strong>Custom Data:</strong><br><pre>{{ json_encode($check->custom_properties, JSON_PRETTY_PRINT) }}</pre></p>
            <small>At the moment, you have to edit these properties directly inside your db</small>
        @endif
    @endif
</div>
