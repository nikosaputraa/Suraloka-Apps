@extends('layouts.app')
@section('content')
<section class="w-full">
    <div id="default-carousel" class="relative max-w-full md:w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-screen overflow-hidden md:h-screen">
            @foreach($carousel as $key => $c)
            <div class="z-0 hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/' . $c->plant_image) }}"
                    class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                @if($key == 0)
                <div class="text-white inset-0 absolute flex flex-col items-center justify-center">
                    <p class="text-amber-400 text-[64px] font-baloo-2-bold">Welcome to Our Collections!</p>
                    <p class="text-white text-[32px] font-baloo-2 text-center" style="width: 680px;">Dapatkan informasi
                        lengkap mengenai koleksi tumbuhan yang ada di Suraloka Zoo</p>
                </div>
                @endif
            </div>
            @endforeach

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
</section>

<section>
    <div class="w-full"
        style="background-image: url('{{ asset('image/background/bg-foot.png') }}'); background-size: cover;">
        <div class="w-full h-auto"
            style="background-image: url('{{ asset('image/background/bg-green.png') }}'); background-size: cover;">
            <!-- Animal Category -->
            <div class="flex flex-col py-[40px] items-center justify-between max-w-6xl mx-auto">
                <p class="font-baloo-2-bold text-white text-[32px] mb-4">Plants Category</p>
                <div class="max-w-6xl mx-auto grid gap-4 md:grid-cols-5">
                    <!-- Item 1 -->
                    @foreach($categories as $category)
                    <div>
                        <div
                            class="flex flex-col justify-center h-auto max-w-full rounded-lg bg-white shadow-lg shadow-emerald-800 px-[16px] py-[16px]">
                            <img src="{{ asset('storage/' . $category->image) }}" class="mb-[10px]" alt="Kelinci">
                            <div class="mt-[-30px] flex justify-center">
                                <a href="{{ route('plants.category', ['category' => $category->id]) }}">
                                    @if($plantCategory->id == $category->id)
                                    <button
                                        class="bg-emerald-800 hover:bg-emerald-900 shadow-amber-400 shadow-md text-white font-baloo-2-bold rounded-full"
                                        style="width:170px; height:53px;">
                                        {{ $category->name }}
                                    </button>
                                    @else
                                    <button
                                        class="bg-white hover:bg-emerald-900 ring-2 ring-emerald-800 text-emerald-800 hover:text-white hover:ring-0 font-baloo-2-bold rounded-full"
                                        style="width:170px; height:53px;">
                                        {{ $category->name }}
                                    </button>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Detail Mamalia -->
        <div action="#" method="GET" class="max-w-full">
            <div class="flex flex-col py-8 items-center justify-between max-w-6xl mx-auto">
                <div class="flex flex-row w-full justify-between items-center mb-[20px]">
                    <div class="items-center justify-center">
                        <p class="font-baloo-2-bold text-[32px]">{{ $plantCategory->name }}</p>
                    </div>
                    <div>
                        <form id="searchForm" action="#" method="GET">
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative w-[300px]">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search"
                                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search plant ..." name="query" />
                                <button type="submit"
                                    class="text-white absolute end-2.5 bottom-2.5 bg-emerald-800 hover:bg-emerald-900 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-full text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
                                    Search
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

                <div id="default-carousel" class="relative max-w-full md:w-full h-[500px]" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-[500px] overflow-hidden md:h-[500px]">
                        <!-- Item 1 -->
                        @foreach($plants as $p)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('image/background/bg-head-category.png') }}"
                                class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                            <div
                                class="px-[120px] py-[50px] inset-0 absolute flex flex-col items-center justify-center">
                                <div
                                    class="flex flex-row w-full gap-[30px] bg-white rounded-[24px] px-[30px] py-[30px] justify-between items-center">
                                    <img src="{{ asset('storage/' . $p->plant_image) }}"
                                        style="width: 400px; height: 300px;" alt="{{ $p->plant_name }}">

                                    <div class="flex flex-col justify-center gap-[30-px]">
                                        <p class="font-baloo-2-semibold text-[32px]">{{ $p->plant_name }}</p>
                                        <p class="font-baloo-2 text-[16px]">{{ $p->plant_desc}}</p>
                                        <a href="{{ route('plants.desc', ['id' => $p->id]) }}">
                                            <button
                                                class="mt-[20px] bg-emerald-800 hover:bg-emerald-900 text-white font-baloo-2 rounded-[8px] text-[16px]] px-[40px] py-[6px] flex flex-row items-center">
                                                Lihat Selengkapnya <span class="iconify ml-1"
                                                    data-icon="ph:arrow-right-bold" data-inline="false"
                                                    style="font-size: 16px;"></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-8 left-1/2 space-x-3 rtl:space-x-reverse">
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>


            </div>
        </div>


        <div class="w-full flex items-center justify-center pb-8">
            <div class="max-w-6xl">
                <div class="grid grid-cols-3 md:grid-cols-3 gap-5">
                    <!-- Content Items -->
                    @foreach($plants as $plant)
                    <div class="{{ $loop->index >= 3 ? 'hidden' : '' }}">
                        <div class="h-auto max-w-full rounded-lg bg-white shadow shadow-slate-200 px-4 py-4">
                            <img src="{{ asset('storage/' . $plant->plant_image) }}" class="mb-2 rounded-lg"
                                alt="Kelinci">
                            <p class="font-baloo-2-bold text-16 text-center">{{ $plant->plant_name }}</p>
                            <p class="font-baloo-2 text-14">
                                @php
                                $truncated_desc = strlen($plant->plant_desc) > 100 ? substr($plant->plant_desc, 0,
                                100) . ' ...' : $plant->plant_desc;
                                echo $truncated_desc;
                                @endphp
                            </p>
                            <a href="{{ route('plants.desc', ['id' => $plant->id]) }}" class="block mt-2">
                                <button
                                    class="w-full flex items-center justify-center font-baloo-2-medium text-14 text-emerald-800 ring-1 ring-emerald-800 hover:bg-emerald-800 hover:text-white rounded-full py-2 px-4">
                                    Lihat Selengkapnya <span class="iconify ml-1" data-icon="ph:arrow-right-bold"
                                        data-inline="false" style="font-size: 14px;"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- See More Button -->

                <div class=" grid grid-cols-1 md:grid-cols-1 mt-8 justify-center items-center">
                    <hr class="w-full h-px my-8 bg-slate-100  dark:bg-gray-400">
                    <span
                        class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">
                        <button id="seeMoreButton"
                            class="hover:bg-emerald-900 hover:text-white text-emerald-800 font-baloo-2-bold py-2 px-4 rounded-[8px]">
                            <span class="mr-2">+</span> See More
                        </button>
                    </span>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const seeMoreButton = document.getElementById('seeMoreButton');
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
            visibleItemCount = 3;

        }
    });
});
</script>


@endsection