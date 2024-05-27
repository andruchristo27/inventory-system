<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="bg-center bg-no-repeat bg-cover" style="background-image:linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url(bg2.jpg); min-height: 100vh;">
        <div class="relative flex justify-center items-center min-h-screen selection:bg-red-500 selection:text-white">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-center">
                    <div class="text-center text-2xl font-bold text-gray-800 dark:text-gray-400 sm:text-center">
                        SISTEM INVENTARIS
                    </div>
                </div>
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="/add" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col items-center motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>
    
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">Data Inventaris</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                                    Klik untuk membuka data inventaris anda
                                </p>
                            </div>
                        </a>
                        <a href="/scann" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-col items-center motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>
    
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">Pindai</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                                    Klik untuk memindai datai ventaris anda
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-center text-sm text-gray-800 dark:text-gray-400 sm:text-center hover:text-gray-700 dark:hover:text-gray-300">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
