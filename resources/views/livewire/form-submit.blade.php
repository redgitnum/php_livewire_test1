<form wire:submit.prevent="submit">
    @csrf
    <div class="flex flex-col p-2">
        <label for="name" class="pb-2">Name:
            <input wire:model.defer='name' type="text" name="name" required class="rounded p-2">
        </label>
        <label for="weight" class="pb-2">Weight:
            <input wire:model.defer='weight' type="number" name="weight" required class="rounded p-2">
        </label>
        <button class="bg-green-500 hover:bg-green-200 p-4 rounded">Add Product</button>
    </div>
</form>