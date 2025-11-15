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

                        {{-- حلقه اسلایدرها --}}
                        @foreach($sliders as $slider)

                            <div class="intro-slide">
                                <div class="container intro-slide1-wrap">
                                    <div class="banner row align-items-center">

                                        {{-- تصویر --}}
                                        <div class="col-12 col-md-6 col-lg-6 image-item floating d-flex justify-content-center align-items-center"
                                            data-options='{"invertX":true,"invertY":true}'>

                                            <figure class="layer slide-animate" data-animation-options="{
                                                                'name': 'fadeIn',
                                                                'duration': '1s',
                                                                'delay': '1s'
                                                            }">
                                                <picture>
                                                    <img loading="lazy" decoding="async" src="{{ asset($slider->image) }}"
                                                        alt="{{ $slider->title }}" width="628" height="505" class="ml-auto">
                                                </picture>
                                            </figure>

                                        </div>

                                        {{-- متن‌ها --}}
                                        <div
                                            class="col-12 col-md-6 d-flex d-lg-block justify-content-center align-items-center layer">

                                            <div class="banner-content mt-md-6 rtl">

                                                @if($slider->title)
                                                    <h3 class="banner-title font-weight-normal text-white slide-animate"
                                                        data-animation-options="{
                                                                                    'name': 'fadeInUpShorter',
                                                                                    'duration': '.7s',
                                                                                    'delay': '.3s'
                                                                                }">
                                                        {!! nl2br(e($slider->title)) !!}
                                                    </h3>
                                                @endif

                                                @if($slider->subtitle)
                                                    <h4 class="banner-subtitle font-primary text-yellow slide-animate"
                                                        data-animation-options="{
                                                                                    'name': 'fadeInUpShorter',
                                                                                    'duration': '.7s',
                                                                                    'delay': '.4s'
                                                                                }">
                                                        {!! nl2br(e($slider->subtitle)) !!}
                                                    </h4>
                                                @endif

                                                @if($slider->button_text)
                                                    <a href="{{ $slider->button_link ?? '#' }}"
                                                        class="btn btn-outline btn-white slide-animate mb-1" data-animation-options="{
                                                                                    'name': 'fadeInUpShorter',
                                                                                    'duration': '.7s',
                                                                                    'delay': '.5s'
                                                                                }">
                                                        {{ $slider->button_text }}
                                                        <i class="fa-light fa-angles-right"></i>
                                                    </a>
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endforeach

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
                                     'margin': 20,
                                     'responsive': {
                                         '0':   { 'items': 3 },
                                         '480': { 'items': 4 },
                                         '768': { 'items': 5 },
                                         '992': { 'items': 6 },
                                         '1200':{ 'items': 7, 'dots': false }
                                     }
                                 }">

                        @foreach($homeCategories as $category)
                            <div class="category category-ellipse">
                                <a href="#">
                                    <figure class="category-media">
                                        <picture>
                                            @php
                                                $image = $category->image ?: 'assets/images/category/default.png';
                                            @endphp
                                            <source srcset="{{ asset($image) }}" type="image/webp">
                                            <img loading="lazy" decoding="async" src="{{ asset($image) }}"
                                                alt="{{ $category->name }}" width="196" height="196" />
                                        </picture>
                                    </figure>
                                </a>
                                <div class="category-content rtl">
                                    <h4 class="category-name">
                                        <a href="#">{{ $category->name }}</a>
                                    </h4>

                                    @if($category->description)
                                        <span class="category-count">
                                            <span>{{ $category->description }}</span>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <section class="discount-main">
                <div class="title-wrapper">
                    <div class="container-fluid title-wrap">
                        <h2 class="title">پیشنهاد پرفیوم</h2>
                        <h5 class="title-info">
                            <span></span>
                            <picture>
                                <source srcset="{{ asset('/assets/images/perfume/15.webp') }}" type="image/webp">
                                <img loading="lazy" decoding="async" src="{{ asset('images/perfume/15.png') }}">
                            </picture>
                            <span></span>
                        </h5>
                    </div>
                </div>

                <div class="container discount-wrap">
                    {{-- تصویر سمت راست ثابت --}}
                    <div class="col-xl-2 discount-right">
                        <picture>
                            <source srcset="{{ asset('/assets/images/discount.webp') }}" type="image/webp">
                            <img loading="lazy" decoding="async" src="{{ asset('/assets/images/discount.png') }}" alt="">
                        </picture>
                    </div>

                    {{-- کاروسل محصولات تخفیف‌دار --}}
                    <div class="col-xl-10 col-lg-12 discount-left">

                        <div class="owl-carousel owl-theme owl-nav-inner appear-animate owl-rtl"
                            data-animation-options="{'name': 'fadeIn'}" data-owl-options="{
                            'rtl': true,
                            'nav': true,
                            'dots': false,
                            'loop': true,
                            'autoplay': true,
                            'margin': 20,
                            'responsive': {
                                '0': { 'items': 1 },
                                '576': { 'items': 2 },
                                '768': { 'items': 2 },
                                '992': { 'items': 3 },
                                '1200': { 'items': 3 },
                                '1600': { 'items': 4 }
                            }
                        }">

                            @foreach($discountProducts as $product)

                                @php
                                    $final = $product->price - ($product->price * $product->discount_percent / 100);
                                @endphp

                                <div class="product text-center cart-full">

                                    <figure class="product-media">
                                        <a href="{{ route('product.show', $product->slug) }}">
                                            <picture>
                                                @if(str_ends_with($product->image, '.webp'))
                                                    <source srcset="{{ asset($product->image) }}" type="image/webp">
                                                @endif
                                                <img loading="lazy" decoding="async" src="{{ asset($product->image) }}"
                                                    alt="{{ $product->title }}" width="240" height="270">
                                            </picture>
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="علاقه‌مندی">
                                                <i class="fa-light fa-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="نمایش سریع">
                                                <i class="fa-light fa-magnifying-glass"></i>
                                            </a>
                                        </div>
                                    </figure>

                                    <div class="product-details rtl">

                                        <h3 class="product-name">
                                            <a href="{{ route('product.show', $product->slug) }}">
                                                {{ $product->title }}
                                            </a>
                                        </h3>

                                        <div class="product-price">
                                            @if($product->discount_percent > 0)
                                                <del class="old-price">{{ number_format($product->price) }} تومان</del>
                                                <ins class="new-price">{{ number_format($final) }} تومان</ins>
                                            @else
                                                <span class="price">{{ number_format($product->price) }} تومان</span>
                                            @endif
                                        </div>

                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                            </div>
                                            <a href="{{ route('product.show', $product->slug) }}" class="rating-reviews">
                                                ( {{ $product->comments_count ?? 0 }} نظر )
                                            </a>
                                        </div>

                                        <a href="{{ route('product.show', $product->slug) }}"
                                            class="btn btn-md btn-block btn-gradient">
                                            مشاهده و انتخاب
                                            <i class="fa-light fa-basket-shopping-simple"></i>
                                        </a>

                                    </div>
                                </div>

                            @endforeach

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
                        <h2 class="title">تخفیف پرفیوم</h2>
                        <h5 class="title-info">
                            <span></span>
                            <picture>
                                <source srcset="{{ asset('assets/images/perfume/15.webp') }}" type="image/webp">
                                <img src="{{ asset('assets/images/perfume/15.png') }}">
                            </picture>
                            <span></span>
                        </h5>
                    </div>
                </div>

                <div class="container tab-wrap">
                    <div class="row">
                        <div class="tab tab-vertical tab-nav-solid code-content">

                            {{-- تب‌ها --}}
                            <ul class="nav nav-tabs" role="tablist">
                                @foreach($tabProducts as $index => $p)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $index == 0 ? 'active' : '' }}" href="#tab-{{ $p->id }}">
                                            {{ $p->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            {{-- محتوا --}}
                            <div class="tab-content tab-content-main">

                                @foreach($tabProducts as $index => $p)
                                    @php
                                        $price = $p->price;
                                        $final = $price - ($price * $p->discount_percent / 100);
                                        $img = $p->tab_image ?: $p->image;
                                    @endphp

                                    <div class="tab-pane {{ $index == 0 ? 'active in' : '' }}" id="tab-{{ $p->id }}">

                                        <div class="col-lg-6 col-md-5 tab-content-right">
                                            <picture>
                                                <img loading="lazy" decoding="async" src="{{ asset($img) }}">
                                            </picture>
                                        </div>

                                        <div class="col-lg-6 col-md-7 tab-content-left">

                                            <span class="tab-discount">
                                                {{ $p->discount_percent }}% تخفیف
                                            </span>

                                            <h3>{{ number_format($final) }} تومان</h3>
                                            <h2>{{ $p->title }}</h2>

                                            <ul class="list list-type-check mb-4">
                                                @if($p->gender)
                                                    <li><i class="fa-light fa-badge-check"></i>جنسیت: {{ $p->gender }}</li>
                                                @endif
                                                @if($p->nature)
                                                    <li><i class="fa-light fa-badge-check"></i>طبع: {{ $p->nature }}</li>
                                                @endif
                                                @if($p->season)
                                                    <li><i class="fa-light fa-badge-check"></i>فصل: {{ $p->season }}</li>
                                                @endif
                                                @if($p->duration)
                                                    <li><i class="fa-light fa-badge-check"></i>ماندگاری: {{ $p->duration }}</li>
                                                @endif
                                                @if($p->spread)
                                                    <li><i class="fa-light fa-badge-check"></i>پخش: {{ $p->spread }}</li>
                                                @endif
                                            </ul>

                                            <a href="{{ route('product.show', $p->slug) }}"
                                                class="btn btn-dark btn-rounded width-half btn-md btn-block btn-gradient">
                                                مشاهده و انتخاب
                                                <i class="fa-light fa-basket-shopping-simple"></i>
                                            </a>

                                        </div>

                                    </div>
                                @endforeach

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
                           @foreach ($bestSellerProducts as $product)
                                        <div class="product-wrap">
                                            <div class="product product-border text-center">

                                                <figure class="product-media">
                                                    <a href="{{ route('product.show', $product->slug) }}">
                                                        <img loading="lazy" src="{{ asset($product->image) }}" alt="{{ $product->title }}" width="260" height="293">
                                                    </a>
                                                </figure>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" title="اضافه به خرید">
                                                        <i class="fa-light fa-basket-shopping-simple"></i>
                                                    </a>
                                                    <a href="#" class="btn-product-icon btn-wishlist"><i class="fa-light fa-heart"></i></a>
                                                    <a href="#" class="btn-product-icon btn-quickview"><i class="fa-light fa-magnifying-glass"></i></a>
                                                </div>

                                                <div class="product-details rtl">

                                                    <h3 class="product-name">
                                                        <a href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a>
                                                    </h3>

                                                    <div class="product-price">
                                                        @if($product->discount_percent > 0)
                                                            <del class="old-price">{{ number_format($product->price) }} تومان</del>
                                                            <ins class="new-price">
                                                                {{ number_format($product->final_price) }} تومان
                                                            </ins>
                                                        @else
                                                            <span class="price">{{ number_format($product->price) }} تومان</span>
                                                        @endif
                                                    </div>

                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:80%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="#" class="rating-reviews">( نظرات )</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection