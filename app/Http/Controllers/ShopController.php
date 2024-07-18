<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\Product;
use App\Models\Cart;
use App\Models\BillingAddress;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ShopController extends Controller
{
    public function adminIndex()
    {
        $type = ProductType::latest()->paginate(5);
        $category = ProductCategory::latest()->paginate(5);
        $product = Product::with('productType', 'category')->paginate(5);

        return view('admin.shop.shop-settings', compact('type', 'category', 'product'));
    }

    public function categoryStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:product_category',
        ]);

        ProductCategory::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.shop')->with('success', 'Product category created successfully.');
    }

    public function categoryUpdate(Request $request, ProductCategory $productCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255,name,'.$productCategory->id,
        ]);
    
        $productCategory->update([
                'name' => $request->name,
        ]);
    
        // Response JSON untuk handle request dengan AJAX
        return response()->json(['message' => 'Product category updated successfully.']);
    }

    public function categoryDestroy(ProductCategory $productCategory)
    {

        $productCategory->delete();

        return redirect()->route('admin.shop')->with('success', 'Product category deleted successfully.');
    }


    public function typeStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:animal_categories',
        ]);

        ProductType::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.shop')->with('success', 'Product type created successfully.');
    }

    public function typeUpdate(Request $request, ProductType $productType)
    {
        $request->validate([
            'name' => 'required|string|max:255,name,'.$productType->id,
        ]);
    
        $productType->update([
                'name' => $request->name,
        ]);
    
        // Response JSON untuk handle request dengan AJAX
        return response()->json(['message' => 'Product type updated successfully.']);
    }

    public function typeDestroy(ProductType $productType)
    {

        $productType->delete();

        return redirect()->route('admin.shop')->with('success', 'Product type deleted successfully.');
    }

    public function productStore(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_product' => 'required|string',
            'stock' => 'required|integer',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'kondisi' => 'required|string',
            'category_id' => 'required|exists:product_category,id',
            'min_pemesanan' => 'required|integer',
            'bahan' => 'required|string',
            'ukuran' => 'required|string',
            'berat' => 'required|numeric',
            'warna' => 'required|string',
            'image_banner' => 'required|image',
            'image_detail_1' => 'required|image',
            'image_detail_2' => 'required|image',
            'image_detail_3' => 'required|image',
            'image_detail_4' => 'required|image',
            'type_id' => 'required|array', // Memastikan type_id adalah array
            'type_id.*' => 'exists:product_types,id',
        ]);

        // Proses menyimpan data ke database
        $product = new Product();
        $product->nama_product = $request->nama_product;
        $product->stock = $request->stock;
        $product->harga = $request->harga;
        $product->deskripsi = $request->deskripsi;
        $product->kondisi = $request->kondisi;
        $product->category_id = $request->category_id;
        $product->min_pemesanan = $request->min_pemesanan;
        $product->bahan = $request->bahan;
        $product->ukuran = $request->ukuran;
        $product->berat = $request->berat;
        $product->warna = $request->warna;

        $image_banner_path = null;
        $image_detail_1_path = null;
        $image_detail_2_path = null;
        $image_detail_3_path = null;
        $image_detail_4_path = null;

        if ($request->hasFile('image_banner')) {
            $image_banner = $request->file('image_banner');
            $image_banner_name = time() . '_' . $image_banner->getClientOriginalName();
            $image_banner_path = $image_banner->storeAs('images/shop', $image_banner_name, 'public');
        }

        if ($request->hasFile('image_detail_1')) {
            $image_detail_1 = $request->file('image_detail_1');
            $image_detail_1_name = time() . '_' . $image_detail_1->getClientOriginalName();
            $image_detail_1_path = $image_detail_1->storeAs('images/shop', $image_detail_1_name, 'public');
        }

        if ($request->hasFile('image_detail_2')) {
            $image_detail_2 = $request->file('image_detail_2');
            $image_detail_2_name = time() . '_' . $image_detail_2->getClientOriginalName();
            $image_detail_2_path = $image_detail_2->storeAs('images/shop', $image_detail_2_name, 'public');
        }

        if ($request->hasFile('image_detail_3')) {
            $image_detail_3 = $request->file('image_detail_3');
            $image_detail_3_name = time() . '_' . $image_detail_3->getClientOriginalName();
            $image_detail_3_path = $image_detail_3->storeAs('images/shop', $image_detail_3_name, 'public');
        }

        if ($request->hasFile('image_detail_4')) {
            $image_detail_4 = $request->file('image_detail_4');
            $image_detail_4_name = time() . '_' . $image_detail_4->getClientOriginalName();
            $image_detail_4_path = $image_detail_4->storeAs('images/shop', $image_detail_4_name, 'public');
        }

        $product->image_banner = $image_banner_path;
        $product->image_detail_1 = $image_detail_1_path;
        $product->image_detail_2 = $image_detail_2_path;
        $product->image_detail_3 = $image_detail_3_path;
        $product->image_detail_4 = $image_detail_4_path;

        
        $product->save();

        $product->productType()->attach($request->type_id);
        
        return redirect()->route('admin.shop')->with('success', 'Product berhasil ditambahkan.');
    }

    public function productShow($id)
    {
        $items = Product::with('productType', 'category')->findOrFail($id);

        return view('admin.shop.shop-show', compact('items'));
    }

    public function productEdit($id)
    {
        $items = Product::with('productType')->findOrFail($id);
        $productTypes = ProductType::all();
        $category = ProductCategory::all();

        return view('admin.shop.shop-edit', compact('items', 'productTypes', 'category'));
    }

    public function productDestroy(Product $product)
    {
        $product->deleteProductImages();
        $product->delete();

        return redirect()->route('admin.shop')->with('success', 'Product deleted successfully.');
    }

    public function productUpdate(Request $request, Product $product, $id)
    {
        // Validasi data
        $request->validate([
            'nama_product' => 'required|string',
            'stock' => 'required|integer',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'category_id' => 'required|exists:product_category,id',
            'kondisi' => 'required|string',
            'min_pemesanan' => 'required|integer',
            'bahan' => 'required|string',
            'ukuran' => 'required|string',
            'berat' => 'required|numeric',
            'warna' => 'required|string',
            'image_banner' => 'nullable|image',
            'image_detail_1' => 'nullable|image',
            'image_detail_2' => 'nullable|image',
            'image_detail_3' => 'nullable|image',
            'image_detail_4' => 'nullable|image',
            'type_id' => 'required|array', // Memastikan type_id adalah array
            'type_id.*' => 'exists:product_types,id', // Memastikan type_id valid dalam tabel product_types
        ]);

        $product = Product::findOrFail($id);
        // Update data produk
        $product->nama_product = $request->input('nama_product');
        $product->stock = $request->input('stock');
        $product->harga = $request->input('harga');
        $product->deskripsi = $request->input('deskripsi');
        $product->kondisi = $request->input('kondisi');
        $product->category_id = $request->input('category_id');
        $product->min_pemesanan = $request->input('min_pemesanan');
        $product->bahan = $request->input('bahan');
        $product->ukuran = $request->input('ukuran');
        $product->berat = $request->input('berat');
        $product->warna = $request->input('warna');

        // Proses pengolahan gambar jika ada yang diupload
        if ($request->hasFile('image_banner')) {
            // Hapus gambar lama jika ada
            Storage::disk('public')->delete($product->image_banner);

            // Upload gambar baru
            $image_banner = $request->file('image_banner');
            $image_banner_name = time() . '_' . $image_banner->getClientOriginalName();
            $image_banner_path = $image_banner->storeAs('images/shop', $image_banner_name, 'public');
            $product->image_banner = $image_banner_path;
        }

        if ($request->hasFile('image_detail_1')) {
            // Hapus gambar lama jika ada
            Storage::disk('public')->delete($product->image_detail_1);

            // Upload gambar baru
            $image_detail = $request->file('image_detail_1');
            $image_name = time() . '_' . $image_detail->getClientOriginalName();
            $image_detail_path = $image_detail->storeAs('images/shop', $image_name, 'public');
            $product->image_detail_1 = $image_detail_path;
        }

        if ($request->hasFile('image_detail_2')) {
            // Hapus gambar lama jika ada
            Storage::disk('public')->delete($product->image_detail_2);

            // Upload gambar baru
            $image_detail = $request->file('image_detail_2');
            $image_name = time() . '_' . $image_detail->getClientOriginalName();
            $image_detail_path = $image_detail->storeAs('images/shop', $image_name, 'public');
            $product->image_detail_2 = $image_detail_path;
        }

        if ($request->hasFile('image_detail_3')) {
            // Hapus gambar lama jika ada
            Storage::disk('public')->delete($product->image_detail_3);

            // Upload gambar baru
            $image_detail = $request->file('image_detail_3');
            $image_name = time() . '_' . $image_detail->getClientOriginalName();
            $image_detail_path = $image_detail->storeAs('images/shop', $image_name, 'public');
            $product->image_detail_3 = $image_detail_path;
        }

        if ($request->hasFile('image_detail_4')) {
            // Hapus gambar lama jika ada
            Storage::disk('public')->delete($product->image_detail_4);

            // Upload gambar baru
            $image_detail = $request->file('image_detail_4');
            $image_name = time() . '_' . $image_detail->getClientOriginalName();
            $image_detail_path = $image_detail->storeAs('images/shop', $image_name, 'public');
            $product->image_detail_4 = $image_detail_path;
        }


        // Simpan perubahan
        $product->save();

        // Sinkronisasi jenis produk
        $product->productType()->sync($request->type_id);

        return redirect()->route('admin.shop')->with('success', 'Product updated successfully.');
    }

    //Our-Collection-Shop
    public function index(Request $request)
    {
        $categories = ProductCategory::all();

        // Ambil semua produk beserta relasi kategori
        $productsQuery = Product::query();

        // Filter berdasarkan kategori jika parameter category ada
        if ($request->has('category')) {
            $productsQuery->where('category_id', $request->category);
        }

        $product = $productsQuery->get();

        return view('shop.shop-merchandise', compact('product', 'categories'));
    }

    public function detail_product($id)
    {
        $items = Product::with('productType', 'category')->findOrFail($id);
        $productLainnya = Product::where('id', '!=', $id)->get();

        return view('shop.detail-product', compact('items', 'productLainnya'));
    }

    public function checkoutCart(Request $request)
    {
        $request->session()->put('checkout_product', [
            'id' => $request->input('id'),
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
            'product_type' => $request->input('product_type'),
            'harga' => $request->input('harga'),
        ]);

        $productId = $request->id;
        Cart::where('id', $productId)->delete();

        return response()->json(['message' => 'Product saved to session']);
    }

    public function checkoutProduct(Request $request)
    {
        $request->session()->put('checkout_product', [
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
            'product_type' => $request->input('product_type'),
            'harga' => $request->input('harga'),
        ]);

        return response()->json(['message' => 'Product saved to session']);
    }

    public function checkout()
    {
        // Ambil billing address dari user yang sedang login
        $user_id = Auth::id();
        $product_id = session('checkout_product.product_id');

        $items = Product::with('productType', 'category')->findOrFail($product_id);
        $billingAddress = BillingAddress::where('user_id', $user_id)->first();

        // Tampilkan halaman checkout dengan data produk dan billing address
        return view('shop.checkout', compact('billingAddress', 'items'));
    }



    public function payment(Request $request)
    {
        $request->validate([
            'payment' => 'required|string',
            'alamat' => 'required|string',
            'harga' => 'required|string',
            'quantity' => 'required|string',
            'ongkir' => 'required|string',
        ]);

        // Simpan data ke database
        $order = new Order();
        $order->user_id = Auth::id();
        $order->payment_method = $request->input('payment');
        $order->harga = $request->input('harga');
        $order->quantity = $request->input('quantity'); 
        $order->alamat = $request->input('alamat');
        $order->ongkir = $request->input('biaya_pengiriman'); 
        $order->total_amount = $request->input('harga') * $request->input('quantity') + $request->input('biaya_pengiriman');

        $order->save();

        return response()->json(['success' => true]);
    }
}