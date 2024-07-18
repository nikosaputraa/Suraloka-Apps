@extends('layouts.app')
@section('content')

<section class="w-full">
    <div class="relative max-w-full bg-white">
        <div class="flex flex-col pt-20 pb-[100px] items-center justify-center max-w-6xl mx-auto">
            <div class="flex flex-row w-full justify-center items-center mb-[20px]">
                <p class="font-baloo-2-bold text-[32px]">Checkout Product</p>
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
                    <p class="font-baloo-2-medium text-slate-500">{{ $items->nama_product }}</p>
                    <span class="iconify ml-1 mr-1 " data-icon="mingcute:right-fill" data-inline="false"
                        style="font-size: 14px;"></span>
                    <p class="font-baloo-2-medium text-emerald-800">Checkout</p>
                </div>

                <!-- Checkout Form -->
                <div class="flex flex-row gap-24 justify-between">
                    <div class="flex flex-col h-auto w-full">
                        <p class="font-baloo-2-semibold text-[24px] mb-4 leading-normal">Billing Address</p>
                        <div class="flex flex-row items-center">

                            <form action="{{ route('billing-address.store') }}" method="POST"
                                class="font-baloo-2 w-full">
                                @csrf
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="nama_lengkap" id="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 peer"
                                        placeholder=" " required />
                                    <label for="floating_email"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-emerald-600 peer-focus:dark:text-emerald-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                                        Lengkap</label>
                                </div>
                                <!-- Provinsi -->
                                <div class="grid md:grid-cols-2 md:gap-6">
                                    <div class="relative w-full mb-5 group">
                                        <div class="flex justify-between items-center">
                                            <select type="text" name="provinsi" id="provinsi"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 relative z-10"
                                                placeholder="Provinsi" required>
                                                <option value="">Pilih Kota</option>
                                                <!-- Render options from API based on selected province -->
                                            </select>
                                            <input type="text" name="provinsi" id="provinsi"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 relative z-10"
                                                placeholder="Provinsi" required />
                                            <span
                                                class="text-gray-400 iconify cursor-pointer absolute right-0 top-0 mt-3 mr-2 pointer-events-none z-0"
                                                data-icon="mingcute:down-line" data-inline="false"></span>

                                        </div>
                                        <ul id="dropdown-provinsi"
                                            class="hidden z-50 absolute w-full mt-1 py-1 bg-white border border-gray-300 divide-y divide-gray-200 shadow-lg max-h-60 overflow-auto rounded-md">

                                        </ul>
                                    </div>
                                    <div class="relative w-full mb-5 group">
                                        <input type="text" name="floating_last_name" id="floating_last_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 peer"
                                            placeholder=" " required />
                                        <label for="floating_last_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-emerald-600 peer-focus:dark:text-emerald-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Postal
                                            Code</label>
                                    </div>
                                </div>
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="floating_email" id="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 peer"
                                        placeholder=" " required />
                                    <label for="floating_email"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-emerald-600 peer-focus:dark:text-emerald-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                                </div>





                                <!-- Opsi Pengiriman -->
                                <div class="relative w-full mb-5 group">

                                    <div class="flex justify-between items-center">
                                        <input type="text" name="opsi-kirim" id="opsi-kirim"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 relative z-10"
                                            placeholder="Opsi Pengiriman" required />
                                        <span
                                            class="text-gray-400 iconify cursor-pointer absolute right-0 top-0 mt-3 mr-2 pointer-events-none z-0"
                                            data-icon="mingcute:down-line" data-inline="false"></span>

                                    </div>
                                    <ul id="dropdown-opsi-kirim"
                                        class="hidden z-50 absolute w-full mt-1 pt-2 px-2 bg-white border border-gray-300 divide-y divide-gray-200 shadow-lg max-h-60 overflow-auto rounded-md">

                                    </ul>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="checkbox-2" type="checkbox" value=""
                                        class="w-4 h-4 text-emerald-600 bg-gray-100 border-gray-300 rounded focus:ring-emerald-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-2" class="ms-2 text-sm text-gray-500 dark:text-gray-300">Simpan
                                        detail untuk alamat penagihan di masa mendatang</label>
                                </div>

                        </div>
                    </div>

                    <div class="flex flex-col w-full">
                        <p class="font-baloo-2-semibold text-[24px] mb-4 leading-normal">Payment Options</p>
                        <div class="flex flex-col bg-white px-[20px] rounded-lg  py-[20px] ring-1 ring-slate-200">
                            <div class="relative w-full mb-5 group font-baloo-2">
                                <div class="flex justify-between items-center">
                                    <input type="text" name="payment" id="payment"
                                        class="block py-2.5 px-2 rounded-[8px] w-full text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-emerald-500 focus:outline-none focus:ring-0 focus:border-emerald-600 relative z-10"
                                        placeholder="Metode Pembayaran" required />
                                    <span
                                        class="text-gray-400 iconify cursor-pointer absolute right-0 top-0 mt-3 mr-2 pointer-events-none z-0"
                                        data-icon="mingcute:down-line" data-inline="false"></span>
                                </div>
                                <ul id="dropdown-payment"
                                    class="hidden z-50 relative w-full mt-1 pt-2 px-2 bg-white border border-gray-300 divide-y divide-gray-200 shadow-lg max-h-60 overflow-auto rounded-md">

                                </ul>
                            </div>
                            <div class="font-baloo-2 mt-8 flex flex-row justify-between items-center">
                                <p>Harga</p>
                                <p>Rp. {{ number_format(session('checkout_product.harga'), 0, ',', '.') }}</p>
                            </div>
                            <div class="font-baloo-2 mt-2 flex flex-row justify-between items-center">
                                <p>Quantity</p>
                                <p>{{ session('checkout_product.quantity') }}</p>
                            </div>
                            <div class="font-baloo-2 mt-2 flex flex-row justify-between items-center">
                                <p>Subtotal</p>
                                <p>Rp.
                                    {{ number_format(session('checkout_product.harga') * session('checkout_product.quantity'), 0, ',', '.') }}
                                </p>
                            </div>
                            <div class="font-baloo-2 mt-2 flex flex-row justify-between items-center">
                                <p>Biaya Pengiriman</p>
                                <p id="biaya-pengiriman">Rp. 0</p>
                            </div>
                            <hr class="w-full mt-2">
                            <div class="font-baloo-2 mt-2 flex flex-row justify-between items-center">
                                <p class="font-semibold">Total Pembayaran</p>
                                <p class="font-semibold">Rp.
                                    {{ number_format(session('checkout_product.harga') * session('checkout_product.quantity') + intval(old('biaya-pengiriman', '0')), 0, ',', '.') }}
                                </p>
                            </div>
                            <button type="submit"
                                class="mt-8 rounded-lg py-2 w-full bg-emerald-800 hover:bg-emerald-900 text-white font-baloo-2-semibold text-[16px]">
                                Bayar
                            </button>
                            </form>
                        </div>
                    </div>
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


<!-- Option Pengiriman -->
<script>
const kirim = [{
        label: "Pengiriman Standar (+ Rp. 12.000)",
        biaya: 12000
    },
    {
        label: "Pengiriman Express (+ Rp. 20.000)",
        biaya: 20000
    },
    {
        label: "Ambil di Suraloka Zoo",
        biaya: 0
    },
    // Add more options as needed
];

const inputFieldKirim = document.getElementById('opsi-kirim'); // ID dari input field opsi-kirim
const dropdownOptionsKirim = document.getElementById('dropdown-opsi-kirim'); // ID dari dropdown opsi-kirim

// Function untuk memperbarui biaya pengiriman dan total pembayaran
function updateBiayaPengiriman() {
    const selectedOption = inputFieldKirim.value;
    const biayaPengirimanElement = document.getElementById('biaya-pengiriman');
    const biayaPengirimanInput = document.getElementById('biaya-pengiriman-input');
    let biayaPengiriman = 0;

    // Cari biaya pengiriman yang sesuai dengan opsi yang dipilih
    for (let i = 0; i < kirim.length; i++) {
        if (kirim[i].label === selectedOption) {
            biayaPengiriman = kirim[i].biaya;
            break;
        }
    }

    // Tampilkan biaya pengiriman
    biayaPengirimanElement.textContent = `Rp. ${biayaPengiriman.toLocaleString()}`;
    biayaPengirimanInput.value = biayaPengiriman;

    // Hitung dan tampilkan total pembayaran
    const hargaProduk = {
        {
            session('checkout_product.harga')
        }
    };
    const quantity = {
        {
            session('checkout_product.quantity')
        }
    }; // Ganti dengan nilai quantity yang sesuai
    const totalPembayaran = hargaProduk * quantity + biayaPengiriman;
    const totalPembayaranElement = document.getElementById('total-pembayaran');
    totalPembayaranElement.textContent = `Rp. ${totalPembayaran.toLocaleString()}`;
}

// Event listener untuk input field opsi kirim
inputFieldKirim.addEventListener('input', updateBiayaPengiriman);

// Event listener untuk memperbarui biaya pengiriman saat halaman dimuat
document.addEventListener('DOMContentLoaded', updateBiayaPengiriman);

// Function untuk menampilkan dropdown opsi kirim
function populateDropdownKirim() {
    // Clear previous options
    dropdownOptionsKirim.innerHTML = '';

    // Add new options
    kirim.forEach(option => {
        const li = document.createElement('li');
        li.textContent = option.label;
        li.classList.add('px-3', 'mb-2', 'ring-1', 'ring-slate-300', 'rounded-[8px]', 'py-1', 'cursor-pointer',
            'hover:bg-emerald-200', 'bg-emerald-100', 'z-50');
        li.addEventListener('click', () => {
            inputFieldKirim.value = option.label;
            updateBiayaPengiriman(); // Panggil function untuk update biaya pengiriman
            dropdownOptionsKirim.classList.add('hidden');
        });
        dropdownOptionsKirim.appendChild(li);
    });

    // Show dropdown
    dropdownOptionsKirim.classList.remove('hidden');
}

// Event listener untuk input field click
inputFieldKirim.addEventListener('click', populateDropdownKirim);

// Event listener untuk menyembunyikan dropdown saat klik di luar dropdown
document.addEventListener('click', (event) => {
    if (!inputFieldKirim.contains(event.target) && !dropdownOptionsKirim.contains(event.target)) {
        dropdownOptionsKirim.classList.add('hidden');
    }
});
</script>


<!-- Option Payment -->
<script>
const payment = [
    "Bank Nasional Indonesia (BNI)",
    "Bank Central Asia (BCA)",
    "Bank Rakyat Indonesia (BRI)",
    "Bank Mandiri",
    // Add more options as needed
];

const inputFieldPayment = document.getElementById('payment'); // ID dari input field negara
const dropdownOptionsPayment = document.getElementById('dropdown-payment'); // ID dari dropdown negara

// Function to populate dropdown options for country
function populateDropdownPayment() {
    // Clear previous options
    dropdownOptionsPayment.innerHTML = '';

    // Add new options
    payment.forEach(option => {
        const li = document.createElement('li');
        li.textContent = option;
        li.classList.add('px-3', 'mb-2', 'ring-1', 'ring-slate-300', 'rounded-[8px]', 'py-1', 'cursor-pointer',
            'hover:bg-emerald-200', 'bg-emerald-100', 'z-50');
        li.addEventListener('click', () => {
            inputFieldPayment.value = option;
            dropdownOptionsPayment.classList.add('hidden');
        });
        dropdownOptionsPayment.appendChild(li);
    });

    // Show dropdown
    dropdownOptionsPayment.classList.remove('hidden');
}

// Event listener for input field click
inputFieldPayment.addEventListener('click', populateDropdownPayment);

// Event listener to hide dropdown when clicking outside
document.addEventListener('click', (event) => {
    if (!inputFieldPayment.contains(event.target) && !dropdownOptionsPayment.contains(event.target)) {
        dropdownOptionsPayment.classList.add('hidden');
    }
});
</script>


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Event listener untuk form submission
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Tampilkan SweetAlert
        Swal.fire({
            html: `<div class="text-center">
                <h2 class="text-xl font-baloo-2-bold mb-4">Pesanan Sukses</h2>
                <img src="{{ asset('image/shop/payment-success.png') }}" class="mx-auto" style="width: 200px; height: 200px;">
                <p class="font-baloo-2 text-gray-500 mt-4">Terima kasih telah membeli. Pesanan Anda akan dikirim dalam 3-5 hari kerja</p>
                </div>`,
            showCancelButton: false,
            confirmButtonText: 'Kembali Belanja',
            cancelButtonText: 'Batalkan',
            customClass: {
                confirmButton: 'text-white font-baloo-2-bold',
                cancelButton: 'bg-gray-400 hover:bg-gray-600 text-white font-bold',
                title: 'text-red-500', // Warna teks judul
                content: 'text-gray-800', // Warna teks konten
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // Lanjutkan form submission
                this.submit();
            }
        });

    });
});
</script>
@endpush

@endsection