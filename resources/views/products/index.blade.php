<link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
<div class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight">Produk Kami</h1>
            <p class="mt-2 text-lg text-gray-600">Kualitas Terbaik.</p>
        </div>

        <div class="overflow-x auto">
            <table class="table-auto w-full text-left text-gray-500">
                <thead>
                    <tr>
                        <th class="px-6 pt-4 pb-1 text-left text-xs leading-4 font-medium text-gray-900 tracking-wider uppercase">Name</th>
                        <th class="px-6 pt-4 pb-1 text-left text-xs leading-4 font-medium text-gray-900 tracking-wider uppercase">Price</th>
                        <th class="px-6 pt-4 pb-1 text-left text-xs leading-4 font-medium text-gray-900 tracking-wider uppercase">Description</th>
                        <th class="px-6 pt-4 pb-1 text-left text-xs leading-4 font-medium text-gray-900 tracking-wider uppercase">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td class="border-b border-gray-200 px-6 py-4">{{ $product->name }}</td>
                            <td class="border-b border-gray-200 px-6 py-4">Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="border-b border-gray-200 px-6 py-4">{{ $product->description }}</td>
                            <td class="border-b border-gray-200 px-6 py-4">
                                <img class="w-24 h-24 object-cover" src="{{ $product->image_url ?? 'https://placehold.co/400x300/000000/FFF?text=No+Image' }}" alt="{{ $product->name }}">
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border-b border-gray-200 px-6 py-4 text-center" colspan="4">No Products Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>

