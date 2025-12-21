@extends("Pages.layouts.master")
@section("content")
    <main class="main rtl text-right mt-5">
        <div class="page-content  order">
            <div class="step-by pr-4 pl-4">
                <h3 class="title title-simple title-step"><a href="cart.html">1. سبد خرید</a></h3>
                <h3 class="title title-simple title-step"><a href="checkout.html">2. صورت حساب</a></h3>
                <h3 class="title title-simple title-step active"><a href="order.html">3. تکمیل خرید</a></h3>
            </div>
            <div class="container">
                <div class="order-message mr-auto ml-auto" @if ($errors->any()) style="background-color:#d26e4b" @endif>
                    <div class="icon-box d-inline-flex align-items-center">
                        <div class="icon-box-icon mb-0">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                enable-background="new 0 0 50 50" xml:space="preserve">
                                <g>
                                    <path fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="bevel"
                                        stroke-miterlimit="10" d="
                                                            M33.3,3.9c-2.7-1.1-5.6-1.8-8.7-1.8c-12.3,0-22.4,10-22.4,22.4c0,12.3,10,22.4,22.4,22.4c12.3,0,22.4-10,22.4-22.4
                                                            c0-0.7,0-1.4-0.1-2.1"></path>
                                    <polyline fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="bevel"
                                        stroke-miterlimit="10" points="
                                                            48,6.9 24.4,29.8 17.2,22.3 	"></polyline>
                                </g>
                            </svg>
                        </div>
                        @if(session('success') || $errors->any())
                            @if(session('success'))
                                <div class="icon-box-content text-right">
                                    <p class="">از خرید شما سپاس گذاریم.پرداخت موفق آمیز بود.</p>
                                    <p class="mt-3"> خرید شما در انتظار ارسال است </p>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="icon-box-content text-right" style="background-color:#d26e4b">
                                    <p class=""> پرداخت موفقیت آمیز نبود</p>
                                    <?php
                                    var_dump($errors->any())
                                    ?>
                                    <p class="mt-3"></p>
                                </div>
                            @endif
                        @else
                             <div class="icon-box-content text-right">
                                    <p class="">وضعیت سفارش شما مشخص نیست</p>
                                    <p class="mt-3"></p>
                                </div>
                        @endif


                    </div>
                </div>
                <a href="/" class="btn btn-icon-right btn-dark btn-back btn-rounded btn-md mb-4 btn-checkout btn-gradient">
                    بازگشت به فروشگاه<i class="fa-light fa-angles-left"></i>
                </a>
            </div>
        </div>
    </main>
@endsection
