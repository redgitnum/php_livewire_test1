<table class="table-auto">
    <thead>
        <tr>
        <th class="w-1/2 px-4 py-2 text-light-blue-600">#</th>
        <th class="w-1/4 px-4 py-2 text-light-blue-600">Name</th>
        <th class="w-1/4 px-4 py-2 text-light-blue-600">Weight</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($products))
            @foreach($products as $product)
            <tr wire:click="delete({{ $product }})">
                <td class="border border-light-blue-500 px-4 py-2 text-light-blue-600 font-medium">{{ $product->id }}</td>
                <td class="border border-light-blue-500 px-4 py-2 text-light-blue-600 font-medium">{{ $product->name }}</td>
                <td class="border border-light-blue-500 px-4 py-2 text-light-blue-600 font-medium">{{ $product->weight }}</td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
