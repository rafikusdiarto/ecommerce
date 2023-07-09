<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\HistoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\User\CategoryUserController;
use App\Http\Controllers\User\DashboardUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/redirect', [RedirectController::class, 'index']);


// admin
Route::controller(DashboardController::class) -> group(function(){
    Route::get('/admin/dashboard', 'index')->name('index');
});

Route::controller(CategoryController::class) -> group(function(){
    Route::get('/admin/all-category', 'Index')->name('allcategory');
    Route::get('/admin/add-category', 'AddCategory')->name('addcategory');
    Route::post('/admin/store-category', 'StoreCategory')->name('storecategory');
    Route::get('/admin/edit-category/{id}', 'EditCategory')->name('editcategory');
    Route::post('/admin/update-category', 'UpdateCategory')->name('updatecategory');
    Route::get('/admin/delete-category/{id}', 'DeleteCategory')->name('deletecategory');
});

Route::controller(SubCategoryController::class) -> group(function(){
    Route::get('/admin/all-subcategory', 'Index')->name('allsubcategory');
    Route::get('/admin/add-subcategory', 'AddSubCategory')->name('addsubcategory');
    Route::post('/admin/store-subcategory', 'StoreSubCategory')->name('storesubcategory');
    Route::get('/admin/edit-subcategory/{id}', 'EditSubCategory')->name('editsubcategory');
    Route::post('/admin/update-subcategory', 'UpdateSubCategory')->name('updatesubcategory');
    Route::get('/admin/delete-subcategory/{id}', 'DeleteSubCategory')->name('deletesubcategory');
});

Route::controller(ProductController::class) -> group(function(){
    Route::get('/admin/all-product', 'Index')->name('allproduct');
    Route::get('/admin/add-product', 'AddProduct')->name('addproduct');
    Route::post('/admin/store-product', 'StoreProduct')->name('storeproduct');
    Route::get('/admin/edit-product/{id}', 'EditProduct')->name('editproduct');
    Route::post('/admin/update-product', 'UpdateProduct')->name('updateproduct');
    Route::get('/admin/delete-product/{id}', 'DeleteProduct')->name('deleteproduct');
    Route::get('/admin/edit-product-img/{id}', 'EditProductImg')->name('editproductimg');
    Route::post('/admin/update-product-img/', 'UpdateProductImg')->name('updateproductimg');
});

Route::controller(OrderController::class) -> group(function(){
    Route::get('/admin/pending-order', 'Index')->name('pendingorder');
    Route::put('/admin/pending-order/acc/{id}', 'accOrder')->name('accorder');
    Route::put('/admin/pending-order/reject/{id}', 'rejectOrder')->name('rejectorder');
});


// user
Route::get('/user',[DashboardUserController::class, 'index' ]);
Route::controller(CategoryUserController::class) -> group(function(){
    Route::get('/user/category/laptop', 'laptop')->name('laptop.show');
    Route::get('/user/category/display-desktop', 'display')->name('display.show');
    Route::get('/user/category/components', 'components')->name('components.show');
});

Route::get('/user/about', [AboutController::class, 'index']);
Route::get('/user/contact', [ContactController::class, 'index']);
Route::get('/user/my-cart', [CartController::class, 'index'])->name('mycart');
Route::post('/user/add-to-cart/{id}', [DashboardUserController::class, 'addToCart'])->name('addproductcart');
Route::get('/user/remove-cart/{id}', [DashboardUserController::class, 'removeCart'])->name('removecart');
Route::post('/user/checkout-order', [CartController::class, 'checkoutOrder'])->name('checkoutorder');
Route::get('/user/history', [HistoryController::class, 'index'])->name('history');
Route::get('/user/history/filter', [HistoryController::class, 'filter'])->name('filter');

require __DIR__.'/auth.php';
