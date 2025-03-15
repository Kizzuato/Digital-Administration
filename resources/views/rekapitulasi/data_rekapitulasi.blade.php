<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Tabel Penjualan</h2>

                <!-- Filter Section -->
                <div x-data="{ search: '', category: '' }" class="mb-4 flex flex-col md:flex-row gap-4">
                    <input type="text" x-model="search" placeholder="Cari produk..."
                        class="w-full md:w-1/3 p-2 border rounded dark:bg-gray-700 dark:text-white">
                    <select x-model="category"
                        class="w-full md:w-1/3 p-2 border rounded dark:bg-gray-700 dark:text-white">
                        <option value="">Semua Kategori</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Pakaian">Pakaian</option>
                        <option value="Makanan">Makanan</option>
                    </select>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse border border-gray-300 dark:border-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th class="border border-gray-300 dark:border-gray-600 p-2">No</th>
                                <th class="border border-gray-300 dark:border-gray-600 p-2">Produk</th>
                                <th class="border border-gray-300 dark:border-gray-600 p-2">Kategori</th>
                                <th class="border border-gray-300 dark:border-gray-600 p-2">Jumlah</th>
                                <th class="border border-gray-300 dark:border-gray-600 p-2">Harga</th>
                                <th class="border border-gray-300 dark:border-gray-600 p-2">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="(sale, index) in filteredSales()" :key="index">
                                <tr class="border border-gray-300 dark:border-gray-600">
                                    <td class="p-2 border border-gray-300 dark:border-gray-600" x-text="index + 1"></td>
                                    <td class="p-2 border border-gray-300 dark:border-gray-600" x-text="sale.product"></td>
                                    <td class="p-2 border border-gray-300 dark:border-gray-600" x-text="sale.category"></td>
                                    <td class="p-2 border border-gray-300 dark:border-gray-600" x-text="sale.quantity"></td>
                                    <td class="p-2 border border-gray-300 dark:border-gray-600" x-text="sale.price"></td>
                                    <td class="p-2 border border-gray-300 dark:border-gray-600" x-text="sale.total"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('salesData', () => ({
                search: '',
                category: '',
                sales: [
                    { product: 'Laptop', category: 'Elektronik', quantity: 2, price: 12000000, total: 24000000 },
                    { product: 'Kaos', category: 'Pakaian', quantity: 5, price: 75000, total: 375000 },
                    { product: 'Roti', category: 'Makanan', quantity: 10, price: 20000, total: 200000 },
                    { product: 'Smartphone', category: 'Elektronik', quantity: 1, price: 5000000, total: 5000000 },
                ],
                filteredSales() {
                    return this.sales.filter(sale => {
                        return (
                            (this.category === '' || sale.category === this.category) &&
                            (this.search === '' || sale.product.toLowerCase().includes(this.search.toLowerCase()))
                        );
                    });
                }
            }));
        });
    </script>

</x-app-layout>
