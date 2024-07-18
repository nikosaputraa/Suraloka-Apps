<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AnimalCategoryController;
use App\Http\Controllers\Admin\AnimalController;
use App\Http\Controllers\Admin\PlantsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BillingAddressController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Cart;

Route::get('/', function () {return view('landing');})->name('/');


// ============== Halaman Auth ================
// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login/shop', [AuthController::class, 'loginShop'])->name('login.shop');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::post('/login/shop', [AuthController::class, 'authenticateShop'])->name('auth.authenticateShop');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');



// ============== Halaman Admin ================
Route::get('/admin', [AnimalCategoryController::class, 'index'])->name('admin.dashboard');

//Animal-Category
Route::get('/animals', [CollectionsController::class, 'animalsCollection'])->name('animals');
Route::get('/animals/{category}', [CollectionsController::class, 'animalCategory'])->name('animals.category');
Route::post('/animal-categories', [AnimalCategoryController::class, 'store'])->name('animal-categories.store');
Route::put('/animal-categories/edit/{animalCategory}', [AnimalCategoryController::class, 'update'])->name('animal-categories.update');
Route::delete('/animal-categories/delete/{animalCategory}', [AnimalCategoryController::class, 'destroy'])->name('animal-categories.destroy');

//Animal-list
Route::post('/animal-add', [AnimalController::class, 'store'])->name('animal-add.store');
Route::get('/animals/view/{id}', [AnimalController::class, 'show'])->name('animals.show');
Route::get('/animals/edit/{id}', [AnimalController::class, 'edit'])->name('animals.edit');
Route::put('/animal/edit/{animalId}', [AnimalController::class, 'update'])->name('animal.update');
Route::delete('/animal/delete/{animal}', [AnimalController::class, 'destroy'])->name('animal.destroy');
Route::get('/animals/desc/{id}', [CollectionsController::class, 'animalDesc'])->name('animals.desc');
//Search
Route::get('/search/animals', [CollectionsController::class, 'searchAnimal'])->name('search.animals');


//Plants
Route::get('/admin-plants', [PlantsController::class, 'index'])->name('admin.plants');
Route::post('/plants-categories', [PlantsController::class, 'store'])->name('plants-categories.store');
Route::put('/plants-categories/edit/{plantsCategory}', [PlantsController::class, 'update'])->name('plants-categories.update');
Route::delete('/plants-categories/delete/{plantsCategory}', [PlantsController::class, 'destroy'])->name('plants-categories.destroy');

//Plants-list
Route::post('/plants-add', [PlantsController::class, 'plantStore'])->name('plants-add.store');
Route::get('/plants/view/{id}', [PlantsController::class, 'plantShow'])->name('plants.show');
Route::get('/plants/edit/{id}', [PlantsController::class, 'plantEdit'])->name('plants.edit');
Route::delete('/plants/delete/{plants}', [PlantsController::class, 'plantDestroy'])->name('plants.destroy');
Route::put('/plants/edit/{plantId}', [PlantsController::class, 'plantUpdate'])->name('plants.update');

Route::get('/plants', [CollectionsController::class, 'plantsCollection'])->name('plants');
Route::get('/plants/{category}', [CollectionsController::class, 'plantCategory'])->name('plants.category');
Route::get('/plants/desc/{id}', [CollectionsController::class, 'plantDesc'])->name('plants.desc');

//Map
Route::get('/download-map', [DownloadController::class, 'download'])->name('download');


// Shop
// Admin-Page
Route::get('/admin-shop', [ShopController::class, 'adminIndex'])->name('admin.shop');
Route::post('/shop-category', [ShopController::class, 'categoryStore'])->name('shop-category.store');
Route::put('/shop-category/edit/{productCategory}', [ShopController::class, 'categoryUpdate'])->name('shop-category.update');
Route::delete('/shop-category/delete/{productCategory}', [ShopController::class, 'categoryDestroy'])->name('shop-category.destroy');


Route::post('/shop-type', [ShopController::class, 'typeStore'])->name('shop-type.store');
Route::put('/shop-type/edit/{productType}', [ShopController::class, 'typeUpdate'])->name('shop-type.update');
Route::delete('/shop-type/delete/{productType}', [ShopController::class, 'typeDestroy'])->name('shop-type.destroy');

//Product-list
Route::post('/product-add', [ShopController::class, 'productStore'])->name('product.store');
Route::get('/product/view/{id}', [ShopController::class, 'productShow'])->name('shop.item.show');
Route::delete('/product/delete/{product}', [ShopController::class, 'productDestroy'])->name('shop.item.destroy');
Route::get('/product/edit/{id}', [ShopController::class, 'productEdit'])->name('shop.item.edit');
Route::put('/product/update/{id}', [ShopController::class, 'productUpdate'])->name('shop.item.update');


Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/detail-product/{id}', [ShopController::class, 'detail_product'])->middleware('auth')->name('detail-product');

//Add to Cart
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/carts', [CartController::class, 'showCart'])->name('page.cart');
Route::get('/cart/count/{user_id}', function ($user_id) {
    // Mengambil jumlah cart berdasarkan user_id
    $cartCount = Cart::where('user_id', $user_id)->count();

    // Mengembalikan JSON dengan jumlah item cart
    return response()->json(['cartCount' => $cartCount]);
})->name('cart.count');
Route::post('/checkout-cart', [ShopController::class, 'checkoutCart'])->name('checkout-cart');

Route::delete('/cart/{id}', [CartController::class, 'cartDestroy'])->name('cart.destroy');
Route::post('/checkout-product', [ShopController::class, 'checkoutProduct'])->name('checkout-product');
Route::get('/checkout-product/items', [ShopController::class, 'checkout'])->name('checkout');

//Billing Address
Route::post('/billing-address/store', [BillingAddressController::class, 'store'])->name('billing-address.store');

Route::get('/billing-address/provinsi', [BillingAddressController::class, 'getProvinsi']);
Route::get('/billing-address/kota/{provinsi_id}', [BillingAddressController::class, 'getKotaByProvinsi']);
Route::get('/billing-address/kecamatan/{kota_id}', [BillingAddressController::class, 'getKecamatanByKota']);
Route::get('/billing-address/kelurahan/{kecamatan_id}', [BillingAddressController::class, 'getKelurahanByKecamatan']);


Route::post('/payment', [ShopController::class, 'payment'])->name('payment.checkout');

