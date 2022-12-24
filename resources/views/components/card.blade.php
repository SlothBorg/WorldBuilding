<div class="{{ $dark ? 'bg-dark' : 'bg-light' }} max-w-sm rounded overflow-hidden shadow-lg {{ !empty($border) ? 'border-2 ' . $border : '' }}">
    <div class="px-6 py-4 prose">
        <h2 class="text-center {{ $dark ? 'text-light' : 'text-dark' }}">
            {{ $object->name }}
        </h2>
        <p class="text-center {{ $dark ? 'text-light' : 'text-dark' }}">
            <x-open-modal-button
                modalName="event.create"
                text="Add Event"
                dataName="period"
                :data="$object->id"
                cssClass="border-2 border-accent-purple rounded-lg px-2 {{ $dark ? 'text-light' : 'text-dark' }} hover:underline hover:decoration-2"
            />
        </p>
    </div>
</div>