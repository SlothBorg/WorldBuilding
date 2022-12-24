<button
    class="{{ $cssClass }}"
    onclick="Livewire.emit('openModal', '{{ $modalName }}' {{ ($hasData) ? ',' . json_encode([$variableName => $variable])  : '' }})"
>
{{--    {{ isset($data) }}--}}
{{--    {{ (isset($dataName)) ? ',' . json_encode([$dataName => $data])  : '' }}--}}
    {{ $text }}
</button>