<button
        class="{{ $cssClass }}"
        onclick="Livewire.emit('openModal', '{{ $modalName }}')"
>
    {{ $text }}
</button>