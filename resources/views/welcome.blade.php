<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Administrator</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-orange-100 dark:bg-gray-900 min-h-screen">
    @include('navbar')
    
    <div class="flex">
        @include('sidebar')
        <div class="container mx-auto p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-orange-600 dark:text-orange-400">Total Data Penjualan</h2>
                    <p class="text-3xl font-bold text-gray-700 dark:text-white">1,250</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-orange-600 dark:text-orange-400">Data Penjualan Hari Ini</h2>
                    <p class="text-3xl font-bold text-gray-700 dark:text-white">23</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-orange-600 dark:text-orange-400">Data penjualan bulan ini</h2>
                    <p class="text-3xl font-bold text-gray-700 dark:text-white">5</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
