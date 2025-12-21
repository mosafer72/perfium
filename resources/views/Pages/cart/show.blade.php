@extends("Pages.layouts.master")
@section("content")
    <div class="page-wrapper">

        <main class="main cart rtl text-right">
            <nav class="breadcrumb-nav">
                <div class="container breadcrumb-nav-wrap">
                    <ul class="breadcrumb ">
                        <li><a href="index.html"><i class="fa-light fa-house"></i></a></li>
                        <li>سبد خرید</li>
                    </ul>
                </div>
            </nav>
            <div class="page-content cat-wrap">
                <div class="step-by pr-4 pl-4">
                    <h3 class="title title-simple title-step active"><a href="cart.html">1. سبد خرید</a></h3>
                    <!-- <h3 class="title title-simple title-step"><a href="checkout.html">2. صورت حساب</a></h3> -->
                    <h3 class="title title-simple title-step"><a href="order.html">2. تکمیل خرید</a></h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 pr-lg-4">
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr>
                                        <th><span>محصول</span></th>
                                        <th></th>
                                        <th><span>قیمت</span></th>
                                        <!-- <th><span>تعداد</span></th> -->
                                        <th>قیمت بعد از تخفیف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $product)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <figure>
                                                    <a href="product.html">
                                                        <picture>
                                                            <source srcset="{{ asset($product->product->image) }}"
                                                                type="image/webp">
                                                            <img loading="lazy" decoding="async"
                                                                src="{{ asset($product->product->image) }}" width="100"
                                                                height="100" alt="product">
                                                        </picture>
                                                    </a>
                                                </figure>
                                            </td>
                                            <td class="product-name">
                                                <div class="product-name-section">
                                                    <a href="product.html">{{ $product->product->title }}</a>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">{{ number_format($product->unit_price)}} تومان</span>
                                            </td>
                                            <td class="product-quantity">
                                                <!-- <div class="input-group">
                                                                                            <button class="quantity-minus d-icon-minus"></button>
                                                                                            <input class="quantity form-control" type="number" min="1" max="1000000">
                                                                                            <button class="quantity-plus d-icon-plus"></button>
                                                                                        </div> -->
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">{{ number_format($product->unit_price * $product->qty) }}
                                                    تومان</span>
                                            </td>
                                            <td class="product-close">
                                                <a href="#" class="product-remove" title="حذف محصول">
                                                    <i class="fa-light fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="cart-actions mb-6 pt-4">
                                <a href="shop-classic-filter.html"
                                    class="btn btn-dark btn-md btn-rounded btn-icon-left btn-gradient ml-4 mb-4">
                                    ادامه خرید<i class="fa-light fa-angles-left"></i>
                                </a>
                            </div>
                            <div class="cart-coupon-box mb-8">
                                <h4 class="title coupon-title ls-m"> کد تخفیف</h4>
                                <input type="text" name="coupon_code" class="input-text form-control text-grey ls-m mb-4"
                                    id="coupon_code" value="" placeholder="سریال تخفیف را وارد کنید">
                                <button type="submit" class="btn btn-md btn-rounded btn-outline">
                                    اعمال تخفیف
                                </button>
                            </div>
                        </div>
                        @php
                            $subtotal = collect($cart)->sum(fn($i) => $i->qty * $i->unit_price);
                            $coupon = session('cart_coupon');
                            $discount = $coupon['discount'] ?? 0;
                            $payable = max($subtotal - $discount, 0) + 90000;
                        @endphp
                        <aside class="col-lg-4 sticky-sidebar-wrapper">
                            <div class="pin-wrapper" style="height: 813.109px;">
                                <div class="sticky-sidebar" data-sticky-options="{'bottom': 20}"
                                    style="border-bottom: 0px none rgb(102, 102, 102); width: 446.656px;">
                                    <div class="summary mb-4">
                                        <h3 class="summary-title">جمع سبد خرید</h3>
                                        @if ($errors->any())
                                            <div class="alert alert-warning">
                                                <ul class="m-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <table class="shipping">
                                            <tbody>
                                                <tr class="summary-subtotal">
                                                    <td>
                                                        <h4 class="summary-subtitle">جمع بعد از تخفیف</h4>
                                                    </td>
                                                    <td>
                                                        <p class="summary-subtotal-price">{{ number_format($subtotal) }}
                                                            تومان</p>
                                                    </td>
                                                </tr>
                                                <tr class="sumnary-shipping shipping-row-last">
                                                    <td colspan="2">
                                                        <h4 class="summary-subtitle">محاسبه حمل و نقل</h4>
                                                        <ul>
                                                            <li>
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="local_pickup" name="shipping"
                                                                        class="custom-control-input" checked>
                                                                    <label class="custom-control-label" for="local_pickup">
                                                                        ارسال پیشتاز ( هزینه ۹۰ هزار تومان)
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <form action="{{ route("checkout.place") }}" method="POST">
                                            @csrf
                                            <div class="shipping-address">
                                                <label>ارسال خرید به <strong>شیراز</strong></label>
                                                <div class="select-box">
                                                    <select name="province" onchange="getcities(this.value)"
                                                        class="form-control" id="state">

                                                    </select>
                                                </div>
                                                <div class="select-box">
                                                    <select name="city" class="form-control" id="city">
                                                    </select>
                                                </div>
                                                <input type="text" class="form-control" name="address" placeholder="آدرس"
                                                    value="{{ old("address", '') }}">
                                                <input type="text" class="form-control" name="postalcode"
                                                    placeholder="گد پستی" value="{{ old("postalcode") }}">
                                            </div>
                                            <table class="total">
                                                <tbody>
                                                    <tr class="summary-subtotal">
                                                        <td>
                                                            <h4 class="summary-subtitle">جمع</h4>
                                                        </td>
                                                        <td>
                                                            <p class="summary-total-price ls-s">
                                                                {{ number_format($payable) }}
                                                                تومان</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="sumbit"
                                                class="btn btn-dark btn-checkout btn-rounded btn-md btn-block btn-gradient">
                                                پرداخت
                                            </a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer appear-animate rtl text-right fadeIn appear-animation-visible"
            style="animation-duration: 1.2s;">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-8 ">
                            <a href="index.html" class="logo-footer">
                                <picture>
                                    <source srcset="images/logo-footer.webp" type="image/webp"><img
                                        src="images/logo-footer.png" alt="logo-footer" width="153" height="44">
                                </picture>
                            </a>
                            <div class="widget-newsletter-info ">
                                <ul>
                                    <li><span class="font-weight-bold ml-2">تلفن :</span><span class="">0912345678</span>
                                    </li>
                                    <li><span class="font-weight-bold ml-2">ایمیل :</span><span
                                            class="">sample@gmail.com</span></li>
                                </ul>
                            </div>
                            <!-- End FooterLogo -->
                        </div>
                        <div class="col-lg-4 widget-newsletter">
                            <form action="#" class="input-wrapper-inline mx-auto mx-lg-0">
                                <input type="email" class="form-control text-left" name="email" id="email"
                                    placeholder="آدرس ایمیل ..." required="">
                                <button class="btn btn-primary btn-rounded btn-md mr-2" type="submit">
                                    عضویت<i class="fa-light fa-angles-left"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-info">
                                <h4 class="widget-title">اطلاعات تماس</h4>
                                <ul class="widget-body ">
                                    <li>
                                        <label>تلفن:</label>
                                        <a href="tel:#">تلفن : 09112345678 </a>
                                    </li>
                                    <li>
                                        <label>ایمیل:</label>
                                        <a href="mailto:mail@sample.com">sample@mail.com</a>
                                    </li>
                                    <li>
                                        <label>آدرس :</label>
                                        <a href="#">تهران کوچه 23 </a>
                                    </li>
                                    <li>
                                        <label>روزها / ساعت کاری:</label>
                                    </li>
                                    <li>
                                        <a href="#"> دوشنبه - یکشنبه / 9:00 صبح تا 8:00 شب</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="widget">
                                <h4 class="widget-title"> حساب کاربری من</h4>
                                <ul class="widget-body ">
                                    <li>
                                        <a href="account.html"> سفارش من را پیگیری کنید</a>
                                    </li>
                                    <li>
                                        <a href="order.html">نمایش خرید </a>
                                    </li>
                                    <li>
                                        <a href="account.html">ورود</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">موردعلاقه ها</a>
                                    </li>
                                    <li>
                                        <a href="account.html">سیاست حفظ حریم خصوصی</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="widget">
                                <h4 class="widget-title">درباره ما</h4>
                                <ul class="widget-body ">
                                    <li>
                                        <a href="about.html">درباره ما</a>
                                    </li>
                                    <li>
                                        <a href="order.html"> تاریخ چه سفارشات</a>
                                    </li>
                                    <li>
                                        <a href="#">بازگشت</a>
                                    </li>
                                    <li>
                                        <a href="order.html">خدمات سفارشی</a>
                                    </li>
                                    <li>
                                        <a href="order.html">شرایط</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="widget">
                                <h4 class="widget-title">خدمات مشتری</h4>
                                <ul class="widget-body ">
                                    <li>
                                        <a href="#">روش های پرداخت</a>
                                    </li>
                                    <li>
                                        <a href="#">پرداخت 100% مطمئن!</a>
                                    </li>
                                    <li>
                                        <a href="#">محصولات برگشتی</a>
                                    </li>
                                    <li>
                                        <a href="#">پشتیبانی</a>
                                    </li>
                                    <li>
                                        <a href="#"> حمل و نقل</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-instagram pr-lg-10 mb-0 mb-md-6">
                                <h4 class="widget-title">نمادهای اعتماد</h4>
                                <figure class="widget-body row rtl">
                                    <div class="nemad-box">
                                        <picture>
                                            <source srcset="images/enemad.webp" type="image/webp"><img
                                                src="images/enemad.png" alt="نماد اعتماد عطر">
                                        </picture>
                                    </div>
                                    <div class="nemad-box">
                                        <picture>
                                            <source srcset="images/samandehi.webp" type="image/webp"><img
                                                src="images/samandehi.png" alt="نماد ساماندهی">
                                        </picture>
                                    </div>
                                </figure>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="footer-middle-main">
                    <div class="container footer-middle-wrap">
                        <div class="col-lg-4 footer-middle-main-right">
                            <h5>ما را در مجازی دنبال کنید</h5>
                        </div>
                        <div class="col-lg-6 footer-middle-main-left">
                            <div class="social-links inline-links">
                                <a href="#" class="social-link"><img src="images/social/facebook.png"></a>
                                <a href="#" class="social-link"><img src="images/social/x.png"></a>
                                <a href="#" class="social-link"><img src="images/social/instagram.png"></a>
                                <a href="#" class="social-link"><img src="images/social/envelope.png"></a>
                                <a href="#" class="social-link"><img src="images/social/whatsapp.png"></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-main">
                        <div class="widget widget-category">
                            <div class="category-box">
                                <h6 class="category-name">عطرهای مردانه</h6>
                                <a href="product.html">ادکلن&zwnj; مردانه</a>
                                <a href="product.html">ادو تویلت&zwnj; مردانه</a>
                                <a href="product.html">ادو پرفیوم&zwnj; مردانه</a>
                                <a href="product.html">عطر&zwnj; مردانه</a>
                                <a href="product.html">عطرهای لوکس&zwnj; مردانه</a>
                                <a href="product.html">عطرهای یونیسکس مردانه</a>
                            </div>
                            <div class="category-box">
                                <h6 class="category-name">عطرهای زنانه </h6>
                                <a href="product.html">ادکلن&zwnj; زنانه</a>
                                <a href="product.html">ادو تویلت&zwnj; زنانه</a>
                                <a href="product.html">ادو پرفیوم&zwnj; زنانه</a>
                                <a href="product.html">عطر&zwnj; زنانه</a>
                                <a href="product.html">عطرهای لوکس&zwnj; زنانه</a>
                                <a href="product.html">عطرهای یونیسکس زنانه</a>
                            </div>
                            <div class="category-box">
                                <h6 class="category-name">برندها</h6>
                                <a href="product.html">برندهای محبوب</a>
                                <a href="product.html">برندهای جدید</a>
                                <a href="product.html">برندهای لوکس</a>
                                <a href="product.html">برندهای ترند</a>
                                <a href="product.html">برندهای کلاسیک</a>
                            </div>
                            <div class="category-box">
                                <h6 class="category-name">عطرهای مناسبتی</h6>
                                <a href="product.html">عطرهای روزانه</a>
                                <a href="product.html">عطرهای زنانه</a>
                                <a href="product.html">عطرهای مردانه</a>
                                <a href="product.html">عطرهای نوجوان</a>
                                <a href="product.html">عطرهای کودکلن</a>
                                <a href="product.html">عطرهای رسمی</a>
                                <a href="product.html">عطرهای مهمانی</a>
                            </div>
                            <div class="category-box">
                                <h6 class="category-name">رایحه&zwnj;ها</h6>
                                <a href="product.html">رایحه چوبی</a>
                                <a href="product.html">رایحه گلی</a>
                                <a href="product.html">رایحه مرکباتی</a>
                                <a href="product.html">رایحه شرقی</a>
                            </div>
                            <div class="category-box">
                                <h6 class="category-name">پیشنهاد ویژه </h6>
                                <a href="product.html">محصولات پر فروش</a>
                                <a href="product.html">پکیج&zwnj;های هدیه</a>
                                <a href="product.html">عطرهای پیشنهادی</a>
                                <a href="product.html">عطرهای منتخب</a>
                                <a href="product.html">عطرهای دست ساز</a>
                                <a href="product.html">عطرهای ترند</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-right">
                            <figure class="payment">
                                <picture>
                                    <source srcset="images/payment.webp" type="image/webp"><img src="images/payment.png"
                                        alt="payment" width="159" height="29">
                                </picture>
                            </figure>
                        </div>
                        <div class="footer-center">
                            <p class="copyright">فروشگاه آنلاین پرفیوم © 2025 کلیه حقوق محفوظ است.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="minipopup-area"></div>
    </div>
@endsection
@section("script")
    <script>
        get_province();
        async function get_province() {
            let stateSelect = $("#state");
            const url = "https://www.iran-locations-api.ir/api/v1/fa/states";
            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`Response status: ${response.status}`);
                }
                const result = await response.json();
                $.each(result, function (i, state) {
                    stateSelect.append(
                        `<option value="${state.id}">${state.name}</option>`
                    );
                });
                console.log(result);
            } catch (error) {
                console.error(error.message);
            }
        }
        getcities(1);
        async function getcities(stateId) {
            console.log(stateId)
            let citySelect = $("#city");

            // ریست شهرها
            citySelect.text('<option value="">انتخاب شهر</option>');

            if (!stateId) return;

            const url_city = "https://www.iran-locations-api.ir/api/v1/fa/cities?state_id=" + stateId
            try {
                const response = await fetch(url_city);
                if (!response.ok) {
                    throw new Error(`Response status: ${response.status}`);
                }
                const result = await response.json();
                $.each(result, function (i, state) {
                    citySelect.append(
                        `<option value="${state.id}">${state.name}</option>`
                    );
                });
                console.log(result);
            } catch (error) {
                console.error(error.message);
            }
        };

    </script>
@endsection
