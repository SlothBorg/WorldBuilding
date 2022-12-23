<div>
    <h2>Create a new History</h2>
    <p>blah blah blah</p>

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
            @error('locked') <span class="error">{{ $message }}</span> @enderror
            <div>
                <input wire:model="locked" name="locked" type="radio" value="0" /> Public
                <input wire:model="locked" name="locked" type="radio" value="1" /> Private
            </div>
        </div>
        <div>
            <button type="submit" >Create History!</button>
        </div>
    </form>
</div>
