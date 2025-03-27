<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        @vite(['resources/js/app.js'])

    </head>
    <section style="
        background-image: url(/images/Login.jpg);
        background-size: cover;
        background-position: bottom;
        background-repeat: no-repeat;
        width: 100vw;
        height: 100vh;"
        class="bg-center min-h-screen w-full">

        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-2xl shadow-[0_0_15px_2px_rgba(255,255,255,0.6)] dark:bg-gray-800 md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 mx-5">

                    <!-- Header -->

                    <div class="flex items-center justify-center flex-col space-y-2">
                    <h1 class="font-bold leading-tight tracking-tight mt-4 mb-2 text-transparent bg-clip-text bg-gradient-to-b from-[#27A1FF] to-[#3285D8] md:text-4xl text-2xl">
                        Masuk
                    </h1>

                        <p class="text-sm text-center">Inputkan kode dan kata sandi untuk melanjutkan.</p>
                    </div>

                    <!-- Form Login -->

                    <form class="space-y-4 md:space-y-4" action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username" class="bg-white text-sm border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Inputkan username" required>
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata sandi</label>
                            <input type="password" name="password" id="password" placeholder="Inputkan kata sandi"
                                   class="bg-white border border-gray-300 text-sm text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 pr-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   required>
                        </div>

                        <div class="flex justify-center">
                            <button type="submit" class="text-white mt-2 mb-2 bg-gradient-to-b from-[#7CABCF] to-[#3285D8] hover:from-primary-600 hover:to-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-7 py-2.5 text-center dark:from-primary-600 dark:to-primary-800 dark:hover:from-primary-700 dark:hover:to-primary-900 dark:focus:ring-primary-800 shadow-[0px_5px_15px_rgba(0,0,0,0.3)]">
                                Masuk
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        </section>
</html>
