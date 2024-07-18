@extends('layouts.app')
@section('content')

<section class="w-full">
    <div class="relative max-w-full bg-white">
        <div class="flex flex-col py-20 items-center justify-center max-w-6xl mx-auto">
            <div class="flex flex-row w-full justify-center items-center mb-[20px]">
                <p class="font-baloo-2-bold text-[32px]">Detail Product</p>
            </div>
            <div class="flex flex-col w-full mb-[20px]">
                <div class="flex flex-row items-center mb-[20px]">
                    <a href="{{ route('shop')}}" class="font-baloo-2-medium text-slate-500">Shop</a>
                    <span class="iconify ml-1 mr-1 " data-icon="mingcute:right-fill" data-inline="false"
                        style="font-size: 14px;"></span>
                    <p class="font-baloo-2-medium text-slate-500">Merchandise</p>
                    <span class="iconify ml-1 mr-1 " data-icon="mingcute:right-fill" data-inline="false"
                        style="font-size: 14px;"></span>
                    <p class="font-baloo-2-medium text-slate-500">{{ $items->category->name }}</p>
                    <span class="iconify ml-1 mr-1 " data-icon="mingcute:right-fill" data-inline="false"
                        style="font-size: 14px;"></span>
                    <p class="font-baloo-2-medium text-emerald-800">{{ $items->nama_product }}</p>
                </div>
                <div class="flex flex-row gap-12 justify-between">
                    <div class="flex flex-col w-full">
                        <div
                            class="flex flex-col bg-white px-[10px] py-[10px] rounded-lg ring-1 ring-slate-200 shadow-lg">
                            <div class="grid gap-4 justify-center">
                                <div id="largeImageContainer" class="flex justify-center rounded-lg overflow-hidden">
                                    @if($items->image_banner)
                                    <img class="max-w-full" id="largeImage"
                                        src="{{ asset('storage/' . $items->image_banner) }}"
                                        alt="{{ $items->nama_product }}">
                                    @else
                                    <p>No Image</p>
                                    @endif
                                </div>
                                <div class="grid grid-cols-4 gap-2">
                                    <div class="bg-white shadow-lg ring-1 ring-slate-200 rounded-lg">
                                        <img class=" max-w-full rounded-lg cursor-pointer "
                                            src="{{ asset('storage/' . $items->image_banner) }}" alt=""
                                            onclick="showLargeImage('{{ asset('storage/' . $items->image_banner) }}')">
                                    </div>
                                    <div class="bg-white shadow-lg ring-1 ring-slate-200 rounded-lg">
                                        <img class=" max-w-full rounded-lg cursor-pointer"
                                            src="{{ asset('storage/' . $items->image_detail_1) }}" alt=""
                                            onclick="showLargeImage('{{ asset('storage/' . $items->image_detail_1) }}')">
                                    </div>
                                    <div class="bg-white shadow-lg ring-1 ring-slate-200 rounded-lg">
                                        <img class=" max-w-full rounded-lg cursor-pointer"
                                            src="{{ asset('storage/' . $items->image_detail_2) }}" alt=""
                                            onclick="showLargeImage('{{ asset('storage/' . $items->image_detail_2) }}')">
                                    </div>
                                    <div class="bg-white shadow-lg ring-1 ring-slate-200 rounded-lg">
                                        <img class=" max-w-full rounded-lg cursor-pointer"
                                            src="{{ asset('storage/' . $items->image_detail_3) }}" alt=""
                                            onclick="showLargeImage('{{ asset('storage/' . $items->image_detail_3) }}')">
                                    </div>
                                    <div class="hidden bg-white shadow-lg ring-1 ring-slate-200 rounded-lg">
                                        <img class=" max-w-full rounded-lg cursor-pointer"
                                            src="{{ asset('storage/' . $items->image_detail_4) }}" alt=""
                                            onclick="showLargeImage('{{ asset('storage/' . $items->image_detail_4) }}')">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col h-auto ml-4 mr-4 w-full">
                        <p class="font-baloo-2-semibold text-[32px] mb-1">{{ $items->nama_product }}</p>
                        <div class="flex flex-row items-center">
                            <p class="font-baloo-2">Terjual {{ $items->terjual }}</p>
                            <span class="iconify ml-1 mr-1 text-gray-500" data-icon="fluent-mdl2:radio-bullet"
                                data-inline="false" style="font-size: 14px;"></span>
                            <div class="flex flex-row justify-between items-center">
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
                            </div>
                        </div>
                        <p class="text-red-500 font-baloo-2-bold text-[40px] mt-4">Rp. {{ number_format($items->harga, 0, ',', '.') }}</p>
                        <div class="flex flex-col mt-5">
                            <p class="font-baloo-2-semibold text-[20px]">Pilih Type</p>
                            <p class="text-[12px] font-baloo-2-medium text-red-600">*Wajib pilih type sebelum checkout / tambah keranjang</p>
                            <div class="flex items-start py-3 md:py-3 flex-row">
                                @foreach ($items->productType as $productType)
                                <button type="button"
                                    class="data-product-type text-emerald-800 hover:text-white border border-emerald-800 bg-white hover:bg-emerald-900 focus:ring-2 focus:outline-none focus:ring-emerald-300 focus:bg-emerald-800 focus:text-white rounded-full font-baloo-2-bold px-5 py-2.5 text-center me-3 mb-3 dark:border-emerald-800 dark:text-emerald-800 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800"
                                    data-product-type-id="{{ $productType->id }}">{{ $productType->name }}</button>
                                @endforeach
                            </div>
                        </div>
                        <div class="flex flex-col mt-5">
                            <p class="font-baloo-2-semibold text-[20px]">Deskripsi</p>
                            <div class="flex items-start flex-col font-baloo-2">
                                <p>Kondisi : Baru</p>
                                <p>Min. Pemesanan: {{ $items->min_pemesanan }}</p>
                                <p class="mt-3">{{ $items->deskripsi }}</p>
                                <p class="mt-3">Spesifikasi :</p>
                                <p>Bahan: {{ $items->bahan }}</p>
                                <p>Ukuran: {{ $items->ukuran }}</p>
                                <p>Berat: {{ $items->berat }} kg</p>
                                <p>Warna: {{ $items->warna }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col w-full">
                        <div class="flex flex-col gap-4 bg-white px-[32px] rounded-lg  py-[32px] ring-1 ring-slate-200">
                            <p class="font-baloo-2-semibold text-[24px] block">Jumlah</p>
                            <div class="flex flex-row justify-start items-center gap-4">
                                <div class="ring-1 ring-slate-200 shadow-md rounded-lg">
                                    <img class="rounded-lg" src="{{ asset('storage/' . $items->image_banner) }}">
                                </div>
                                <div id="product-info" class="text-nowrap w-full justify-center">
                                    <p id="product-name" class="text-[18px] font-baloo-2-semibold">{{ $items->nama_product }}</p>
                                    <p id="product-type" class="text-[12px] font-baloo-2">Type : </p>
                                </div>

                            </div>
                            <div class="flex flex-row items-center mt-4">
                                <form class="justify-center ">
                                    <div class="flex justify-start max-w-[8rem]">
                                        <button type="button" id="decrement-button"
                                            class="bg-white dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <input type="text" id="quantity-input" data-input-counter
                                            aria-describedby="helper-text-explanation"
                                            class="bg-white border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            value="{{ $items->min_pemesanan }}" required />
                                        <button type="button" id="increment-button"
                                            class="bg-white dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                                <div class="px-3">
                                    <p class="font-baloo-2 text-slate-600 text-[12px]">Stock : {{ $items->stock }} items
                                    </p>
                                </div>
                            </div>
                            <div class="w-full flex flex-row justify-between items-center">
                                <p class="font-baloo-2 text-slate-600 text-[12px]">Subtotal</p>
                                <p class="font-baloo-2-bold text-red-500 text-[20px] subtotal-price">Rp. {{ number_format($items->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="w-full flex flex-row gap-3 justify-between items-center">
                                <form action="{{ route('add.to.cart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $items->id }}">
                                    <input type="hidden" name="image_url" value="{{ $items->image_banner }}">
                                    <input type="hidden" name="quantity" id="quantity-hidden" value="{{ $items->min_pemesanan }}">
                                    <input type="hidden" name="product_type" id="product-type-hidden" value="1">
                                    <input type="hidden" name="harga" value="{{ $items->harga }}">
                                    <button type="submit"
                                        class="bg-white hover:bg-emerald-800 text-emerald-800 hover:text-white text-[14px] ring-1 ring-emerald-800 font-baloo-2 text-nowrap rounded-[8px] px-[10px] py-[10px] flex flex-row items-center">
                                        <span class="iconify mr-2" data-icon="ic:round-plus" data-inline="false"
                                            style="font-size: 14px;"></span> Tambah Keranjang
                                    </button>
                                </form>

                                <form id="buyNowForm" action="{{ route('checkout-product') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $items->id }}">
                                    <input type="hidden" name="quantity" id="quantity-hidden-buy" value="{{ $items->min_pemesanan }}">
                                    <input type="hidden" name="product_type" id="product-type-hidden" value="1">
                                    <input type="hidden" name="harga" value="{{ $items->harga }}">
                                    <button id="buyNowButton"
                                        class="bg-emerald-800 hover:bg-emerald-900 text-white font-baloo-2 text-[14px] text-nowrap rounded-[8px] px-[15px] py-[10px] flex flex-row items-center">
                                        Beli Sekarang
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="w-full pt-[20px] pb-[60px]">
        <div class="flex justify-center mx-auto mb-[20px]" id="our-product">
            <p class="font-baloo-2-bold text-[32px]">Product Lainnya</p>
        </div>

        <div class="w-full flex items-center justify-center pb-[60px]">
            <div class="max-w-6xl">
                <div class="grid grid-cols-4 md:grid-cols-4 gap-5">
                    <!-- Content Items -->
                     @foreach ($productLainnya as $product)
                    <div class="{{ $loop->index >= 4 ? 'hidden' : '' }}">
                        <div class="h-auto max-w-full rounded-lg bg-white shadow-lg shadow-slate-200 px-4 py-4">
                            <div class="mb-2">
                                @if($product->image_banner)
                                <img class="w-full h-full" src="{{ asset('storage/' . $product->image_banner) }}">
                                @else
                                <p>No Image</p>
                                @endif
                            </div>
                            <p class="font-baloo-2-bold text-16 mb-1">{{ $product->nama_product }}</p>
                            <p class="font-baloo-2-semibold text-14 text-red-500">Rp. {{ number_format($product->harga, 0, ',', '.') }}</p>
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
                                <a href="{{ auth()->check() ? route('detail-product', $product->id) : route('login.shop') }}" class="block mt-2">
                                    <button id="add-to-cart-button"
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

                <!-- See More Button -->

                <div class=" grid grid-cols-1 md:grid-cols-1 mt-8 justify-center items-center">
                    <hr class="w-full h-px my-8 bg-slate-100  dark:bg-gray-400">
                    <span
                        class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">
                        <button id="seeMoreProduct"
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
    const seeMoreButton = document.getElementById('seeMoreProduct');
    const hiddenContents = document.querySelectorAll('.grid .hidden');

    let visibleItemCount = 10; // Initial number of visible items

    seeMoreButton.addEventListener('click', function() {
        // Toggle visibility for the next set of items
        for (let i = 0; i < hiddenContents.length; i++) {
            if (i < visibleItemCount) {
                hiddenContents[i].classList.toggle('hidden');
            }
        }

        // Update visible item count
        visibleItemCount += 10; // Change this number based on how many items to show per click

        // Update button text based on visibility
        if (visibleItemCount >= hiddenContents.length) {
            seeMoreButton.textContent = 'No More';
            seeMoreButton.disabled = true; // Optionally disable the button
        }
    });
});
</script>

<script>
    function showLargeImage(imageUrl) {
        document.getElementById('largeImage').src = imageUrl;
    }
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const quantityInput = document.getElementById('quantity-input');
    const subtotalElement = document.querySelector('.subtotal-price');

    let pricePerItem = parseFloat(subtotalElement.textContent.replace('Rp. ', '').replace('.', '').replace(',', '.'));

    // Event listener untuk memperbarui subtotal saat nilai quantity berubah
    quantityInput.addEventListener('input', function () {
        const quantity = parseInt(quantityInput.value);

        const subtotal = quantity * pricePerItem;
        subtotalElement.textContent = `Rp. ${subtotal.toLocaleString()}`;

        // Set nilai quantity-hidden sesuai dengan nilai quantity
        document.getElementById('quantity-hidden').value = quantity;
    });

    // Event listener untuk tombol decrement
    const decrementButton = document.getElementById('decrement-button');
    decrementButton.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value, 10);
        if (currentValue > {{ $items->min_pemesanan }}) {
            currentValue--;
        }
        quantityInput.value = currentValue;

        const quantity = parseInt(quantityInput.value);
        const subtotal = quantity * pricePerItem;
        subtotalElement.textContent = `Rp. ${subtotal.toLocaleString()}`;

        // Set nilai quantity-hidden sesuai dengan nilai quantity
        document.getElementById('quantity-hidden').value = quantity;
        document.getElementById('quantity-hidden-buy').value = quantity;
    });

    // Event listener untuk tombol increment
    const incrementButton = document.getElementById('increment-button');
    incrementButton.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value, 10);
        currentValue++;
        quantityInput.value = currentValue;

        const quantity = parseInt(quantityInput.value);
        const subtotal = quantity * pricePerItem;
        subtotalElement.textContent = `Rp. ${subtotal.toLocaleString()}`;

        // Set nilai quantity-hidden sesuai dengan nilai quantity
        document.getElementById('quantity-hidden').value = quantity;
        document.getElementById('quantity-hidden-buy').value = quantity;

    });
});

</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.data-product-type');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const productTypeId = this.getAttribute('data-product-type-id');
            const productName = '{{ $items->nama_product }}'; // Ganti ini dengan cara yang sesuai untuk mendapatkan nama produk

            console.log('Type ID:', productTypeId);

            // Perbarui teks pada elemen product-type
            document.getElementById('product-type').textContent = 'Type: ' + this.textContent;

            // Opsional: Perbarui teks pada elemen product-name (jika diperlukan)
            document.getElementById('product-name').textContent = productName;
        });
    });
});

</script>

<script>
    // Ambil semua elemen tombol product type
    var productTypeButtons = document.querySelectorAll('.data-product-type');

    // Loop melalui setiap tombol dan tambahkan event listener untuk setiap klik
    productTypeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Ambil nilai data-product-type-id dari tombol yang diklik
            var productTypeId = button.getAttribute('data-product-type-id');
            
            // Update nilai input hidden dengan nilai productTypeId
            document.getElementById('product-type-hidden').value = productTypeId;
            console.log('Product Type:', document.getElementById('product-type-hidden').value);
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buyNowButton = document.getElementById('buyNowButton');

        buyNowButton.addEventListener('click', function() {
            const formData = new FormData(document.getElementById('buyNowForm'));

            fetch('{{ route('checkout-product') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    product_id: formData.get('product_id'),
                    quantity: formData.get('quantity'),
                    product_type: formData.get('product-type-hidden'),
                    harga: formData.get('harga')
                })
            })
            .then(response => response.json())
            .then(data => {
                window.location.href = '{{ route('checkout') }}';
            })
            .catch(error => {
                console.error('Error saving product to session:', error);
            });
        });
    });
</script>


@endsection