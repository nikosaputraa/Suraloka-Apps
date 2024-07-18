@extends('layouts.app')
@section('content')

<section
    class="bg-auto w-full h-full lg:h-screen md:h-screen sm:h-screen bg-center bg-no-repeat flex justify-center items-center"
    style="background-image: url('{{ asset('image/landing/background-main.jpeg') }}'); background-size: cover;">
    <div class="px-4 mx-auto max-w-full text-center py-60 lg:py-[130px] md:py-28 sm:py-12 justify-center items-center">
        <p
            class="text-amber-400 font-carter-one text-4xl sm:text-5xl md:text-7xl lg:text-9xl leading-tight mt-5 md:mb-2 lg:mb-2">
            SURALOKA</p>
        <span
            class="text-white font-baloo-2-bold text-xl sm:text-3xl md:text-4xl lg:text-5xl block mb-8 md:mb-10">INTERACTIVE
            ZOO</span>
        <div class="flex flex-col items-center">
            <span class="text-white font-baloo-2-semibold text-lg md:text-xl mb-2 md:mb-3">Plan Your Visit</span>
            <div class="h-auto bg-amber-400 rounded-full flex flex-row items-center justify-between md:w-1/2 lg:w-2/3">
                <div class="px-4 py-3 flex items-center space-x-4 w-full">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="w-4 h-4 text-emerald-800 dark:text-emerald-800" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker datepicker-orientation="bottom right" type="text"
                            class="bg-gray-50 border border-gray-300 font-baloo-2-bold text-emerald-800 focus:ring-emerald-500 focus:border-emerald-500 block rounded-full ps-3 py-3.5 w-full placeholder-gray-400 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-emerald-500 dark:focus:border-emerald-500"
                            value="tanggal">
                    </div>
                    <a href="#" class="ml-4">
                        <button
                            class="bg-emerald-800 hover:bg-emerald-900 text-white font-baloo-2-bold rounded-full px-6 py-3">Book
                            Now!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section opening times -->
<section>
    <div class="max-w-full h-screen px-6 sm:px-10 md:px-16 lg:px-24 py-16 flex flex-col sm:flex-row items-center justify-between"
        id="plan-your-visit">
        <div class="w-full flex flex-col sm:gap-y-8 sm:w-full md:gap-y-12 lg:gap-y-16">
            <p class="font-baloo-2-bold text-3xl">Opening Times</p>
            <div class="bg-amber-400 rounded-xl p-4 sm:p-8 mt-4 gap-y-4 flex flex-col items-center justify-between sm:w-80 md:w-96 lg:w-full"
                style="height: 252px;">
                <p class="font-baloo-2-bold text-2xl">Opening Times</p>
                <div class="flex flex-col items-center">
                    <p class="text-emerald-800 font-baloo-2-bold text-4xl">07:00 - 17:00</p>
                    <span class="text-emerald-800 font-baloo-2-bold text-2xl">Open</span>
                </div>
                <div class="flex flex-row items-center gap-x-3">
                    <a href="#">
                        <button
                            class="py-2 px-4 sm:py-3 sm:px-6 bg-emerald-800 hover:bg-emerald-900 rounded-full font-baloo-2-bold text-white">Opening
                            Times</button>
                    </a>
                    <a href="#">
                        <button
                            class="py-2 px-4 sm:py-3 sm:px-6 bg-white hover:bg-slate-100 rounded-full font-baloo-2-bold text-emerald-800">Get
                            Your Tickets</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex w-full mt-8 sm:mt-0">
            <img class="w-auto h-auto" src="{{ asset('image/landing/suraloka-world.svg') }}" alt="Suraloka">
        </div>
    </div>

    <!-- our collections -->

    <div class="max-w-full h-screen px-6 sm:px-10 md:px-16 lg:px-24 flex flex-col sm:flex-row items-center justify-between"
        id="our-collections">
        <div class="w-full flex flex-col pt-16 sm:w-full sm:gap-y-8">
            <p class="font-baloo-2-bold text-3xl">What's In Here</p>
            <div class="flex flex-col sm:flex-row lg:gap-x-8 justify-between items-center mb-12 sm:mb-0 mt-4">
                <div class="w-full sm:max-w-[355px] mb-12 sm:mb-0">
                    <div class="flex flex-col items-center justify-center">
                        <img class="w-full ring-8 ring-slate-200 rounded-3xl"
                            src="{{ asset('image/landing/collection-hewan.png') }}">
                        <div
                            class="-mt-8 bg-amber-400 rounded-[24px] mb-[0px] px-8 py-4 gap-y-4 flex flex-col items-center justify-between w-[90%]">
                            <p class="font-baloo-2-bold text-2xl text-center">Animals</p>
                            <p class="font-baloo-2 text-center">See our animals you can learn about
                                them here as well</p>
                            <a href="{{ route('animals') }}">
                                <button
                                    class="bg-emerald-800 hover:bg-emerald-900 text-white font-baloo-2-bold rounded-[8px] text-[16px] px-[30px] py-[6px] flex flex-row items-center">
                                    See The Animals <span class="iconify ml-1" data-icon="ph:arrow-right-bold"
                                        data-inline="false" style="font-size: 20px;"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full sm:max-w-[355px] mb-12 sm:mb-0">
                    <div class="flex flex-col items-center justify-center">
                        <img class="w-full ring-8 ring-slate-200 rounded-3xl"
                            src="{{ asset('image/landing/collection-tumbuhan.png') }}">
                        <div
                            class="-mt-8 bg-amber-400 rounded-[24px] mb-[0px] px-8 py-4 gap-y-4 flex flex-col items-center justify-between w-[90%]">
                            <p class="font-baloo-2-bold text-2xl text-center">Plants</p>
                            <p class="font-baloo-2 text-center">We have plants too! Have take a look at
                                our plants collection</p>
                            <a href="{{ route('plants') }}">
                                <button
                                    class="bg-emerald-800 hover:bg-emerald-900 text-white font-baloo-2-bold rounded-[8px] text-[16px] px-[30px] py-[6px] flex flex-row items-center">
                                    See The Plants <span class="iconify ml-1" data-icon="ph:arrow-right-bold"
                                        data-inline="false" style="font-size: 20px;"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full sm:max-w-[355px] mb-12 sm:mb-0">
                    <div class="flex flex-col items-center justify-center">
                        <img class="w-full ring-8 ring-slate-200 rounded-3xl"
                            src="{{ asset('image/landing/shop.png') }}">
                        <div
                            class="-mt-8 bg-amber-400 rounded-[24px] mb-[0px] px-8 py-4 gap-y-4 flex flex-col items-center justify-between w-[90%]">
                            <p class="font-baloo-2-bold text-2xl text-center">Shop</p>
                            <p class="font-baloo-2 text-center">Our merchandise can be bought here
                                online. Go check them out!</p>
                            <a href="{{ route('shop') }}">
                                <button
                                    class="bg-emerald-800 hover:bg-emerald-900 text-white font-baloo-2-bold rounded-[8px] text-[16px] px-[30px] py-[6px] flex flex-row items-center">
                                    Get Merchandise <span class="iconify ml-1" data-icon="ph:arrow-right-bold"
                                        data-inline="false" style="font-size: 20px;"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Testimoni -->
    <div class="max-w-full h-screen px-24 pt-16 flex flex-col items-center justify-center" id="our-memories">
        <p class="w-full font-baloo-2-bold text-3xl" style="margin-bottom: 48px">What People Says About Our Zoo?</p>
        <div id="default-carousel" class="relative w-full bg-white lg:w-full sm:w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute block w-6xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="flex flex-row justify-between items-center gap-x-4 px-24">
                            <!-- Card 1 -->
                            <div class="flex flex-col items-center justify-between shadow-lg ring-1 ring-slate-200 rounded-[37px] py-[37px] px-[50px]"
                                style="width: 574px; height: 280px;">
                                <img src="{{ asset('image/landing/profile-foto.jpg') }}"
                                    class="rounded-full object-cover" style="width: 93px; height: 93px;"></img>
                                <div class="flex flex-col items-center gap-y-4">
                                    <p class="text-emerald-800 font-baloo-2-bold text-2xl">Niko Saputra</p>
                                    <p class=" font-baloo-2-semibold text-[16px] text-center">Suraloka tempat yang
                                        menyengkan untuk
                                        bersantai dan rekreasi untuk keluarga.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute block w-6xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="flex flex-row justify-between items-center gap-x-4 px-24">
                            <!-- Card 1 -->
                            <div class="flex flex-col items-center justify-between shadow-lg ring-1 ring-slate-200 rounded-[37px] py-[37px] px-[50px]"
                                style="width: 574px; height: 280px;">
                                <img src="{{ asset('image/landing/profile-foto.jpg') }}"
                                    class="rounded-full object-cover" style="width: 93px; height: 93px;"></img>
                                <div class="flex flex-col items-center gap-y-4">
                                    <p class="text-emerald-800 font-baloo-2-bold text-2xl">Denur Anwar</p>
                                    <p class=" font-baloo-2-semibold text-[16px] text-center">Suraloka tempat yang
                                        menyengkan untuk
                                        bersantai dan rekreasi untuk keluarga.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute block w-6xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="flex flex-row justify-between items-center gap-x-4 px-24">
                            <!-- Card 1 -->
                            <div class="flex flex-col items-center justify-between shadow-lg ring-1 ring-slate-200 rounded-[37px] py-[37px] px-[50px]"
                                style="width: 574px; height: 280px;">
                                <img src="{{ asset('image/landing/profile-foto.jpg') }}"
                                    class="rounded-full object-cover" style="width: 93px; height: 93px;"></img>
                                <div class="flex flex-col items-center gap-y-4">
                                    <p class="text-emerald-800 font-baloo-2-bold text-2xl">Miqoilla Daffa</p>
                                    <p class=" font-baloo-2-semibold text-[16px] text-center">Suraloka tempat yang
                                        menyengkan untuk
                                        bersantai dan rekreasi untuk keluarga.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute block w-6xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="flex flex-row justify-between items-center gap-x-4 px-24">
                            <!-- Card 1 -->
                            <div class="flex flex-col items-center justify-between shadow-lg ring-1 ring-slate-200 rounded-[37px] py-[37px] px-[50px]"
                                style="width: 574px; height: 280px;">
                                <img src="{{ asset('image/landing/profile-foto.jpg') }}"
                                    class="rounded-full object-cover" style="width: 93px; height: 93px;"></img>
                                <div class="flex flex-col items-center gap-y-4">
                                    <p class="text-emerald-800 font-baloo-2-bold text-2xl">Naufal</p>
                                    <p class=" font-baloo-2-semibold text-[16px] text-center">Suraloka tempat yang
                                        menyengkan untuk
                                        bersantai dan rekreasi untuk keluarga.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute block w-6xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="flex flex-row justify-between items-center gap-x-4 px-24">
                            <!-- Card 1 -->
                            <div class="flex flex-col items-center justify-between shadow-lg ring-1 ring-slate-200 rounded-[37px] py-[37px] px-[50px]"
                                style="width: 574px; height: 280px;">
                                <img src="{{ asset('image/landing/profile-foto.jpg') }}"
                                    class="rounded-full object-cover" style="width: 93px; height: 93px;"></img>
                                <div class="flex flex-col items-center gap-y-4">
                                    <p class="text-emerald-800 font-baloo-2-bold text-2xl">Rizky</p>
                                    <p class=" font-baloo-2-semibold text-[16px] text-center">Suraloka tempat yang
                                        menyengkan untuk
                                        bersantai dan rekreasi untuk keluarga.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse bg-white">
                <div
                    class="w-3 h-3 rounded-full bg-emerald-200 ring-1 ring-emerald-800 flex items-center justify-center">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                </div>
                <div
                    class="w-3 h-3 rounded-full bg-emerald-200 ring-1 ring-emerald-800 flex items-center justify-center">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                </div>
                <div
                    class="w-3 h-3 rounded-full bg-emerald-200 ring-1 ring-emerald-800 flex items-center justify-center">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <div
                    class="w-3 h-3 rounded-full bg-emerald-200 ring-1 ring-emerald-800 flex items-center justify-center">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                </div>
                <div
                    class="w-3 h-3 rounded-full bg-emerald-200 ring-1 ring-emerald-800 flex items-center justify-center">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
            </div>



            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-emerald-800 dark:bg-gray-800 group-hover:bg-emerald-900 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-emerald-800 dark:bg-gray-800 group-hover:bg-emerald-900 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>

        </div>
    </div>

    <!-- Suraloka Map -->
    <div
        class="max-w-full px-6 sm:px-10 md:px-16 lg:px-24 py-16 flex flex-col sm:flex-row items-center justify-between">
        <!-- Gambar Suraloka Map -->
        <img src="{{ asset('image/landing/suraloka-map.png') }}"
            class="w-full lg:w-[300px] sm:max-w-[506px] mb-8 sm:mb-0" alt="Suraloka Map">

        <!-- Informasi Suraloka Map -->
        <div class="flex flex-col items-center sm:items-start text-center sm:text-left max-w-full sm:max-w-[549px]">
            <p class="font-baloo-2-bold text-3xl sm:text-5xl text-amber-400 mb-4">Suraloka Map</p>
            <p class="font-baloo-2-semibold text-base sm:text-lg">Find detailed information for each animal area you
                want to visit, interactive stations, food locations, toilets and other facilities throughout the
                Suraloka Interactive Zoo area.</p>
            <a href="{{ route('download') }}" class="mt-4 sm:mt-8">
                <button
                    class="bg-emerald-800 hover:bg-emerald-900 rounded-[8px] px-6 sm:px-9 py-2 sm:py-3 flex items-center justify-center font-baloo-2-bold text-white">
                    Download Suraloka Map
                    <span class="iconify ml-2 text-white" data-icon="icon-park-outline:download-one" data-inline="false"
                        style="font-size: 20px;"></span>
                </button>
            </a>
        </div>
    </div>


    <!-- Suraloka Get Ticket -->
    

    <div class="max-w-full px-24 pt-16 pb-[130px] flex flex-col gap-[32px] items-center">

        <p class="font-baloo-2-bold text-[36px]">SURALOKA INTERACTIVE ZOO</p>

        <div class="rounded-[50px] px-[73px] py-[67px] flex flex-row items-center gap-[36px] justify-between"
            style="background-image: url('{{ asset('image/landing/bg-cta.svg') }}'); background-size: cover; width: 100%; height: 228px;">
            <p class="font-baloo-2-semibold text-white text-[24px]">Get Your Tickets now and explore all our Events in
                Suraloka Interactive Zoo</p>
            <div class="flex flex-row items-center gap-[20px]">
                <a href="#">
                    <button
                        class="flex flex-row items-center justify-center bg-amber-400 hover:bg-amber-500 rounded-[24px] px-[30px] py-[11px] font-baloo-2-bold text-emerald-800"
                        style="width: 200px; height: 53px;">
                        Get Ticket <span class="iconify ml-2 text-emerald-800" data-icon="ph:arrow-right-bold"
                            data-inline="false" style="font-size: 20px;"></span>
                    </button>
                </a>
                <a href="#">
                    <button
                        class="ring-1 ring-white hover:bg-emerald-900 hover:ring-emerald-900 hover:text-amber-400 rounded-[24px] px-[48px] py-[11px] font-baloo-2-bold text-white"
                        style="width: 200px; height: 53px;">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>

    </div>


</section>


@endsection