<div>
    <h1>Histories</h1>

    @if($histories->isEmpty())
        <p>No history has been created yet.</p>

        <button
            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded"
            onclick="Livewire.emit('openModal', 'history.create')"
        >
            Create the first History!
        </button>

    @else
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Summary</th>
                    <th>Private</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histories as $history)
                    <tr>
                        <td>
                            <a href="{{ route('history.show', $history) }}" class="cursor-pointer underline text-accent-purple" alt="View {{ $history->name }}">
                                {{ $history->name }}
                            </a>
                        </td>
                        <td>{{ $history->shortSummary() }}</td>
                        <td>{{ $history->displayStatus() }}</td>
                        <td>
{{--                            <button onclick="Livewire.emit('openModal', 'history.edit', {{ json_encode(["history" => $history]) }})" >--}}
                            <button onclick='Livewire.emit("openModal", "history.edit", {{ json_encode(["history" => $history->id]) }})' >
                                <i class='bx bx-pencil' ></i>
                            </button>
                        </td>
                        <td>
                            <button wire:click="openConfirmation({{ $history->id }})">
                                <i class='bx bx-trash'></i>
                            </button>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

        {{ $histories->links() }}

        <button
                class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded"
                onclick="Livewire.emit('openModal', 'history.create')"
        >
            Create a History!
        </button>
    @endif

</div>
