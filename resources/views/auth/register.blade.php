<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Register Akun Suraloka</title>
    <link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap');

    /* Font Baloo 2 Regular */
    .font-baloo-2 {
        font-family: 'Baloo 2', sans-serif;
    }

    /* Font Baloo 2 Medium */
    .font-baloo-2-medium {
        font-family: 'Baloo 2', sans-serif;
        font-weight: 500;
    }

    /* Font Baloo 2 SemiBold */
    .font-baloo-2-semibold {
        font-family: 'Baloo 2', sans-serif;
        font-weight: 600;
    }

    /* Font Baloo 2 Bold */
    .font-baloo-2-bold {
        font-family: 'Baloo 2', sans-serif;
        font-weight: 700;
    }

    /* Font Baloo 2 ExtraBold */
    .font-baloo-2-extrabold {
        font-family: 'Baloo 2', sans-serif;
        font-weight: 800;
    }
    </style>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Carter+One&display=swap');

    .font-carter-one {
        font-family: 'Carter One', sans-serif;
    }

    .font-carter-one-bold {
        font-family: 'Carter One', sans-serif;
        font-weight: 600;
    }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</head>

<body class="bg-slate-100 flex items-center justify-center">
    <div class="relative w-full h-full px-6 sm:px-10 md:px-64 py-auto sm:py-10">
        <a href="{{ route('login') }}">
            <button
                class="bg-emerald-800 mb-3 hover:bg-emerald-900 text-white font-baloo-2-bold rounded-[8px] text-base px-3 py-2 flex items-center">
                <span class="iconify mr-1" data-icon="ph:arrow-left-bold" data-inline="false"
                    style="font-size: 20px;"></span>Back
            </button>
        </a>
        <div class="flex flex-col sm:flex-row justify-center sm:h-auto">
            <div class="flex justify-center w-full md:w-full sm:w-auto mb-6 sm:mb-0">
                <img class="w-full md:w-full h-auto max-h-[400px] sm:max-h-full" src="{{ asset('image/login.png') }}" alt="Auth">
            </div>

            <div
                class="flex flex-col w-full px-4 sm:px-6 md:px-8 py-6 sm:py-8 bg-white rounded-tr-[24px] rounded-br-[24px]">
                <form action="{{ route('auth.register') }}" method="POST">
                    @csrf
                    <p class="font-bold text-2xl mb-6">Register Akun</p>
                    <div class="mb-4">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" id="username" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan username" required />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            address</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan email" required />
                    </div>
                    <div class="mb-4">
                        <label for="no-whatsapp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                            Whatsapp</label>
                        <input type="text" id="no-whatsapp" name="no_whatsapp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan no whatsapp" required />
                    </div>
                    <div class="mb-4">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan password" required />
                    </div>
                    <div class="mb-6">
                        <label for="konfirmasi-password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi
                            Password</label>
                        <input type="password" id="konfirmasi-password" name="confirm-password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Konfirmasi password" required />
                    </div>

                    <button type="submit"
                        class="w-full mb-2 text-white bg-amber-400 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar</button>
                </form>
                <a href="#">
                    <button
                        class="w-full flex justify-center items-center bg-gray-50 border border-gray-300 text-gray-900 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="iconify mr-2" data-icon="flat-color-icons:google" data-inline="false"
                            style="font-size: 20px;"></span> Register with Google
                    </button>
                </a>
                <div class="mt-3 w-full flex justify-center items-center">
                    <p class="text-sm font-medium mr-2">Sudah punya akun?</p><span><a
                            class="text-sm font-medium text-amber-400 hover:text-amber-500"
                            href="{{ route('login') }}">Login</a></span>
                </div>
            </div>

        </div>
    </div>

</body>

</html>