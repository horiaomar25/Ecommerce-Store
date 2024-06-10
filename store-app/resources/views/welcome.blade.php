<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased dark:text-white/50 min-h-screen flex items-center justify-center bg-red-300">
    <div class=" text-black/50 dark:text-white/50 p-8 rounded-lg  w-full max-w-md">
        <div class="flex flex-col items-center">
            <header class="mb-8 w-full text-center flex justify-center items-center">
                @if (Route::has('login'))
                <nav class="flex justify-end space-x-4">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black dark:text-white ring-1 ring-transparent transition hover:text-black/70 dark:hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Dashboard
                    </a>
                    @else
                    
                    @if (Route::has('register'))
                    
                    @endif
                    @endauth
                </nav>
                @endif
            </header>
            <main >
                <x-guest-layout>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    
              
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-4">
                            <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700 dark:text-gray-300" />
                            <input id="email" class="border w-full border-black dark:border-black dark:rounded-md p-2 mt-1 bg-white text-black dark:text-black" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600 dark:text-red-400" />
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <x-input-label for="password" :value="__('Password')" class="block text-lg font-medium text-gray-700 dark:text-gray-300" />
                            <input id="password" class="border w-full dark:border-black dark:rounded-md p-2 mt-1 bg-white text-black dark:text-black" type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600 dark:text-red-400" />
                        </div>

                        <!-- Remember Me and Forgot Password -->
                        <div class="mb-4 flex justify-between items-center">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600  focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif
                        </div>

                        <div class="flex items-center justify-evenly">
                            <a href="{{ route('register') }}" class="ms-3 bg-white text-black border border-black p-2 w-36 hover:bg-red-500 text-center">
                        Register
                    </a>
                            <button class="ms-3 bg-white text-black border border-black p-2 w-36 hover:bg-red-500">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>
                </x-guest-layout>
            </main>
        </div>
    </div>
</body>

</html>

