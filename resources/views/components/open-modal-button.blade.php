<button
    class="{{ $cssClass }}"
    onclick="Livewire.emit('openModal', '{{ $modalName }}' {{ ($hasData) ? ',' . json_encode([$variableName => $variable])  : '' }})"
>

    {{ $text }}
</button>