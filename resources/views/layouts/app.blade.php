<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Suraloka Interactive Zoo</title>
    <link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

<body>
    <div class="fixed z-50 w-full bg-emerald-800 md:text-sm">
        <div class="max-w-full mx-auto px-4 sm:px-2 md:px-8 lg:px-12 py-2 flex items-center justify-between">
            <div class="flex items-center">
                <a href="{{ route('/') }}">
                    <div class="w-12 h-12">
                        <img src="{{ asset('image/landing/logo-suraloka.png') }}" alt="Logo Suraloka">
                    </div>
                </a>

                <!-- Hamburger Menu untuk Mobile -->
                <button id="mobileMenuButton" class="ml-3 block md:hidden focus:outline-none">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <ul id="navigationMenu"
                class="hidden md:flex flex-row gap-x-8 text-white md:ml-4 md:items-center md:gap-x-8">
                <li>
                    <a href="{{ route('/') }}"
                        class="font-baloo-2-medium {{ request()->is('/') ? 'font-baloo-2-bold text-amber-400' : 'hover:text-amber-400' }}">Beranda</a>
                </li>
                <li>
                    <a href="#plan-your-visit"
                        class="font-baloo-2-medium {{ request()->is('plan') ? 'font-baloo-2-bold text-amber-400' : 'hover:text-amber-400' }}">Plan
                        Your Visit</a>
                </li>
                <li>
                    <a href="#our-collections"
                        class="font-baloo-2-medium {{ request()->is('our-collections') ? 'font-baloo-2-bold text-amber-400' : 'hover:text-amber-400' }}">Our
                        Collections</a>
                </li>
                <li>
                    <a href="#our-memories"
                        class="font-baloo-2-medium {{ request()->is('zoo-memories') ? 'font-baloo-2-bold text-amber-400' : 'hover:text-amber-400' }}">Zoo
                        Memories</a>
                </li>
                <li>
                    <a href="{{ route('shop') }}"
                        class="font-baloo-2-medium {{ request()->is('shop') ? 'font-baloo-2-bold text-amber-400' : 'hover:text-amber-400' }}">Shop</a>
                </li>
                <li>
                    <a href="#about-us"
                        class="font-baloo-2-medium {{ request()->is('about-us') ? 'font-baloo-2-bold text-amber-400' : 'hover:text-amber-400' }}">About
                        Us</a>
                </li>
            </ul>
            <div class="flex items-center gap-x-4">
                <a href="{{  auth()->check() ? route('page.cart') : route('login.shop') }}" class="relative text-white hover:text-amber-400">
                    <span class="iconify" data-icon="ic:outline-shopping-cart" data-inline="false"
                        style="font-size: 24px;"></span>
                    <div id="cart-count"
                        class="absolute top-0 right-0 flex items-center justify-center w-3 h-3 font-medium text-white bg-red-500 border-1 border-white rounded"
                        style="font-size: 6px;">
                        0
                    </div>
                </a>
                @if (Auth::check() && Auth::user()->role === 'user')
                <!-- Jika pengguna sudah login -->
                <div class="relative">
                    <button
                        class="bg-amber-400 text-emerald-800 hover:bg-amber-500 py-2 px-6 rounded-full flex flex-row items-center border-0">
                        <span class="iconify" data-icon="ph:user-bold" data-inline="false"
                            style="font-size: 20px;"></span>
                        <p class="font-baloo-2-semibold text-emerald-800 px-2">{{ Auth::user()->name }}</p>
                    </button>
                </div>
                <div class="relative">
                    <div>
                        <button class="flex items-center text-white hover:text-amber-400 focus:outline-none"
                            onclick="toggleDropdown()">
                            <span class="mr-1 font-baloo-2-semibold">EN</span>
                            <span class="iconify" data-icon="mingcute:down-line" data-inline="false"
                                style="font-size: 20px;"></span>
                        </button>
                    </div>

                    <div class="absolute left-0 mt-2 w-20 bg-white rounded-md shadow-lg z-10 hidden" id="dropdownMenu">
                        <ul class="py-1">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-green-200 font-baloo-2-semibold">ID</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-green-200 font-baloo-2-semibold">EN</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <form id="logoutForm" action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button class="font-baloo-2-semibold text-amber-400">Logout</button>
                    </form>
                </div>

                @else
                <!-- Jika pengguna belum login -->
                <a href="{{ route('login') }}">
                    <button
                        class="bg-amber-400 text-emerald-800 hover:bg-amber-500 py-2 px-6 rounded-full flex flex-row items-center border-0">
                        <span class="iconify" data-icon="ph:user-bold" data-inline="false"
                            style="font-size: 20px;"></span>
                        <p class="font-baloo-2-semibold text-emerald-800 px-2">Login</p>
                    </button>
                </a>
                <div class="relative">
                    <div>
                        <button class="flex items-center text-white hover:text-amber-400 focus:outline-none"
                            onclick="toggleDropdown()">
                            <span class="mr-1 font-baloo-2-semibold">EN</span>
                            <span class="iconify" data-icon="mingcute:down-line" data-inline="false"
                                style="font-size: 20px;"></span>
                        </button>
                    </div>

                    <div class="absolute left-0 mt-2 w-20 bg-white rounded-md shadow-lg z-10 hidden" id="dropdownMenu">
                        <ul class="py-1">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-green-200 font-baloo-2-semibold">ID</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-green-200 font-baloo-2-semibold">EN</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <x-scroll-up-button />

    <main>
        @yield('content')
    </main>

    <!-- Scripts section -->
    @stack('scripts')

    <footer class="max-w-full bg-emerald-800 items-center" id="about-us">
        <div class="max-w-6xl mx-auto flex flex-col py-[66px] justify-between">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col gap-[16px]" style="width: 428px;">
                    <img src="{{ asset('image/landing/logo-suraloka.png') }}" alt="Logo Suraloka"
                        style="width: 120px; height: 120px;">
                    <div class="flex flex-col gap-[8px] font-baloo-2-medium text-amber-400 text-[14px]">
                        <p>Jl. Boyong No.97, Kaliurang, Hargobinangun, Kec. Pakem, Kabupaten
                            Sleman, Daerah Istimewa Yogyakarta 55585</p>
                        <p>+62 812-7610-9997</p>
                        <p>info@suralokazoo.com</p>
                    </div>
                </div>
                <!-- kolom 1 -->
                <div class="flex flex-col gap-[40px]">
                    <div class="flex flex-col gap-[8px] font-baloo-2-medium text-amber-400 text-[14px]">
                        <a href="#">
                            <p class="hover:text-white">Home</p>
                        </a>
                        <a href="#">
                            <p class="hover:text-white">About Us</p>
                        </a>
                        <a href="#">
                            <p class="hover:text-white">Gift Shop</p>
                        </a>
                        <a href="#">
                            <p class="hover:text-white">Restaurant</p>
                        </a>
                    </div>
                    <div class="flex flex-col gap-[8px] text-amber-400 text-[14px]">
                        <p class="font-baloo-2-bold underline decoration-amber-400">Update</p>
                        <a href="#">
                            <p class="font-baloo-2-medium hover:text-white">News</p>
                        </a>
                        <a href="#">
                            <p class="font-baloo-2-medium hover:text-white">Conversations</p>
                        </a>
                    </div>
                </div>

                <!-- kolom 2 -->
                <div class="flex flex-col gap-[40px]">
                    <div class="flex flex-col gap-[8px] text-amber-400 text-[14px]">
                        <p class="font-baloo-2-bold underline decoration-amber-400">Our Collections</p>
                        <a href="#">
                            <p class="font-baloo-2-medium hover:text-white">Animals</p>
                        </a>
                        <a href="#">
                            <p class="font-baloo-2-medium hover:text-white">Plants</p>
                        </a>
                    </div>
                    <div class="flex flex-col gap-[8px] text-amber-400 text-[14px]">
                        <p class="font-baloo-2-bold underline decoration-amber-400">Help?</p>
                        <a href="#">
                            <p class="font-baloo-2-medium hover:text-white">Contact Us</p>
                        </a>
                        <a href="#">
                            <p class="font-baloo-2-medium hover:text-white">FAQs</p>
                        </a>
                    </div>
                </div>

                <!-- kolom 3 -->
                <div class="flex flex-col gap-[40px]">
                    <div class="flex flex-col gap-[8px] text-amber-400 text-[14px]">
                        <p class="font-baloo-2-bold underline decoration-amber-400">Experiences & Activities</p>
                        <a href="#">
                            <p class="font-baloo-2-medium hover:text-white">Interactive Activities</p>
                        </a>
                        <a href="#">
                            <p class="font-baloo-2-medium hover:text-white">Education</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex max-w-6xl flex-col justify-between" style="margin-top: 36px;">
                <div class="flex flex-row justify-between items-center">
                    <div class="flex flex-row gap-x-[16px]">
                        <a href="#">
                            <p class="text-amber-400 font-baloo-2-bold hover:text-white text-[14px]">Privacy Policy</p>
                        </a>
                        <a href="#">
                            <p class="text-amber-400 font-baloo-2-bold hover:text-white text-[14px]">Terms & Conditions
                            </p>
                        </a>
                    </div>
                    <div class="flex flex-row items-center gap-[20px]">
                        <a href="#">
                            <span class="iconify text-amber-400 hover:text-white" data-icon="ri:youtube-fill"
                                data-inline="false" style="font-size: 32px;"></span>
                        </a>
                        <a href="#">
                            <span class="iconify text-amber-400 hover:text-white" data-icon="fe:facebook"
                                data-inline="false" style="font-size: 24px;"></span>
                        </a>
                        <a href="#">
                            <span class="iconify text-amber-400 hover:text-white" data-icon="lucide:instagram"
                                data-inline="false" style="font-size: 24px;"></span>
                        </a>

                    </div>

                </div>
                <hr class="border-[1.25px] border-amber-400 mt-[12px]">
                <p class="mt-[12px] font-baloo-2-semibold text-[14px] text-amber-400">
                    © Copyright 2024 Suraloka Interactive Zoo. All rights reserved.
                </p>
            </div>

        </div>
    </footer>


<script>
    function toggleDropdown() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('hidden');
    }
</script>
<script>
    // Mengatur nilai input tanggal menjadi tanggal hari ini
    document.getElementById('tanggal').valueAsText = new Date();
</script>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<script>
    // Function untuk toggle menu pada mobile
    var mobileMenuButton = document.getElementById('mobileMenuButton');
    mobileMenuButton.addEventListener('click', function() {
        var navigationMenu = document.getElementById('navigationMenu');
        navigationMenu.classList.toggle('hidden');
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mengambil user_id dari data Blade atau dari sesi Laravel
        let userId = {{ Auth::id() }};
        
        // Menggunakan route Laravel untuk mengambil jumlah cart
        let cartRoute = "{{ route('cart.count', ['user_id' => ':userId']) }}";
        cartRoute = cartRoute.replace(':userId', userId);

        // Lakukan request AJAX
        fetch(cartRoute)
            .then(response => response.json())
            .then(data => {
                // Mengambil jumlah item cart dari respons JSON
                let cartCount = data.cartCount;

                // Memperbarui tampilan HTML dengan jumlah item cart
                document.getElementById('cart-count').textContent = cartCount;
            })
            .catch(error => {
                console.error('Error fetching cart count:', error);
            });
    });
</script>



</body>

</html>