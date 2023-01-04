<div class="prose text-center">
    <h2>Add an Event to {{ $period->name }}</h2>
    <p>Blah blah blah</p>

    <section class="text-left justify-center">
        <form wire:submit.prevent="submit">
            <div>
                <label class="block text-dark font-bold mb-1 md:mb-0 pr-4" for="name">
                    Name
                </label>
                @error('name') <span class="error">{{ $message }}</span> @enderror
                <input type="text" id="name" wire:model="name" >
            </div>
            <div>
                <label class="block text-dark font-bold mb-1 md:mb-0 pr-4" for="summary">
                    Summary
                </label>
                @error('summary') <span class="error">{{ $message }}</span> @enderror
                <textarea id="summary" rows="4" wire:model="summary" ></textarea>
            </div>
            <div>
                @error('dark') <span class="error">{{ $message }}</span> @enderror
                <div>
                    <input wire:model="dark" name="dark" type="radio" value="0" /> Light
                    <input wire:model="dark" name="dark" type="radio" value="1" /> Dark
                </div>
            </div>
            <div>
                <button type="submit" >Create Event!</button>
            </div>
        </form>
    </section>

    <section>

    </section>
</div>
