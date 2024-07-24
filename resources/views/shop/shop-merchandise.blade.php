@extends('layouts.app')
@section('content')

<section class="w-full">
    <div class="relative max-w-full bg-white">
        <div class="flex flex-col pt-20 pb-16 items-center justify-center max-w-6xl mx-auto">
            <div class="flex flex-row w-full justify-center items-center mb-[20px]">
                <p class="font-baloo-2-bold text-[32px]">Merchandise Shop</p>
            </div>

            <div id="default-carousel" class="relative max-w-full md:w-full h-[400px]" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[500px] overflow-hidden md:h-[400px]">
                    <!-- Item 1 -->
                    <div class="rounded-[8px] hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('image/shop/bg-shop.png') }}"
                            class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                        <div class="text-white inset-0 absolute flex flex-col items-center justify-center">
                            <p class="text-amber-400 text-[56px] font-baloo-2-bold">Welcome to Our Collections!</p>
                            <p class="text-white text-[24px] font-baloo-2 text-center mb-[56px]" style="width: 559px;">
                                Dapatkan
                                informasi
                                lengkap mengenai koleksi hewan yang ada di Suraloka Zoo</p>
                            <a href="#our-product">
                                <button
                                    class="py-[12px] px-[80px] bg-amber-400 hover:bg-amber-500 rounded-full font-baloo-2-bold text-emerald-800 text-[16px]">Belanja
                                    Sekarang!</button>
                            </a>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="rounded-[8px] hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('image/shop/bg-shop.png') }}"
                            class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="rounded-[8px] hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('image/shop/bg-shop.png') }}"
                            class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="rounded-[8px] hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('image/shop/bg-shop.png') }}"
                            class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="rounded-[8px] hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('image/shop/bg-shop.png') }}"
                            class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60  group-focus:outline-none">
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
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:outline-none">
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
    </div>
</section>

<section>
    <div class="w-full pb-[60px]">
        <div class="flex justify-center mx-auto mb-[20px]" id="our-product">
            <p class="font-baloo-2-bold text-[32px]">Our Product</p>
        </div>
        <div class="w-6xl lg:max-w-6xl justify-center mx-auto">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col">
                    <p class="font-baloo-2-semibold text-[20px]">Category</p>
                    <div class="flex items-center justify-center py-3 md:py-3 flex-row ">

                        <div class="flex mb-3">
                            <a href="{{ route('shop') }}" class="text-emerald-800 hover:text-white border border-emerald-800 bg-white hover:bg-emerald-900 focus:ring-2 focus:outline-none focus:ring-emerald-300 rounded-full font-baloo-2-bold px-5 py-2.5 text-center me-3 mb-3 dark:border-emerald-800 dark:text-emerald-800 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">Semua</a>
                            @foreach($categories as $category)
                                <a href="{{ route('shop', ['category' => $category->id]) }}" class="text-emerald-800 hover:text-white border border-emerald-800 bg-white hover:bg-emerald-900 focus:ring-2 focus:outline-none focus:ring-emerald-300 rounded-full font-baloo-2-bold px-5 py-2.5 text-center me-3 mb-3 dark:border-emerald-800 dark:text-emerald-800 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    
                    </div>
                </div>
                <div class="flex flex-col">
                    <p class="font-baloo-2-semibold text-[20px] mb-[10px]">Filter</p>

                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-emerald-800 bg-white hover:text-white hover:bg-emerald-800 ring-emerald-800 ring-1 focus:ring-2 focus:outline-none focus:ring-emerald-800 font-baloo-2-bold rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">Default Sorting <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Default
                                    Sorting</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Price
                                    Low-High</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Price
                                    High-Low</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="w-full flex items-center justify-center pb-[60px]">
            <div class="max-w-6xl">
                <div class="grid grid-cols-4 md:grid-cols-4 gap-5">
                    <!-- Content Items -->
                    @foreach($product as $p)

                    <div>
                        <div class="h-auto max-w-full rounded-lg bg-white shadow-lg shadow-slate-200 px-4 py-4">
                            <div class="mb-2">
                                @if($p->image_banner)
                                <img class="w-full h-full" src="{{ asset('storage/' . $p->image_banner) }}" alt="{{ $p->image_banner }}">
                                @else
                                <p>No Image</p>
                                @endif
                            </div>

                            <p class="font-baloo-2-bold text-16 mb-1">{{ $p->nama_product }}</p>
                            <p class="font-baloo-2-semibold text-14 text-red-500"> Rp.
                                {{ number_format($p->harga, 0, ',', '.') }}</p>
                            <div class="flex flex-row justify-between items-center mt-3">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4</p>
                                    <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">/</p>
                                    <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">5</p>
                                </div>
                                <a href="{{ auth()->check() ? route('detail-product', $p->id) : route('login.shop') }}"
                                    class="block mt-2">
                                    <button
                                        class="w-full flex items-center justify-center font-baloo-2-medium text-[12px] text-white bg-emerald-800 hover:bg-emerald-900 rounded-full py-2 px-4">
                                        <span class="iconify mr-1" data-icon="ic:outline-shopping-cart"
                                            data-inline="false" style="font-size: 14px;"></span> Beli
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>




<script>
document.addEventListener('DOMContentLoaded', function() {
    const seeMoreButton = document.getElementById('seeMoreAnimals');
    const hiddenContents = document.querySelectorAll('.grid .hidden');

    let visibleItemCount = 3; // Initial number of visible items

    seeMoreButton.addEventListener('click', function() {
        // Toggle visibility for the next set of items
        for (let i = 0; i < hiddenContents.length; i++) {
            if (i < visibleItemCount) {
                hiddenContents[i].classList.toggle('hidden');
            }
        }

        // Update visible item count
        visibleItemCount += 3; // Change this number based on how many items to show per click

        // Update button text based on visibility
        if (visibleItemCount >= hiddenContents.length) {
            seeMoreButton.textContent = 'No More';
            seeMoreButton.disabled = true; // Optionally disable the button
        }
    });
});
</script>


@endsection