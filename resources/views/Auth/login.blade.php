<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Administrator</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex items-center justify-center h-screen bg-orange-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-md rounded-xl">
        <h2 class="text-2xl font-bold text-center text-orange-600">Login</h2>
        <form action="{}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-orange-500 focus:border-orange-500">
            </div>
            <div>
                <label for="password"
                    class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-orange-500 focus:border-orange-500">
            </div>
            <button type="submit"
                class="w-full px-4 py-2 text-white bg-orange-600 rounded-lg hover:bg-orange-700">Login</button>
        </form>
        <p class="text-sm text-center text-gray-600">Belum punya akun? <a href="{}"
                class="text-orange-500 hover:underline">Daftar</a></p>
    </div>
</body>

</html>
