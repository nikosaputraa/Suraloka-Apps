@extends('layouts.app')
@section('content')

<section class="w-full pt-16">
    <div class="flex flex-row w-full justify-center pt-8 items-center mb-[20px]">
        <p class="font-baloo-2-bold text-[32px]">Your Carts</p>
    </div>

    <ul class="max-w-full px-4 divide-y divide-gray-200 dark:divide-gray-700 h-screen">
        @forelse ($carts as $cart)
        <li class="pb-3 sm:pb-4">
            <div class="flex items-center py-4 space-x-4 rtl:space-x-reverse">
                <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-full" src="{{ asset('storage/' . $cart->image_url) }}">
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                        {{ $cart->product->nama_product }}
                    </p>
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        Qty : {{ $cart->quantity }}
                    </p>
                </div>
                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">

                    <div class="flex-1 text-end min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Subtotal
                        </p>
                        <p class="font-baloo-2-bold text-red-500 text-[20px] subtotal-price">Rp.
                            {{ number_format($cart->subtotal, 0, ',', '.') }}
                        </p>

                    </div>
                </div>
                <div class="px-8 flex flex-row gap-2">
                    <form id="delete-form-{{ $cart->id }}" action="{{ route('cart.destroy', $cart->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteCart({{ $cart->id }})"
                            class="flex items-center justify-center font-baloo-2-medium text-[12px] text-white bg-red-600 hover:bg-red-800 rounded-full py-2 px-4">
                            <span class="iconify mr-1" data-icon="fluent:delete-24-regular" data-inline="false"
                                style="font-size: 14px;"></span>Delete
                        </button>
                    </form>
                    <form id="buyNowForm" action="{{ route('checkout-cart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $cart->id }}">
                        <input type="hidden" name="product_id" value="{{ $cart->product_id }}">
                        <input type="hidden" name="quantity" id="quantity-hidden-buy"
                            value="{{ $cart->quantity }}">
                        <input type="hidden" name="product_type" id="product-type-hidden" value="1">
                        <input type="hidden" name="harga" value="{{ $cart->subtotal / $cart->quantity }}">
                        <button id="buyNowButton"
                            class="bg-emerald-800 hover:bg-emerald-900 text-white font-baloo-2 text-[12px] text-nowrap rounded-full py-2 px-4 flex flex-row items-center">
                            Checkout
                        </button>
                    </form>
                    
                </div>
            </div>
        </li>
        @endforeach
    </ul>


</section>

<script>
function deleteCart(cartId) {
    // Tampilkan konfirmasi SweetAlert
    Swal.fire({
        title: 'Are you sure?',
        text: 'You will not be able to recover this item!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Submit form untuk menghapus cart
            document.getElementById('delete-form-' + cartId).submit();
        }
    });
}
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buyNowButton = document.getElementById('buyNowButton');

        buyNowButton.addEventListener('click', function() {
            const formData = new FormData(document.getElementById('buyNowForm'));

            fetch('{{ route('checkout-cart') }}', {
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