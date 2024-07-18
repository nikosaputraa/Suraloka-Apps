<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validasi request
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'product_type' => 'required',
            'image_url' => 'required',
            'harga' => 'required',
        ]);

        $product = Product::findOrFail($request->product_id);

        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'product_type' => $request->product_type,
            'image_url' => $request->image_url,
            'harga' => $request->harga,
            'subtotal' => $product->harga * $request->quantity,          
        ]);
            
        return redirect()->route('page.cart')->with('success', 'Product added to cart successfully.');

    }

    public function showCart()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', auth()->id())->get();
        
        foreach ($carts as $cart) {
            $cart->product = Product::findOrFail($cart->product_id);
        }

        return view('shop.cart-product', compact('carts'));
    }

    public function cartDestroy($id)
    {
        try {
            // Cari cart berdasarkan ID
            $cart = Cart::findOrFail($id);
    
            // Hapus cart
            $cart->delete();
    
            return redirect()->route('shop.cart-product')->with('success', 'Cart item deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('page.cart')->with('error', 'Failed to delete cart item. ' . $e->getMessage());
        }
    }
}