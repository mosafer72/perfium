@extends("Pages.layouts.master")
@section("content")
    <main class="main rtl text-right">
        <div class="page-content">
            <section class="intro-section slider-main ltr text-right">
                <div class="container slider-wrap">
                    <div class="intro-slider animation-slider owl-carousel mb-8 mb-md-0 owl-nav-arrow owl-theme row cols-1 gutter-no"
                        data-owl-options="{
                                'items': 1,
                                'loop': true,
                                'dots': true,
                                'nav': true,
                                'autoplay': true,
                                'autoplayTimeout':300000,
                                'responsive': {
                                    '768': {
                                        'autoplay': true,
                                        'loop': true
                                    },
                                    '1450': {
                                        'autoplay': true,
                                        'nav': true
                                    }
                                }
                            }">
                        <div class="intro-slide1">
                            <div class="container intro-slide1-wrap">
                                <div class="banner row align-items-center">
                                    @foreach ($sliders as $slider )
                                        <div class="col-12 col-md-5 col-lg-6 image-item floating d-flex justify-content-center align-items-center "
                                            data-options='{"invertX":true,"invertY":true}'>
                                            <figure class="layer slide-animate" data-animation-options="{' name': 'fadeIn' , 'duration' : '1s'
                                                , 'delay' : '1s' }">
                                                <picture>
                                                    <source srcset="assets/images/intro/slide1.webp" type="image/webp"><img
                                                        loading="lazy" decoding="async" src="assets/images/intro/slide1.png"
                                                        alt="intro-burger" width="628" class="ml-auto" height="505" />
                                                </picture>
                                            </figure>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="intro-slide2">
                            <div class="container">
                                <div class="banner row align-items-center floating"
                                    data-options='{"invertX":true,"invertY":true}'>
                                    <div
                                        class="col-12 col-md-6 d-flex d-lg-block justify-content-center align-items-center  layer">
                                        <div class="banner-content mt-md-6 rtl">
                                            <h3 class="banner-title font-weight-normal  text-white slide-animate"
                                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '.7s', 'delay': '.3s'}">
                                                جدیدترین رایحه ها <br>با پرفیوم
                                            </h3>
                                            <h4 class="banner-subtitle font-primary text-yellow slide-animate slide-animate"
                                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '.7s', 'delay': '.3s'}">
                                                ترند ها و برندها
                                            </h4>
                                            <a href="shop-list-mode.html"
                                                class="btn btn-outline btn-white slide-animate mb-1"
                                                data-animation-options="{'name': 'fadeInUpShorter', 'duration': '.7s', 'delay': '.3s'}">
                                                مشاهده وانتخاب
                                                <i class="fa-light fa-angles-right"></i>
                                            </a>
                                            <div class="svg-item p-absolute">
                                                <figure class="p-absolute slide-animate"
                                                    data-animation-options="{'name': 'rollIn', 'duration': '1s', 'delay': '2s'}">
                                                    <picture>
                                                        <source srcset="assets/images/intro/2-93x63_leave.webp"
                                                            type="image/webp"><img loading="lazy" decoding="async"
                                                            src="assets/images/intro/2-93x63_leave.png"
                                                            alt="intro-slider-leave" width="93" height="63" />
                                                    </picture>
                                                </figure>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 422 339" enable-background="new 0 0 422 339"
                                                    xml:space="preserve" class="slide-animate"
                                                    data-animation-options="{'name': 'strokeAppear', 'duration': '4s', 'delay': '.5s'}">
                                                    <polyline fill="none" stroke="#2d2d2f" stroke-width="25"
                                                        stroke-miterlimit="10" points="0.4,13.2 407.9,13.2 407.9,327.2
                                                        13.1,325 11.6,3.6 " />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 image-item slide-animate"
                                        data-animation-options="{'name': 'fadeIn', 'duration': '.7s', 'delay': '.8s'}">
                                        <figure
                                            class="pl-2 d-flex d-lg-block justify-content-center align-items-center mb-0 mb-lg-6">
                                            <picture>
                                                <source srcset="assets/images/intro/slide2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/intro/slide2.png"
                                                    alt="intro" width="594" height="667" />
                                            </picture>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="category-main">
                <div class="container category-main-wrap">
                    <div class="owl-carousel owl-theme owl-shadow-carousel row cols-xl-7 cols-lg-6 cols-md-5 cols-xs-3 cols-1"
                        data-owl-options="{
                                         'rtl':true,
                                        'nav': false,
                                        'dots': false,
                                        'items': 7,
                                        'loop': true,
                                        'autoplay': true,
                                        'margin':  20,
                                        'responsive': {
                                            '0': {
                                                'items': 3
                                            },
                                            '480': {
                                                'items': 4
                                            },
                                            '768': {
                                                'items': 5
                                            },
                                            '992': {
                                                'items': 6
                                            },
                                            '1200': {
                                                'items':7,
                                                'dots': false
                                            }
                                        }
                                    }">
                        <div class="category category-ellipse">
                            <a href="#">
                                <figure class="category-media">
                                    <picture>
                                        <source srcset="assets/images/category/cat-1.webp" type="image/webp"><img
                                            loading="lazy" decoding="async" src="assets/images/category/cat-1.png"
                                            alt="category" width="196" height="196" />
                                    </picture>
                                </figure>
                            </a>
                            <div class="category-content rtl">
                                <h4 class="category-name"><a href="shop-classic-filter.html">عطر مردانه</a></h4>
                                <span class="category-count">
                                    <span>در تمامی سبک ها</span>
                                </span>
                            </div>
                        </div>
                        <div class="category category-ellipse">
                            <a href="#">
                                <figure class="category-media">
                                    <picture>
                                        <source srcset="assets/images/category/cat-2.webp" type="image/webp"><img
                                            loading="lazy" decoding="async" src="assets/images/category/cat-2.png"
                                            alt="category" width="196" height="196" />
                                    </picture>
                                </figure>
                            </a>
                            <div class="category-content rtl">
                                <h4 class="category-name"><a href="shop-classic-filter.html">عطر زنانه</a></h4>
                                <span class="category-count">
                                    <span>در تمامی سبک ها</span>
                                </span>
                            </div>
                        </div>
                        <div class="category category-ellipse">
                            <a href="#">
                                <figure class="category-media">
                                    <picture>
                                        <source srcset="assets/images/category/cat-3.webp" type="image/webp"><img
                                            loading="lazy" decoding="async" src="assets/images/category/cat-3.png"
                                            alt="category" width="196" height="196" />
                                    </picture>
                                </figure>
                            </a>
                            <div class="category-content rtl">
                                <h4 class="category-name"><a href="shop-classic-filter.html">عطر اماراتی </a></h4>
                                <span class="category-count">
                                    <span>در تمامی سبک ها</span>
                                </span>
                            </div>
                        </div>
                        <div class="category category-ellipse">
                            <a href="#">
                                <figure class="category-media">
                                    <picture>
                                        <source srcset="assets/images/category/cat-4.webp" type="image/webp"><img
                                            loading="lazy" decoding="async" src="assets/images/category/cat-4.png"
                                            alt="category" width="196" height="196" />
                                    </picture>
                                </figure>
                            </a>
                            <div class="category-content rtl">
                                <h4 class="category-name"><a href="shop-classic-filter.html">اسانس عطر</a></h4>
                                <span class="category-count">
                                    <span>در تمامی سبک ها</span>
                                </span>
                            </div>
                        </div>
                        <div class="category category-ellipse">
                            <a href="#">
                                <figure class="category-media">
                                    <picture>
                                        <source srcset="assets/images/category/cat-5.webp" type="image/webp"><img
                                            loading="lazy" decoding="async" src="assets/images/category/cat-5.png"
                                            alt="category" width="196" height="196" />
                                    </picture>
                                </figure>
                            </a>
                            <div class="category-content rtl">
                                <h4 class="category-name"><a href="shop-classic-filter.html">عطر نوستالژی</a></h4>
                                <span class="category-count">
                                    <span>در تمامی سبک ها</span>
                                </span>
                            </div>
                        </div>
                        <div class="category category-ellipse">
                            <a href="#">
                                <figure class="category-media">
                                    <picture>
                                        <source srcset="assets/images/category/cat-6.webp" type="image/webp"><img
                                            loading="lazy" decoding="async" src="assets/images/category/cat-6.png"
                                            alt="category" width="196" height="196" />
                                    </picture>
                                </figure>
                            </a>
                            <div class="category-content rtl">
                                <h4 class="category-name"><a href="shop-classic-filter.html">عطر ترند </a></h4>
                                <span class="category-count">
                                    <span>در تمامی سبک ها</span>
                                </span>
                            </div>
                        </div>
                        <div class="category category-ellipse">
                            <a href="#">
                                <figure class="category-media">
                                    <picture>
                                        <source srcset="assets/images/category/cat-7.webp" type="image/webp"><img
                                            loading="lazy" decoding="async" src="assets/images/category/cat-7.png"
                                            alt="category" width="196" height="196" />
                                    </picture>
                                </figure>
                            </a>
                            <div class="category-content rtl">
                                <h4 class="category-name"><a href="shop-classic-filter.html">عطر بچه گانه</a></h4>
                                <span class="category-count">
                                    <span>در تمامی سبک ها</span>
                                </span>
                            </div>
                        </div>
                        <div class="category category-ellipse">
                            <a href="#">
                                <figure class="category-media">
                                    <picture>
                                        <source srcset="assets/images/category/cat-8.webp" type="image/webp"><img
                                            loading="lazy" decoding="async" src="assets/images/category/cat-8.png"
                                            alt="category" width="196" height="196" />
                                    </picture>
                                </figure>
                            </a>
                            <div class="category-content rtl">
                                <h4 class="category-name">
                                    <a href="shop-classic-filter.html">عطر نوجوان </a>
                                </h4>
                                <span class="category-count">
                                    <span>در تمامی سبک ها</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="discount-main">
                <div class="title-wrapper">
                    <div class="container-fluid title-wrap">
                        <h2 class="title">پیشنهاد پرفیوم </h2>
                        <h5 class="title-info">
                            <span></span>
                            <picture>
                                <source srcset="assets/images/perfume/15.webp" type="image/webp"><img
                                    src="assets/images/perfume/15.png">
                            </picture>
                            <span></span>
                        </h5>
                    </div>
                </div>
                <div class="container discount-wrap">
                    <div class="col-xl-2  discount-right">
                        <picture>
                            <source srcset="assets/images/discount.webp" type="image/webp"><img loading="lazy"
                                decoding="async" src="assets/images/discount.png" alt="Alternate Text" />
                        </picture>
                    </div>
                    <div class="col-xl-10 col-lg-12 discount-left">
                        <div class="owl-carousel owl-theme owl-nav-inner row appear-animate"
                            data-animation-options="{'name': 'fadeIn'}" data-owl-options="{
                                            'rtl':true,
                                            'nav': true,
                                            'dots': false,
                                            'loop': true,
                                            'autoplay': true,
                                            'margin': 20,
                                            'responsive': {
                                                '0': {
                                                    'items': 1
                                                },
                                                '576': {
                                                    'items': 2
                                                },
                                                '768': {
                                                    'items':2
                                                },
                                                '992': {
                                                    'items':3
                                                },
                                                '1200': {
                                                    'items': 3
                                                },
                                                '1600': {
                                                    'items': 4
                                                }
                                            }
                                        }">
                            <div class="product text-center cart-full">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <picture>
                                            <source srcset="assets/images/product/1.webp" type="image/webp"><img
                                                loading="lazy" decoding="async" src="assets/images/product/1.jpg"
                                                alt="product" width="240" height="270">
                                        </picture>
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی">
                                            <i class="fa-light fa-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="fa-light fa-scale-balanced"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details rtl">
                                    <h3 class="product-name">
                                        <a href="product.html"> باربری مردانه</a>
                                    </h3>
                                    <div class="product-price">
                                        <del class="old-price"> 4,300,000 تومان</del> <ins class="new-price"> 2,000,000
                                            تومان</ins>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( از 16نظر )</a>
                                    </div>
                                    <a href="product.html" class="btn btn-md btn-block btn-gradient" data-toggle="modal"
                                        data-target="#addCartModal" title="اضافه به خرید">مشاهده و انتخاب<i
                                            class="fa-light fa-basket-shopping-simple"></i></a>
                                </div>
                            </div>
                            <div class="product text-center cart-full">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <picture>
                                            <source srcset="assets/images/product/2.webp" type="image/webp"><img
                                                loading="lazy" decoding="async" src="assets/images/product/2.jpg"
                                                alt="product" width="240" height="270">
                                        </picture>
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی">
                                            <i class="fa-light fa-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="fa-light fa-scale-balanced"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details rtl">
                                    <h3 class="product-name">
                                        <a href="product.html">بولگاری</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price"> 3,300,000 تومان</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:80%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( از 20 نظر )</a>
                                    </div>
                                    <a href="product.html" class="btn btn-md btn-block btn-gradient " data-toggle="modal"
                                        data-target="#addCartModal" title="اضافه به خرید">مشاهده و انتخاب<i
                                            class="fa-light fa-basket-shopping-simple"></i></a>
                                </div>
                            </div>
                            <div class="product product-varialble text-center cart-full">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <picture>
                                            <source srcset="assets/images/product/3.webp" type="image/webp"><img
                                                loading="lazy" decoding="async" src="assets/images/product/3.jpg"
                                                alt="product" width="240" height="270">
                                        </picture>
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی">
                                            <i class="fa-light fa-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="fa-light fa-scale-balanced"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details rtl">
                                    <h3 class="product-name">
                                        <a href="product.html"> کالوین کلین</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price"> 300,000 تومان</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( از 18 نظر )</a>
                                    </div>
                                    <a href="product.html" class="btn btn-md btn-block btn-gradient" data-toggle="modal"
                                        data-target="#addCartModal" title="اضافه به خرید">مشاهده و انتخاب<i
                                            class="fa-light fa-basket-shopping-simple"></i></a>
                                </div>
                            </div>
                            <div class="product text-center cart-full">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <picture>
                                            <source srcset="assets/images/product/4.webp" type="image/webp"><img
                                                loading="lazy" decoding="async" src="assets/images/product/4.jpg"
                                                alt="product" width="240" height="270">
                                        </picture>
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی">
                                            <i class="fa-light fa-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="fa-light fa-scale-balanced"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details rtl">
                                    <h3 class="product-name">
                                        <a href="product.html">شنل زنانه </a>
                                    </h3>
                                    <div class="product-price">
                                        <del class="old-price"> 4,300,000 تومان</del><ins class="new-price"> 3,300,000
                                            تومان</ins>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( از 20 نظر )</a>
                                    </div>
                                    <a href="product.html" class="btn btn-md btn-block btn-gradient" data-toggle="modal"
                                        data-target="#addCartModal" title="اضافه به خرید">مشاهده و انتخاب<i
                                            class="fa-light fa-basket-shopping-simple"></i></a>
                                </div>
                            </div>
                            <div class="product text-center cart-full">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <picture>
                                            <source srcset="assets/images/product/5.webp" type="image/webp"><img
                                                loading="lazy" decoding="async" src="assets/images/product/5.jpg"
                                                alt="product" width="240" height="270">
                                        </picture>
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی">
                                            <i class="fa-light fa-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="fa-light fa-scale-balanced"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details rtl">
                                    <h3 class="product-name">
                                        <a href="product.html">کرید زنانه</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price"> 2,000,000 تومان</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( از 16نظر )</a>
                                    </div>
                                    <a href="product.html" class="btn btn-md btn-block btn-gradient" data-toggle="modal"
                                        data-target="#addCartModal" title="اضافه به خرید">مشاهده و انتخاب<i
                                            class="fa-light fa-basket-shopping-simple"></i></a>
                                </div>
                            </div>
                            <div class="product product-varialble text-center cart-full">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <picture>
                                            <source srcset="assets/images/product/3.webp" type="image/webp"><img
                                                loading="lazy" decoding="async" src="assets/images/product/3.jpg"
                                                alt="product" width="240" height="270">
                                        </picture>
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی">
                                            <i class="fa-light fa-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare">
                                            <i class="fa-light fa-scale-balanced"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="product-details rtl">
                                    <h3 class="product-name">
                                        <a href="product.html">دیور </a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price"> 300,000 تومان</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product.html" class="rating-reviews">( از 18 نظر )</a>
                                    </div>
                                    <a href="product.html" class="btn btn-md btn-block btn-gradient" data-toggle="modal"
                                        data-target="#addCartModal" title="اضافه به خرید">مشاهده و انتخاب<i
                                            class="fa-light fa-basket-shopping-simple"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="banner-main">
                <div class="container banner-wrap">
                    <div class="banner-grid-3cols row cols-xl-4 cols-lg-2 cols-md-2 cols-1 justify-content-center">
                        <div class="banner banner-fixed content-middle banner-radius mb-4 appear-animate"
                            data-animation-options="{
                   'name': 'fadeInLeftShorter', 'duration': '1s'
               }">
                            <figure class="bg-blue">
                                <picture>
                                    <source srcset="assets/images/1.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/1.png" alt="Banner" />
                                </picture>
                            </figure>
                            <div class="banner-content rtl">
                                <h4 class="banner-subtitle text-white font-weight-normal ls-normal">
                                    تخفیف این هفته
                                </h4>
                                <h3 class="banner-title  text-white font-weight-semi-bold ls-m">
                                    عطرهای زنانه <br>
                                    <span class="font-weight-normal text-white text-normal">بولگاری</span>
                                </h3>
                                <a href="#" class="btn btn-md btn-block btn-gradient">
                                    مشاهده <i class="fa-light fa-angles-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="banner banner-fixed content-middle banner-radius mb-4 appear-animate"
                            data-animation-options="{
                   'name': 'fadeIn'
               }">
                            <figure class="bg-orange">
                                <picture>
                                    <source srcset="assets/images/2.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/2.png" alt="Banner" />
                                </picture>
                            </figure>
                            <div class="banner-content rtl">
                                <h4 class="banner-subtitle text-white font-weight-normal ls-normal">پرفروش محصول این هفته
                                </h4>
                                <h3 class="banner-title text-white  font-weight-semi-bold ls-m">
                                    عطر مردانه <br>
                                    <span class="font-weight-normal">کالوین</span>
                                </h3>
                                <a href="#" class="btn btn-md btn-block btn-gradient">
                                    مشاهده <i class="fa-light fa-angles-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="banner banner-fixed content-middle banner-radius mb-4 appear-animate"
                            data-animation-options="{
                   'name': 'fadeInRightShorter', 'duration': '1s'
               }">
                            <figure class="bg-purple">
                                <picture>
                                    <source srcset="assets/images/3.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/3.png" alt="Banner" />
                                </picture>
                            </figure>
                            <div class="banner-content rtl">
                                <h4 class="banner-subtitle text-white font-weight-normal ls-normal">
                                    ترند این هفته
                                </h4>
                                <h3 class="banner-title  font-weight-semi-bold text-white ls-m">
                                    عطر زنانه <br>
                                    <span class="font-weight-normal">شنل </span>
                                </h3>
                                <a href="#" class="btn btn-md btn-block btn-gradient">
                                    مشاهده <i class="fa-light fa-angles-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="banner banner-fixed content-middle banner-radius mb-4 appear-animate"
                            data-animation-options="{
                   'name': 'fadeInRightShorter', 'duration': '1s'
               }">
                            <figure class="bg-red">
                                <picture>
                                    <source srcset="assets/images/5.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/5.png" alt="Banner" />
                                </picture>
                            </figure>
                            <div class="banner-content rtl">
                                <h4 class="banner-subtitle text-white font-weight-normal ls-normal">
                                    محبوب ترین این هفته
                                </h4>
                                <h3 class="banner-title  text-white font-weight-semi-bold ls-m">
                                    عطر نوجوان <br>
                                    <span class="font-weight-normal">کرید </span>
                                </h3>
                                <a href="#" class="btn btn-md btn-block btn-gradient">
                                    مشاهده <i class="fa-light fa-angles-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="brand-main">
                <div class="container brand-wrapper">
                    <div class="title-wrapper">
                        <div class="container-fluid title-wrap">
                            <h2 class="title">برندهای ما </h2>
                            <h5 class="title-info">
                                <span></span>
                                <picture>
                                    <source srcset="assets/images/perfume/15.webp" type="image/webp"><img
                                        src="assets/images/perfume/15.png">
                                </picture>
                                <span></span>
                            </h5>
                        </div>
                    </div>
                    <div class="row cols-xl-6 cols-md-4 cols-sm-3 cols-2 gutter-xs">
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-1.webp" type="image/webp">
                                    <img loading="lazy" decoding="async" src="assets/images/brand/brand-1.png" alt="Brand"
                                        width="109" height="46" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-2.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/brand/brand-2.png" alt="Brand" width="104"
                                        height="56" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-3.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/brand/brand-3.png" alt="Brand" width="117"
                                        height="31" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-4.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/brand/brand-4.png" alt="Brand" width="113"
                                        height="36" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-5.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/brand/brand-5.png" alt="Brand" width="139"
                                        height="58" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-6.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/brand/brand-6.png" alt="Brand" width="123"
                                        height="36" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-7.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/brand/brand-7.png" alt="Brand" width="99"
                                        height="38" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-8.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/brand/brand-8.png" alt="Brand" width="75"
                                        height="31" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-9.webp" type="image/webp">
                                    <img loading="lazy" decoding="async" src="assets/images/brand/brand-9.png" alt="Brand"
                                        width="142" height="27" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-10.webp" type="image/webp">
                                    <img loading="lazy" decoding="async" src="assets/images/brand/brand-10.png" alt="Brand"
                                        width="73" height="45" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-11.webp" type="image/webp">
                                    <img loading="lazy" decoding="async" src="assets/images/brand/brand-11.png" alt="Brand"
                                        width="100" height="35" />
                                </picture>
                            </figure>
                        </div>
                        <div class="image-wrap">
                            <figure>
                                <picture>
                                    <source srcset="assets/images/brand/brand-12.webp" type="image/webp">
                                    <img loading="lazy" decoding="async" src="assets/images/brand/brand-12.png" alt="Brand"
                                        width="121" height="37" />
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab-main">
                <div class="title-wrapper">
                    <div class="container-fluid title-wrap">
                        <h2 class="title">تخفیف پرفیوم </h2>
                        <h5 class="title-info">
                            <span></span>
                            <picture>
                                <source srcset="assets/images/perfume/15.webp" type="image/webp"><img
                                    src="assets/images/perfume/15.png">
                            </picture>
                            <span></span>
                        </h5>
                    </div>
                </div>
                <div class="container tab-wrap">
                    <div class="row ">
                        <div class="tab tab-vertical tab-nav-solid code-content">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab7-1"> لالیک انکر نویر </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab7-2">بلو شنل ادوپرفیوم </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab7-3">ادکلن تق هرمس </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab7-4">مارلی پگاسوس </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab7-5">ورساچه پور هوم </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab7-6">میسون فرانسیس کورکجان </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab7-7">کلایو کریستین ایکس مردانه </a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-main">
                                <div class="tab-pane active" id="tab7-1">
                                    <div class="col-lg-6 col-md-5 tab-content-right">
                                        <picture>
                                            <source srcset="assets/images/12.webp" type="image/webp"><img loading="lazy"
                                                decoding="async" src="assets/images/12.png" />
                                        </picture>
                                    </div>
                                    <div class="col-lg-6 col-md-7 tab-content-left">
                                        <span class="tab-discount">35% تخفیف</span>
                                        <h3>3،500،000 تومان</h3>
                                        <h2>عطر اورجینال گوچی</h2>
                                        <ul class="list list-type-check mb-4">
                                            <li><i class="fa-light fa-badge-check"></i>جنسیت : زنانه و مردانه</li>
                                            <li><i class="fa-light fa-badge-check"></i>طبع : تلخ</li>
                                            <li><i class="fa-light fa-badge-check"></i>فصل : فصول سرد</li>
                                            <li><i class="fa-light fa-badge-check"></i>ماندگاری : 2 روز</li>
                                            <li><i class="fa-light fa-badge-check"></i>پخش : 1 روز </li>
                                        </ul>
                                        <a href="#"
                                            class="btn btn-dark btn-rounded width-half btn-md btn-block btn-gradient"
                                            data-toggle="modal" data-target="#addCartModal" title="اضافه به خرید">مشاهده و
                                            انتخاب<i class="fa-light fa-basket-shopping-simple"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7-2">
                                    <div class="col-lg-6 col-md-5 tab-content-right">
                                        <picture>
                                            <source srcset="assets/images/13.webp" type="image/webp"><img loading="lazy"
                                                decoding="async" src="assets/images/13.png" />
                                        </picture>
                                    </div>
                                    <div class="col-lg-6 col-md-7 tab-content-left">
                                        <span class="tab-discount">35% تخفیف</span>
                                        <h3>3،500،000 تومان</h3>
                                        <h2>عطر اورجینال گوچی</h2>
                                        <ul class="list list-type-check mb-4">
                                            <li><i class="fa-light fa-badge-check"></i>جنسیت : زنانه و مردانه</li>
                                            <li><i class="fa-light fa-badge-check"></i>طبع : تلخ</li>
                                            <li><i class="fa-light fa-badge-check"></i>فصل : فصول سرد</li>
                                            <li><i class="fa-light fa-badge-check"></i>ماندگاری : 2 روز</li>
                                            <li><i class="fa-light fa-badge-check"></i>پخش : 1 روز </li>
                                        </ul>
                                        <a href="#"
                                            class="btn btn-dark btn-rounded width-half btn-md btn-block btn-gradient"
                                            data-toggle="modal" data-target="#addCartModal" title="اضافه به خرید">مشاهده و
                                            انتخاب<i class="fa-light fa-basket-shopping-simple"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7-3">
                                    <div class="col-lg-6 col-md-5 tab-content-right">
                                        <picture>
                                            <source srcset="assets/images/14.webp" type="image/webp"><img loading="lazy"
                                                decoding="async" src="assets/images/14.png" />
                                        </picture>
                                    </div>
                                    <div class="col-lg-6 col-md-7 tab-content-left">
                                        <span class="tab-discount">35% تخفیف</span>
                                        <h3>3،500،000 تومان</h3>
                                        <h2>عطر اورجینال گوچی</h2>
                                        <ul class="list list-type-check mb-4">
                                            <li><i class="fa-light fa-badge-check"></i>جنسیت : زنانه و مردانه</li>
                                            <li><i class="fa-light fa-badge-check"></i>طبع : تلخ</li>
                                            <li><i class="fa-light fa-badge-check"></i>فصل : فصول سرد</li>
                                            <li><i class="fa-light fa-badge-check"></i>ماندگاری : 2 روز</li>
                                            <li><i class="fa-light fa-badge-check"></i>پخش : 1 روز </li>
                                        </ul>
                                        <a href="#"
                                            class="btn btn-dark btn-rounded width-half btn-md btn-block btn-gradient"
                                            data-toggle="modal" data-target="#addCartModal" title="اضافه به خرید">مشاهده و
                                            انتخاب<i class="fa-light fa-basket-shopping-simple"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7-4">
                                    <div class="col-lg-6 col-md-5 tab-content-right">
                                        <picture>
                                            <source srcset="assets/images/15.webp" type="image/webp"><img loading="lazy"
                                                decoding="async" src="assets/images/15.png" />
                                        </picture>
                                    </div>
                                    <div class="col-lg-6 col-md-7 tab-content-left">
                                        <span class="tab-discount">35% تخفیف</span>
                                        <h3>3،500،000 تومان</h3>
                                        <h2>عطر اورجینال گوچی</h2>
                                        <ul class="list list-type-check mb-4">
                                            <li><i class="fa-light fa-badge-check"></i>جنسیت : زنانه و مردانه</li>
                                            <li><i class="fa-light fa-badge-check"></i>طبع : تلخ</li>
                                            <li><i class="fa-light fa-badge-check"></i>فصل : فصول سرد</li>
                                            <li><i class="fa-light fa-badge-check"></i>ماندگاری : 2 روز</li>
                                            <li><i class="fa-light fa-badge-check"></i>پخش : 1 روز </li>
                                        </ul>
                                        <a href="#"
                                            class="btn btn-dark btn-rounded width-half btn-md btn-block btn-gradient"
                                            data-toggle="modal" data-target="#addCartModal" title="اضافه به خرید">مشاهده و
                                            انتخاب<i class="fa-light fa-basket-shopping-simple"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7-5">
                                    <div class="col-lg-6 col-md-5 tab-content-right">
                                        <picture>
                                            <source srcset="assets/images/16.webp" type="image/webp"><img loading="lazy"
                                                decoding="async" src="assets/images/16.png" />
                                        </picture>
                                    </div>
                                    <div class="col-lg-6 col-md-7 tab-content-left">
                                        <span class="tab-discount">35% تخفیف</span>
                                        <h3>3،500،000 تومان</h3>
                                        <h2>عطر اورجینال گوچی</h2>
                                        <ul class="list list-type-check mb-4">
                                            <li><i class="fa-light fa-badge-check"></i>جنسیت : زنانه و مردانه</li>
                                            <li><i class="fa-light fa-badge-check"></i>طبع : تلخ</li>
                                            <li><i class="fa-light fa-badge-check"></i>فصل : فصول سرد</li>
                                            <li><i class="fa-light fa-badge-check"></i>ماندگاری : 2 روز</li>
                                            <li><i class="fa-light fa-badge-check"></i>پخش : 1 روز </li>
                                        </ul>
                                        <a href="#"
                                            class="btn btn-dark btn-rounded width-half btn-md btn-block btn-gradient"
                                            data-toggle="modal" data-target="#addCartModal" title="اضافه به خرید">مشاهده و
                                            انتخاب<i class="fa-light fa-basket-shopping-simple"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7-6">
                                    <div class="col-lg-6 col-md-5 tab-content-right">
                                        <picture>
                                            <source srcset="assets/images/17.webp" type="image/webp"><img loading="lazy"
                                                decoding="async" src="assets/images/17.png" />
                                        </picture>
                                    </div>
                                    <div class="col-lg-6 col-md-7 tab-content-left">
                                        <span class="tab-discount">35% تخفیف</span>
                                        <h3>3،500،000 تومان</h3>
                                        <h2>عطر اورجینال گوچی</h2>
                                        <ul class="list list-type-check mb-4">
                                            <li><i class="fa-light fa-badge-check"></i>جنسیت : زنانه و مردانه</li>
                                            <li><i class="fa-light fa-badge-check"></i>طبع : تلخ</li>
                                            <li><i class="fa-light fa-badge-check"></i>فصل : فصول سرد</li>
                                            <li><i class="fa-light fa-badge-check"></i>ماندگاری : 2 روز</li>
                                            <li><i class="fa-light fa-badge-check"></i>پخش : 1 روز </li>
                                        </ul>
                                        <a href="#"
                                            class="btn btn-dark btn-rounded width-half btn-md btn-block btn-gradient"
                                            data-toggle="modal" data-target="#addCartModal" title="اضافه به خرید">مشاهده و
                                            انتخاب<i class="fa-light fa-basket-shopping-simple"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7-7">
                                    <div class="col-lg-6 col-md-5 tab-content-right">
                                        <picture>
                                            <source srcset="assets/images/20.webp" type="image/webp"><img loading="lazy"
                                                decoding="async" src="assets/images/20.png" />
                                        </picture>
                                    </div>
                                    <div class="col-lg-6 col-md-7 tab-content-left">
                                        <span class="tab-discount">35% تخفیف</span>
                                        <h3>3،500،000 تومان</h3>
                                        <h2>عطر اورجینال گوچی</h2>
                                        <ul class="list list-type-check mb-4">
                                            <li><i class="fa-light fa-badge-check"></i>جنسیت : زنانه و مردانه</li>
                                            <li><i class="fa-light fa-badge-check"></i>طبع : تلخ</li>
                                            <li><i class="fa-light fa-badge-check"></i>فصل : فصول سرد</li>
                                            <li><i class="fa-light fa-badge-check"></i>ماندگاری : 2 روز</li>
                                            <li><i class="fa-light fa-badge-check"></i>پخش : 1 روز </li>
                                        </ul>
                                        <a href="#"
                                            class="btn btn-dark btn-rounded width-half btn-md btn-block btn-gradient"
                                            data-toggle="modal" data-target="#addCartModal" title="اضافه به خرید">مشاهده و
                                            انتخاب<i class="fa-light fa-basket-shopping-simple"></i></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab7-3">
                                    <div class="col-lg-6 col-md-5 tab-content-right">
                                        <picture>
                                            <source srcset="assets/images/19.webp" type="image/webp"><img loading="lazy"
                                                decoding="async" src="assets/images/19.png" />
                                        </picture>
                                    </div>
                                    <div class="col-lg-6 col-md-7 tab-content-left">
                                        <span class="tab-discount">35% تخفیف</span>
                                        <h3>3،500،000 تومان</h3>
                                        <h2>عطر اورجینال گوچی</h2>
                                        <ul class="list list-type-check mb-4">
                                            <li><i class="fa-light fa-badge-check"></i>جنسیت : زنانه و مردانه</li>
                                            <li><i class="fa-light fa-badge-check"></i>طبع : تلخ</li>
                                            <li><i class="fa-light fa-badge-check"></i>فصل : فصول سرد</li>
                                            <li><i class="fa-light fa-badge-check"></i>ماندگاری : 2 روز</li>
                                            <li><i class="fa-light fa-badge-check"></i>پخش : 1 روز </li>
                                        </ul>
                                        <a href="#"
                                            class="btn btn-dark btn-rounded width-half btn-md btn-block btn-gradient"
                                            data-toggle="modal" data-target="#addCartModal" title="اضافه به خرید">مشاهده و
                                            انتخاب<i class="fa-light fa-basket-shopping-simple"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="banner-2">
                <div class="container banner-2-wrap">
                    <div class="banner-grid-2cols row cols-sm-2 gutter-lg">
                        <div class="banner banner-fixed banner-fixed-right content-middle appear-animate"
                            data-animation-options="{
                                    'name': 'fadeInLeftShorter', 'duration': '1s'
                                }">
                            <figure class="bg-green">
                                <picture>
                                    <source srcset="assets/images/banner1.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/banner1.png" alt="Banner" />
                                </picture>
                            </figure>
                            <div class="banner-content rtl">
                                <h4 class="banner-subtitle font-weight-normal ls-normal text-white">
                                    هدیه این هفته
                                </h4>
                                <h3 class="banner-title font-weight-semi-bold  ls-m mb-3 text-white ">
                                    %20 تخفیف
                                </h3>
                                <hr class="divider border-no">
                                <div class="banner-price-info font-weight-normal text-white">
                                    با خرید بالای <span class="font-weight-bold text-secondary ml-1 ls-m"> 4,300,000
                                        تومان</span>
                                </div>
                                <a href="#" class="btn btn-dark btn-rounded btn-md btn-gradient mt-4">
                                    مشاهده <i class="fa-light fa-angles-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="banner banner-fixed banner-fixed-left content-middle appear-animate"
                            data-animation-options="{
                                    'name': 'fadeInRightShorter', 'duration': '1s'
                                }">
                            <figure class="border-green">
                                <picture>
                                    <source srcset="assets/images/banner2.webp" type="image/webp"><img loading="lazy"
                                        decoding="async" src="assets/images/banner2.png" alt="Banner" />
                                </picture>
                            </figure>
                            <div class="banner-content rtl">
                                <h4 class="banner-subtitle text-body font-weight-normal ls-normal">فروش آخر سال</h4>
                                <h3 class="banner-title text-body font-weight-semi-bold  ls-m mb-3">
                                    تمامی عطر ها
                                </h3>
                                <hr class="divider border-no bg-light">
                                <div class="banner-price-info font-weight-normal text-body">
                                    شروع قیمت از<span class="font-weight-bold text-secondary ml-1 ls-m"> 1,300,000
                                        تومان</span>
                                </div>
                                <a href="#" class="btn btn-dark btn-rounded btn-md btn-gradient mt-4">
                                    مشاهده <i class="fa-light fa-angles-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="select-main">
                <div class="container select-wrap">
                    <div class="title-wrapper d-flex justify-content-between flex-wrap mb-3 pt-6 appear-animate"
                        data-animation-options="{'name': 'fadeIn'}">
                        <h2 class="title d-block text-right mr-4">
                            محصولات منتخب<br>
                            <span class="d-block font-weight-normal text-body text-normal ls-normal">
                                لیست محصولاتی که این هفته بیشترین محبوبیت را داشته اند .
                            </span>
                        </h2>
                        <div class="tab tab-nav-boxed">
                            <ul class="nav nav-tabs border-no">
                                <li class="nav-item">
                                    <a href="#tab-1" class="nav-link active"> جدیدترین ها</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-2" class="nav-link">ترند ها</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-3" class="nav-link">پرفروش ها</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-4" class="nav-link nav-more">نمایش همه<i
                                            class="fa-light fa-arrow-left"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content appear-animate" data-animation-options="{'name': 'fadeIn'}">
                        <div class="tab-pane active" id="tab-1">
                            <div class="owl-carousel owl-theme row cols-xl-5 cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                                          'loop': true,
                                          'dots': true,
                                          'autoplay': true,
                                          'rtl':true,
                                          'nav': true,
                                          'dots': true,
                                          'margin': 20,
                                          'responsive': {
                                            '0': {
                                                'items': 1
                                            },
                                            '576': {
                                                'items': 2
                                            },
                                            '768': {
                                                'items': 3
                                            },
                                            '992': {
                                                'items': 3
                                            },
                                            '1200': {
                                                'items': 4
                                            },
                                            '1600': {
                                                'items': 5
                                            }
                                        }
                                    }">
                                <div class="product-wrap">
                                    <div class="product product-border text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <picture>
                                                    <source srcset="assets/images/product/18-1.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/18-1.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                                <picture>
                                                    <source srcset="assets/images/product/18-2.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/18-2.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                            </a>
                                        </figure>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="اضافه به خرید">
                                                <i class="fa-light fa-basket-shopping-simple"></i>
                                            </a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                    class="fa-light fa-heart"></i></a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع"> <i
                                                    class="fa-light fa-magnifying-glass"></i></a>
                                        </div>
                                        <div class="product-details rtl">
                                            <h3 class="product-name">
                                                <a href="product.html">عطر بولگاری</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price"> 4,300,000 تومان </span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">
                                                    ( از 20 نظر
                                                    )
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-border text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <picture>
                                                    <source srcset="assets/images/product/22-1.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/22-1.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                                <picture>
                                                    <source srcset="assets/images/product/22-2.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/22-2.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                            </a>
                                        </figure>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="اضافه به خرید">
                                                <i class="fa-light fa-basket-shopping-simple"></i>
                                            </a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                    class="fa-light fa-heart"></i></a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع"> <i
                                                    class="fa-light fa-magnifying-glass"></i></a>
                                        </div>
                                        <div class="product-details rtl">
                                            <h3 class="product-name">
                                                <a href="product.html">عطر باربری</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price"> 4,300,000 تومان </span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">
                                                    ( از 20 نظر
                                                    )
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-border text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <picture>
                                                    <source srcset="assets/images/product/23-1.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/23-1.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                                <picture>
                                                    <source srcset="assets/images/product/23-2.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/23-2.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                            </a>
                                        </figure>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="اضافه به خرید">
                                                <i class="fa-light fa-basket-shopping-simple"></i>
                                            </a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                    class="fa-light fa-heart"></i></a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع"> <i
                                                    class="fa-light fa-magnifying-glass"></i></a>
                                        </div>
                                        <div class="product-details rtl">
                                            <h3 class="product-name">
                                                <a href="product.html">عطر بولگاری</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price"> 4,300,000 تومان </span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">
                                                    ( از 20 نظر
                                                    )
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-border text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <picture>
                                                    <source srcset="assets/images/product/19-1.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/19-1.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                                <picture>
                                                    <source srcset="assets/images/product/19-2.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/19-2.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                            </a>
                                        </figure>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="اضافه به خرید">
                                                <i class="fa-light fa-basket-shopping-simple"></i>
                                            </a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                    class="fa-light fa-heart"></i></a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع"> <i
                                                    class="fa-light fa-magnifying-glass"></i></a>
                                        </div>
                                        <div class="product-details rtl">
                                            <h3 class="product-name">
                                                <a href="product.html">
                                                    عطر کالوین کلین
                                                </a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price"> 4,700,000 تومان</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">
                                                    ( از 13 نظر
                                                    )
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-border text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <picture>
                                                    <source srcset="assets/images/product/20-1.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/20-1.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                                <picture>
                                                    <source srcset="assets/images/product/20-2.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/20-2.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                            </a>
                                        </figure>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="اضافه به خرید">
                                                <i class="fa-light fa-basket-shopping-simple"></i>
                                            </a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                    class="fa-light fa-heart"></i></a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع"> <i
                                                    class="fa-light fa-magnifying-glass"></i></a>
                                        </div>
                                        <div class="product-details rtl">
                                            <h3 class="product-name">
                                                <a href="product.html">عطر شنل</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price"> 2,300,000 تومان</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">
                                                    ( 7 عدد در انبار
                                                    )
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-border text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <picture>
                                                    <source srcset="assets/images/product/21-1.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/21-1.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                                <picture>
                                                    <source srcset="assets/images/product/21-2.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/21-2.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                            </a>
                                        </figure>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="اضافه به خرید">
                                                <i class="fa-light fa-basket-shopping-simple"></i>
                                            </a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                    class="fa-light fa-heart"></i></a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع"> <i
                                                    class="fa-light fa-magnifying-glass"></i></a>
                                        </div>
                                        <div class="product-details rtl">
                                            <h3 class="product-name">
                                                <a href="product.html">عطر کرید</a>
                                            </h3>
                                            <div class="product-price">
                                                <del class="old-price"> 4,300,000 تومان</del><ins class="new-price">
                                                    3,300,000 تومان</ins>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">
                                                    ( از 33 نظر
                                                    )
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product product-border text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <picture>
                                                    <source srcset="assets/images/product/22-1.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/22-1.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                                <picture>
                                                    <source srcset="assets/images/product/22-2.webp" type="image/webp">
                                                    <img loading="lazy" decoding="async"
                                                        src="assets/images/product/22-2.jpg" alt="product" width="260"
                                                        height="293">
                                                </picture>
                                            </a>
                                        </figure>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="اضافه به خرید">
                                                <i class="fa-light fa-basket-shopping-simple"></i>
                                            </a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                    class="fa-light fa-heart"></i></a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع"> <i
                                                    class="fa-light fa-magnifying-glass"></i></a>
                                        </div>
                                        <div class="product-details rtl">
                                            <h3 class="product-name">
                                                <a href="product.html">عطر دیور</a>
                                            </h3>
                                            <div class="product-price">
                                                <del class="old-price"> 3,500,000 تومان</del><ins class="new-price">
                                                    2,500,000 تومان</ins>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product.html" class="rating-reviews">
                                                    ( از 23 نظر
                                                    )
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="owl-carousel owl-theme row cols-xl-5 cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                                         'loop': true,
                                         'dots': true,
                                         'autoplay': true,
                                         'rtl':true,
                                         'nav': true,
                                         'dots': true,
                                         'margin': 20,
                                        'responsive': {
                                            '0': {
                                                'items': 2
                                            },
                                            '576': {
                                                'items': 2
                                            },
                                            '768': {
                                                'items': 3
                                            },
                                            '992': {
                                                'items': 4
                                            },
                                            '1200': {
                                                'items': 5
                                            }
                                        }
                                    }">
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/23-1.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/23-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/23-2.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/23-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">بولگاری</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price"> 5,800,000 تومان</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 20 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/24-1.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/24-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/24-2.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/24-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر شنل</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 3،200،000</del><ins class="new-price"> 4,300,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 13 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/25-1.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/25-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/25-2.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/25-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر لانکوم</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">8,700,000 تومان</del><ins class="new-price"> 7,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:60%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 7 عدد در انبار )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/26-1.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/26-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/26-2.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/26-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر هوگو بوس </a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 3,700,000 تومان</del><ins class="new-price"> 2,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 33 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/27-1.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/27-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/27-2.webp" type="image/webp">
                                                <img loading="lazy" decoding="async" src="assets/images/product/27-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر گرلن</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 9,700,000 تومان</del><ins class="new-price">8,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 23 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/25-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/25-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/25-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/25-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر لانکوم</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">8,700,000 تومان</del><ins class="new-price"> 7,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:60%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 7 عدد در انبار )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/26-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/26-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/26-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/26-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر هوگو بوس </a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 3,700,000 تومان</del><ins class="new-price"> 2,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 33 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/27-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/27-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/27-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/27-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر گرلن</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 9,700,000 تومان</del><ins class="new-price">8,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 23 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="owl-carousel owl-theme row cols-xl-5 cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                                         'loop': true,
                                         'dots': true,
                                         'autoplay': true,
                                         'rtl':true,
                                         'nav': true,
                                         'dots': true,
                                         'margin': 20,
                                        'responsive': {
                                            '0': {
                                                'items': 2
                                            },
                                            '576': {
                                                'items': 2
                                            },
                                            '768': {
                                                'items': 3
                                            },
                                            '992': {
                                                'items': 4
                                            },
                                            '1200': {
                                                'items': 5
                                            }
                                        }
                                    }">
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/18-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/18-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/18-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/18-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر جیونچی</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price"> 4,300,000 تومان </span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:40%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 20 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/19-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/19-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/19-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/19-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">
                                                عطر جیورجیو آرمانی
                                            </a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price"> 4,700,000 تومان</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 13 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/20-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/20-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/20-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/20-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">گعطر دولچه گابانا</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price"> 1،400،000 تومان</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 7 عدد در انبار )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/23-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/23-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/23-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/23-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">بولگاری</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price"> 5,800,000 تومان</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 20 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/24-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/24-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/24-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/24-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر شنل</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 3،200،000</del><ins class="new-price"> 4,300,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 13 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/20-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/20-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/20-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/20-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">گعطر دولچه گابانا</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price"> 1،400،000 تومان</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 7 عدد در انبار )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/23-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/23-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/23-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/23-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">بولگاری</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price"> 5,800,000 تومان</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 20 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/24-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/24-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/24-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/24-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر شنل</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 3،200،000</del><ins class="new-price"> 4,300,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 13 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="owl-carousel owl-theme row cols-xl-5 cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                                         'loop': true,
                                         'dots': true,
                                         'autoplay': true,
                                         'rtl':true,
                                         'nav': true,
                                         'dots': true,
                                         'margin': 20,
                                        'responsive': {
                                            '0': {
                                                'items': 2
                                            },
                                            '576': {
                                                'items': 2
                                            },
                                            '768': {
                                                'items': 3
                                            },
                                            '992': {
                                                'items': 4
                                            },
                                            '1200': {
                                                'items': 5
                                            }
                                        }
                                    }">
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/21-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/21-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/21-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/21-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر مون بلان</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 4,300,000 تومان</del><ins class="new-price"> 3,300,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 33 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/22-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/22-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/22-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/22-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر لالیک</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 3,500,000 تومان</del><ins class="new-price"> 2,500,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 23 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/25-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/25-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/25-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/25-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر لانکوم</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">8,700,000 تومان</del><ins class="new-price"> 7,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:60%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 7 عدد در انبار )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/26-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/26-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/26-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/26-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر هوگو بوس </a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 3,700,000 تومان</del><ins class="new-price"> 2,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 33 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/27-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/27-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/27-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/27-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر گرلن</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 9,700,000 تومان</del><ins class="new-price">8,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 23 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/25-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/25-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/25-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/25-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر لانکوم</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price">8,700,000 تومان</del><ins class="new-price"> 7,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:60%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 7 عدد در انبار )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/26-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/26-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/26-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/26-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر هوگو بوس </a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 3,700,000 تومان</del><ins class="new-price"> 2,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 33 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-border text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <picture>
                                                <source srcset="assets/images/product/27-1.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/27-1.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                            <picture>
                                                <source srcset="assets/images/product/27-2.webp" type="image/webp"><img
                                                    loading="lazy" decoding="async" src="assets/images/product/27-2.jpg"
                                                    alt="product" width="260" height="293">
                                            </picture>
                                        </a>
                                    </figure>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="اضافه به خرید">
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="اضافه به علاقه مندی"><i
                                                class="fa-light fa-heart"></i></a>
                                        <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                    <div class="product-details rtl">
                                        <h3 class="product-name">
                                            <a href="product.html">عطر گرلن</a>
                                        </h3>
                                        <div class="product-price">
                                            <del class="old-price"> 9,700,000 تومان</del><ins class="new-price">8,700,000
                                                تومان</ins>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( از 23 نظر )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection