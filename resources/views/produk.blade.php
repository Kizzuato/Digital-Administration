<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Daftar Produk</h2>

                <div x-data="{
                    products: [
                        { name: 'Laptop', price: 'Rp 12.000.000', image: 'https://via.placeholder.com/150' },
                        { name: 'Kaos', price: 'Rp 75.000', image: 'https://via.placeholder.com/150' },
                        { name: 'Roti', price: 'Rp 20.000', image: 'https://via.placeholder.com/150' },
                        { name: 'Smartphone', price: 'Rp 5.000.000', image: 'https://via.placeholder.com/150' }
                    ]
                }" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <template x-for="product in products" :key="product.name">
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow text-center">
                            <img :src="product.image" alt="Product Image"
                                class="w-full h-40 object-cover mb-4 rounded">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100" x-text="product.name">
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300" x-text="product.price"></p>
                            <button
                                class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Detail</button>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
