<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form action="{{ route('login') }}" method="POST" class="space-y-4 w-full max-w-md p-8">
        @csrf
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
            <input type="password" id="password" name="password" required
                class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <button type="submit"
            class="w-full px-4 py-2 text-white bg-orange-600 rounded-lg hover:bg-orange-700 dark:bg-orange-500 dark:hover:bg-orange-600">Login</button>
    </form>
    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 dark:hover:text-white dark:text-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
    </div>
</x-guest-layout>
