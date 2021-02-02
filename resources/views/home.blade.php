<x-guest-layout>
    <div class="bg-gray-100 p-2 flex flex-col min-h-screen justify-center items-center">
        <div class="flex flex-col bg-green-300 p-4 rounded mb-2">
            <h1 class="text-lg font-bold text-center">Add product</h1>
            @livewire('form-submit')
        </div>
        <div class="flex flex-col bg-blue-300 p-4 rounded">
            @livewire('products-list')
        </div>
    </div>
</x-guest-layout>
