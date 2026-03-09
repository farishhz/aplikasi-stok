<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Produk</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-4">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" class="block w-full border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label>Stok</label>
                        <input type="number" name="stok" value="{{ $product->stok }}" class="block w-full border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label>Harga</label>
                        <input type="number" name="harga" value="{{ $product->harga }}" class="block w-full border-gray-300 rounded-md" required>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>