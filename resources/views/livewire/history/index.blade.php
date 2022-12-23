<div>
    <h1>Histories</h1>

    @if($histories->isEmpty())
        <p>No history has been created yet.</p>

        <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded" wire:click="">
            Create the first History!
        </button>

    @else
        @foreach ($histories as $history)
            {{ $history->name }}
        @endforeach

        {{ $histories->links() }}
    @endif

</div>
