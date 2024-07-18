<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    @vite(['resources/css/style.css','resources/js/scripts.js'])
    <link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}" />
    <title>Admin Suraloka</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-gray-100">
    <!-- start navbar -->
    <div class="fixed w-full z-50 md:fixed md:w-full md:top-0 md:z-50 flex flex-row flex-wrap items-center bg-white px-6 py-3 border-b border-gray-300">

        <!-- logo -->
        <div class="flex-none w-56 flex flex-row items-center">
            <img src="{{ asset('image/favicon.png') }}" class="w-10 flex-none">
            <strong class="capitalize ml-4 flex-1">Suraloka Admin</strong>
        </div>
        <!-- end logo -->

        <!-- navbar content toggle -->

        <!-- end navbar content toggle -->

        <!-- navbar content -->
        <div id="navbar"
            class="animated md:hidden md:fixed md:top-0 md:w-full md:right-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
            <!-- left -->


            <!-- right -->
            <div class="md:w-full w-full block flex-row items-center right-0 top-0 justify-end">

                <!-- user -->
                <div class="dropdown">

                    <a class="focus:outline-none focus:shadow-outline items-center">
                        <div class="ml-2 capitalize flex justify-end right-0">
                            <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">
                                {{ Auth::user()->name }}</h1>
                            <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                        </div>
                    </a>

                    <div
                        class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 mr-6 w-40 mt-5 py-2 animated faster">

                        <form id="logoutForm" action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button
                                class="px-4 py-2 w-full capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                                type="submit">
                                <i class="fad fa-user-times text-xs mr-1"></i>
                                log out
                            </button>
                        </form>
                        <!-- item -->

                        <!-- end item -->

                    </div>
                </div>
                <!-- end user -->



            </div>
            <!-- end right -->
        </div>
        <!-- end navbar content -->

    </div>
    <!-- end navbar -->