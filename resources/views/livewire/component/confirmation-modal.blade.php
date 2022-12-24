<div>
    <div class="flex text-center pt-8">
        <p>Are you sure you want to {{ $this->action }} this {{ $this->type }} <span class="font-bold italic">{{ $this->name }}</span>?</p>
    </div>
    <div class="flex justify-center">
        <form wire:submit.prevent="confirm" method="POST">
            <button type="button" class="bg-white font-bold py-2 px-4 m-2 border-none" wire:click="$emit('closeModal')">Cancel</button>
            <button type="submit" class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 m-2 rounded-lg border-none">Yes, {{ ucfirst($this->action) }} it.</button>
        </form>
    </div>
</div>