<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WebsiteController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CategoriesController;

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

// Frontend Routes........................................
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontend');
Route::get('/features', [App\Http\Controllers\FrontendController::class, 'feature'])->name('feature');
Route::get('/pricing', [App\Http\Controllers\FrontendController::class, 'pricing'])->name('pricing');
Route::get('/faq', [App\Http\Controllers\FrontendController::class, 'faq'])->name('faq');

Auth::routes();
// Admin Routes...........................................
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin/switch-store', [App\Http\Controllers\HomeController::class, 'switchstore'])->name('new.store');
Route::get('/admin/new-store', [App\Http\Controllers\HomeController::class, 'newstore'])->name('new.store');
// Coupons Routes.....................................
Route::get('/admin/all-coupon', [CouponController::class, 'index'])->name('coupon');
Route::get('/admin/new-coupon', [CouponController::class, 'create'])->name('new.coupon');
Route::post('/admin/store-coupon', [CouponController::class, 'store'])->name('create.coupon');
Route::delete('/admin/coupons/{id}', [CouponController::class, 'destroy'])->name('destroy.coupon');
//  Category Routes...................................
Route::get('/admin/all-categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('/admin/new-categories', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/admin/store-categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::delete('/admin/categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
//  Customer Routes...................................
Route::get('/admin/all-customers', [CustomerController::class, 'index'])->name('customers');
Route::get('/admin/new-customers', [CustomerController::class, 'create'])->name('new.customers');
Route::post('/admin/store-customers', [CustomerController::class, 'store'])->name('create.customers');
Route::delete('/admin/customers/{customer}', [CustomerController::class, 'destroy'])->name('destroy.customers');
//  Review Routes.....................................
Route::get('/admin/all-reviews', [ReviewController::class, 'index'])->name('reviews');
Route::get('/admin/new-reviews', [ReviewController::class, 'create'])->name('new.reviews');
Route::post('/admin/store-reviews', [ReviewController::class, 'store'])->name('create.reviews');
Route::delete('/admin/reviews/{review}', [ReviewController::class, 'destroy'])->name('destroy.reviews');
//  Support Ticket Routes.............................
Route::get('/admin/new-ticket', [TicketController::class, 'create'])->name('new.tickets');
Route::post('/admin/store-ticket', [TicketController::class, 'store'])->name('create.tickets');
//  Product Routes.............................
Route::get('/admin/new-product', [ProductController::class, 'create'])->name('new.products');
Route::post('/admin/store-products', [ProductController::class, 'store'])->name('store.products');

// Theme Setting Routes..........................
Route::get('/admin/theme-setting', [ThemeController::class, 'index'])->name('theme.setting');

//  Website Routes.............................
Route::get('/store-website-{storeid}', [WebsiteController::class, 'store_website'])->name('store.website');



