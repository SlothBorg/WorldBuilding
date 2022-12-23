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
                        <td>{{ $history->name }}</td>
                        <td>{{ substr($history->summary, 0, 75) }}</td>
                        <td>{{ $history->locked ? 'Private' : 'Public' }}</td>
                        <td>
                            <svg class="humbleicons bg-dark">
                                <use xlink:href="humbleicons.svg#pencil"/>
                            </svg>
                        </td>
                        <td>
                            <svg class="humbleicons bg-dark">
                                <use xlink:href="humbleicons.svg#trash"/>
                            </svg>
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
