@include('admin.layouts.navbar')

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    @include('admin.layouts.sidebar')

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 mt-16 p-6 md:mt-16">
        <div class="flex flex-col w-full justify-center">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <div class="px-6 py-4 w-full flex gap-4 text-center">
                                <div class="flex items-center">
                                    <a href="{{ route('admin.shop') }}"
                                        class="text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-500 focus:outline-none">
                                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 19l-7-7m0 0l7-7m-7 7h18">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <p class="font-bold text-xl text-center text-black">
                                    Detail Product
                                </p>

                            </div>

                        </tr>
                    </thead>
                    <tbody>
                        <div class="px-6 pb-4 grid gap-8 grid-cols-2 text-gray-900">
                            <div class="flex flex-col gap-4">
                                <!-- Konten kiri -->
                                <div>
                                    @if ($items->image_banner)
                                    <img src="{{ asset('storage/' . $items->image_banner) }}"
                                        alt="{{ $items->nama_product }}" class="max-w-full h-auto">
                                    @else
                                    <p>No Image</p>
                                    @endif
                                </div>
                                <strong>Image Detail</strong>
                                <div class="flex flex-warp gap-4">
                                    <div class="text-center">
                                        @if ($items->image_detail_1)
                                        <img src="{{ asset('storage/' . $items->image_detail_1) }}"
                                            alt="{{ $items->nama_product }}" class="max-w-full h-auto">
                                        @else
                                        <p>No Image</p>
                                        @endif
                                        <p>Detail 1</p>
                                    </div>
                                    <div class="text-center">
                                        @if ($items->image_detail_2)
                                        <img src="{{ asset('storage/' . $items->image_detail_2) }}"
                                            alt="{{ $items->nama_product }}" class="max-w-full h-auto">
                                        @else
                                        <p>No Image</p>
                                        @endif
                                        <p>Detail 2</p>
                                    </div>
                                    <div class="text-center">
                                        @if ($items->image_detail_3)
                                        <img src="{{ asset('storage/' . $items->image_detail_3) }}"
                                            alt="{{ $items->nama_product }}" class="max-w-full h-auto">
                                        @else
                                        <p>No Image</p>
                                        @endif
                                        <p>Detail 3</p>
                                    </div>
                                    <div class="text-center">
                                        @if ($items->image_detail_4)
                                        <img src="{{ asset('storage/' . $items->image_detail_4) }}"
                                            alt="{{ $items->nama_product }}" class="max-w-full h-auto">
                                        @else
                                        <p>No Image</p>
                                        @endif
                                        <p>Detail 4</p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex flex-col md:col-span-1 gap-4">
                                <div class="flex flex-col gap-4">
                                    <p class="text-gray-900 text-lg font-bold">
                                        <strong>{{ $items->nama_product }}</strong>
                                    </p>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="flex flex-col gap-4">
                                            <p class="text-gray-900">
                                                <strong>Category:</strong> <br>
                                                {{ $items->category->name }}
                                            </p>
                                            <p class="text-gray-900">
                                                <strong>Stock:</strong><br>
                                                {{ $items->stock }}
                                            </p>
                                            <p class="text-gray-900"><strong>Harga:</strong><br>
                                                {{ $items->harga }}</p>
                                            <p class="text-gray-900"><strong>Terjual:</strong><br>
                                                {{ $items->terjual }}</p>
                                            <p class="text-gray-900"><strong>Kondisi:</strong><br>
                                                {{ $items->kondisi }}</p>
                                            <p class="text-gray-900"><strong>Min. Pemesanan:</strong><br>
                                                {{ $items->min_pemesanan }}</p>
                                            <p class="text-gray-900"><strong>Type:</strong><br>
                                                @foreach ($items->productType as $productType)
                                                <button
                                                    class="px-2 py-1 mt-2 rounded-full bg-blue-100 text-blue-700 mr-2 mb-2">
                                                    {{ $productType->name }}
                                                </button>
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="flex flex-col gap-4">

                                            <p class="text-gray-900"><strong>Deskripsi:</strong><br>
                                                {{ $items->deskripsi }}
                                            </p>
                                            <p class="text-gray-900"><strong>Bahan:</strong><br>
                                                {{ $items->bahan }}
                                            </p>
                                            <p class="text-gray-900"><strong>Ukuran:</strong><br>
                                                {{ $items->ukuran }}
                                            </p>
                                            <p class="text-gray-900"><strong>Berat:</strong><br>
                                                {{ $items->berat }} Kg
                                            </p>
                                            <p class="text-gray-900"><strong>Warna:</strong><br>
                                                {{ $items->warna }}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- end content -->


</div>
<!-- end wrapper -->






@include('admin.layouts.footer')