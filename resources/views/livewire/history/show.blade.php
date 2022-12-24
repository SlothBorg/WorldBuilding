<div>
    <section class="w-full">
        <div class="flex justify-center max-w-full prose">
            <h2>{{ $history->name }}</h2>
        </div>
        <div class="flex flex-row space-x-4 px-8">
            <x-open-modal-button modalName="period.create" text="Add Period" cssClass="bg-light text-dark font-bold py-2 px-4 rounded border-2 border-dark hover:border-accent-red hover:text-accent-red hover:underline hover:decoration-2" />

            <x-open-modal-button modalName="foci.create" text="Foci" />
            <x-open-modal-button modalName="pallet.create" text="Pallet" />
            <x-open-modal-button modalName="legacies.create" text="Legacies" />
            <x-open-modal-button modalName="characters.create" text="Characters" />
            <x-open-modal-button modalName="players.create" text="Players" />
        </div>
    </section>
</div>
