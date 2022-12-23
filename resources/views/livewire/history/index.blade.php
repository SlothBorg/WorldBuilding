<div>
    <h1>Histories</h1>

    @if($histories->isEmpty())
        <p>No history has been created yet.</p>

        <x-livewire-action-button action="test" text="Create the first History!" color="{{ true }}"/>
    @else
        @foreach ($histories as $history)
            {{ $history->name }}
        @endforeach

        {{ $histories->links() }}
    @endif

</div>
