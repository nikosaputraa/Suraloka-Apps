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
                                    Edit Product
                                </p>

                            </div>

                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('shop.item.update', $items->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                    <div>
                                        <input type="file" name="image_banner" id="image_banner"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="">
                                    </div>
                                    <strong>Image Detail</strong>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="text-center">
                                            @if ($items->image_detail_1)
                                            <img src="{{ asset('storage/' . $items->image_detail_1) }}"
                                                alt="{{ $items->nama_product }}" class="max-w-full h-auto">
                                            @else
                                            <p>No Image</p>
                                            @endif
                                            <p>Detail 1</p>
                                            <div>

                                                <input type="file" name="image_detail_1" id="image_detail_1"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            @if ($items->image_detail_2)
                                            <img src="{{ asset('storage/' . $items->image_detail_2) }}"
                                                alt="{{ $items->nama_product }}" class="max-w-full h-auto">
                                            @else
                                            <p>No Image</p>
                                            @endif
                                            <p>Detail 2</p>
                                            <div>
                                                <input type="file" name="image_detail_2" id="image_detail_2"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="text-center">
                                            @if ($items->image_detail_3)
                                            <img src="{{ asset('storage/' . $items->image_detail_3) }}"
                                                alt="{{ $items->nama_product }}" class="max-w-full h-auto">
                                            @else
                                            <p>No Image</p>
                                            @endif
                                            <p>Detail 3</p>
                                            <div>
                                                <input type="file" name="image_detail_3" id="image_detail_3"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            @if ($items->image_detail_4)
                                            <img src="{{ asset('storage/' . $items->image_detail_4) }}"
                                                alt="{{ $items->nama_product }}" class="max-w-full h-auto">
                                            @else
                                            <p>No Image</p>
                                            @endif
                                            <p>Detail 4</p>
                                            <div>
                                                <input type="file" name="image_detail_4" id="image_detail_4"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex flex-col md:col-span-1 gap-4">
                                    <div class="flex flex-col gap-4">
                                        <div>
                                            <label for="nama_product"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                Product</label>
                                            <input type="text" name="nama_product" id="nama_product"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan nama animal" value="{{ $items->nama_product }}">
                                        </div>
                                        <div>
                                        <label for="category"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <select name="category_id" id="category"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            @foreach ($category as $cty)
                                            <option value="{{ $cty->id }}"
                                                {{ $cty->id === $items->category_id ? 'selected' : '' }}>
                                                {{ $cty->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <div>
                                            <label for="stock"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                                            <input type="number" name="stock" id="stock"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan nama animal" value="{{ $items->stock }}">
                                        </div>
                                        <div>
                                            <label for="harga"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                            <input type="number" name="harga" id="harga"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan nama animal"
                                                value="{{ number_format($items->harga, 0, '', '') }}">
                                        </div>
                                        <div>
                                            <label for="kondisi"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi</label>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                name="kondisi" id="kondisi">
                                                <option selected>{{ $items->kondisi }}</option>
                                                <option value="New">New</option>
                                                <option value="Second">Second</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="min_pemesanan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Min.
                                                Pemesanan</label>
                                            <input type="number" name="min_pemesanan" id="min_pemesanan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan nama animal" value="{{ $items->min_pemesanan }}">
                                        </div>
                                        <div>
                                            <label for="type_id"
                                                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Type</label>

                                            <div class="flex flex-wrap gap-2 items-center">
                                                @foreach($productTypes as $type)
                                                <input type="checkbox" name="type_id[]" id="type_{{ $type->id }}"
                                                    value="{{ $type->id }}"
                                                    {{ $items->productType->contains($type->id) ? 'checked' : '' }}
                                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                                <label for="type_{{ $type->id }}"
                                                    class="text-sm text-gray-900 dark:text-white">{{ $type->name }}</label>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div>
                                            <label for="deskripsi"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                            <textarea name="deskripsi" id="deskripsi"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                rows="5">{{ $items->deskripsi }}</textarea>
                                        </div>
                                        <div>
                                            <label for="bahan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahan</label>
                                            <input type="text" name="bahan" id="bahan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan nama animal" value="{{ $items->bahan }}">
                                        </div>
                                        <div>
                                            <label for="ukuran"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran</label>
                                            <input type="text" name="ukuran" id="ukuran"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan nama animal" value="{{ $items->ukuran }}">
                                        </div>
                                        <div>
                                            <label for="berat"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat</label>
                                            <input type="text" name="berat" id="berat"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan nama animal" value="{{ $items->berat }}">
                                        </div>
                                        <div>
                                            <label for="warna"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
                                            <input type="text" name="warna" id="warna"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan nama animal" value="{{ $items->warna }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end p-4 mr-2">
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Update
                                </button>
                            </div>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- end content -->


</div>
<!-- end wrapper -->






@include('admin.layouts.footer')