<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Rekapitulasi Data Penjualan</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Bar Chart -->
                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                        <canvas id="salesBarChart"></canvas>
                    </div>

                    <!-- Line Chart -->
                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                        <canvas id="salesLineChart"></canvas>
                    </div>

                    <!-- Pie Chart -->
                    <div
                        class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow col-span-1 md:col-span-2 flex justify-center items-center max-h-96">
                        <canvas id="salesPieChart" class=""></canvas>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const ctxBar = document.getElementById("salesBarChart").getContext("2d");
                const ctxLine = document.getElementById("salesLineChart").getContext("2d");
                const ctxPie = document.getElementById("salesPieChart").getContext("2d");

                new Chart(ctxBar, {
                    type: "bar",
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"],
                        datasets: [{
                            label: "Total Penjualan",
                            data: [1200, 1900, 3000, 5000, 2300, 4100],
                            backgroundColor: "#4F46E5",
                        }],
                    },
                });

                new Chart(ctxLine, {
                    type: "line",
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"],
                        datasets: [{
                            label: "Tren Penjualan",
                            data: [1000, 1500, 2500, 4500, 2200, 3800],
                            borderColor: "#10B981",
                            fill: false,
                        }],
                    },
                });

                new Chart(ctxPie, {
                    type: "pie",
                    data: {
                        labels: ["Elektronik", "Pakaian", "Makanan", "Lainnya"],
                        datasets: [{
                            data: [40, 30, 20, 10],
                            backgroundColor: ["#F59E0B", "#EF4444", "#3B82F6", "#8B5CF6"],
                        }],
                    },
                });
            });
        </script>
    @endpush
</x-app-layout>
