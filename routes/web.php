<?php

require_once "auth.php";
require_once "admin.php";
require_once "user.php";

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\CartCouponController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\PaymentController;


Route::get('/cart/show', [CartController::class,"show"])->name("cart.show");
Route::get('/cart/show', [CartController::class,"show"])->name("cart.show");
Route::get('/cart/{id}/add', [CartController::class,"add"])->name("cart.add");
Route::get('/cart/{id}/delete', [CartController::class,"delete"])->name("cart.delete");
Route::get('/cart_ajax/list', [CartController::class,"cart_ajaxـlist"])->name("cart.cart_ajaxـlist");



use App\Http\Controllers\Auth\OtpAuthController;

Route::middleware('guest')->group(function () {
    Route::get('/auth/phone', [OtpAuthController::class, 'showPhoneForm'])->name('otp.phone.form');
    Route::post('/auth/send',  [OtpAuthController::class, 'send'])->name('otp.send');

    Route::get('/auth/verify', [OtpAuthController::class, 'showVerifyForm'])->name('otp.verify.form');
    Route::post('/auth/verify', [OtpAuthController::class, 'verify'])->name('otp.verify');
});

Route::post('/logout', [OtpAuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::middleware('auth')->group(function () {
  Route::post('/cart/coupon/apply',  [CartCouponController::class, 'apply'])->name('cart.coupon.apply');
  Route::delete('/cart/coupon/remove', [CartCouponController::class, 'remove'])->name('cart.coupon.remove');
  // ساخت سفارش از روی سبد خرید (ایجاد order + order_items)
  Route::get('/checkout/place-order', [CheckoutController::class, 'createOrder'])
        ->name('checkout.place');
  Route::get('/payment/start/{order}', [PaymentController::class, 'start'])->name('payment.start');
  Route::match(['GET','POST'],'/payment/callback/{provider}', [PaymentController::class, 'callback'])
    ->name('payment.callback');
});



// this is for perfium
Route::get('/', [HomeController::class,"index"]);
Route::post('/admin/upload-image', [\App\Http\Controllers\Admin\UploadController::class, 'upload'])
    ->name('admin.upload.image')
    ->middleware('auth');


Route::prefix("admin/file-manager")->middleware("auth")->name("admin.fm.")->group(function () {
    Route::get("/", [\App\Http\Controllers\Admin\FileManagerController::class, "index"])->name("index");
    Route::post("/upload", [\App\Http\Controllers\Admin\FileManagerController::class, "upload"])->name("upload");
    Route::delete("/delete", [\App\Http\Controllers\Admin\FileManagerController::class, "delete"])->name("delete");
});

Route::get('/product/{slug}', [ProductController::class, 'show'])
    ->name('product.show');

// اگر قبلاً با id داشتی (اختیاری):
Route::get('/product-id/{id}', [ProductController::class, 'showById'])
    ->name('product.showById');







