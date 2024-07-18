@extends('layouts.app')
@section('content')
<section class="w-full">
    @foreach($plants as $plant)
    <div id="default-carousel" class="relative max-w-full md:w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-screen overflow-hidden md:h-screen">
            <!-- Item 1 -->
            <div class="z-0 hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/' . $plant->plant_image) }}"
                    class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="text-white text-[90px] inset-0 absolute flex flex-col items-center justify-center">
                    <p class="text-amber-400 text-[64px] font-baloo-2-bold">{{ $plant->plant_name }} <span>(
                            {{ $plant->latin_name }} )</span></p>
                    <p class="text-white text-[32px] font-baloo-2 text-center" style="width: 680px;">Dapatkan informasi
                        lengkap mengenai koleksi tumbuhan yang ada di Suraloka Zoo</p>
                </div>

            </div>
            <!-- Item 2 -->
            <div class="z-0 hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/' . $plant->plant_image) }}"
                    class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <!-- Item 3 -->
            <div class="z-0 hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/' . $plant->plant_image) }}"
                    class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
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
        <div class="w-full">
            <!-- Animal Category -->
            <div class="flex flex-row justify-between max-w-6xl mx-auto py-[60px]">
                <div class="flex flex-col gap-[50px] w-[708px] lg:w-[600px]">
                    <div>
                        <p class="font-baloo-2-bold text-[32px]">{{ $plant->plant_name }}</p>
                        <p class="font-baloo-2 text-[16px]">{{ $plant->latin_name }}</p>
                    </div>
                    <div class="flex flex-col gap-[32px]">
                        <div class="flex flex-col gap-1">
                            <p class="font-baloo-2-bold text-[20px] text-emerald-800">Deskripsi</p>
                            <p class="font-baloo-2 text-[16px] text-justify">{{ $plant->plant_desc }}</p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-baloo-2-bold text-[20px] text-emerald-800">Habitat</p>
                            <p class="font-baloo-2 text-[16px]">{{ $plant->plant_habitat }}</p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-baloo-2-bold text-[20px] text-emerald-800">Asal</p>
                            <p class="font-baloo-2 text-[16px]">{{ $plant->plant_origin }}</p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-baloo-2-bold text-[20px] text-emerald-800">Klasifikasi</p>
                            <p class="font-baloo-2 text-[16px]">{{ $plant->plant_klasifikasi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="flex flex-col w-[300px] gap-[32px]">
                    <div>
                        <form class="w-full">
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search"
                                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-emerald-500 focus:border-emerald-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search plant ..." required />
                                <button type="submit"
                                    class="text-white absolute end-2.5 bottom-2.5 bg-emerald-800 hover:bg-emerald-900 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-full text-sm px-4 py-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="grid grid-cols-1 gap-4 w-full justify-center" style="max-height: 600px; overflow-y: auto;">
                    @foreach($relatedPlants as $p)
                        <div class="{{ $loop->index >= 2 ? 'hidden' : '' }}">
                            <div class="h-auto max-w-full rounded-lg bg-white shadow shadow-slate-200 px-4 py-4">
                                <img src="{{ asset('storage/' . $p->plant_image) }}"
                                    class="mb-2 rounded-lg" alt="Kelinci">
                                <p class="font-baloo-2-bold text-16 text-center">{{ $p->plant_name }}</p>
                                <p class="font-baloo-2 text-14">{{ $p->plant_desc }}</p>
                                <a href="{{ route('plants.desc', ['id' => $p->id]) }}" class="block mt-2">
                                    <button
                                        class="w-full flex items-center justify-center font-baloo-2-medium text-14 text-emerald-800 ring-1 ring-emerald-800 hover:bg-emerald-800 hover:text-white rounded-full py-2 px-4">
                                        Lihat Selengkapnya <span class="iconify ml-1" data-icon="ph:arrow-right-bold"
                                            data-inline="false" style="font-size: 14px;"></span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        

                        <div class="relative grid grid-cols-1 md:grid-cols-1 mt-4 justify-center items-center">
                            <div class="inline-flex items-center justify-center w-full">
                                <hr class="w-full h-px my-6 bg-slate-100 dark:bg-gray-400">
                                <span
                                    class="absolute px-3 font-medium text-gray-900 bg-white dark:text-white dark:bg-gray-900">
                                    <button id="seeMoreAnimals"
                                        class="hover:bg-emerald-900 hover:text-white text-emerald-800 font-baloo-2-bold py-2 px-4 rounded-[8px]">
                                        <span class="mr-2">+</span> See More
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
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