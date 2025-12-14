@extends('Pages.layouts.master')

@section('content')

    <main class="main single-product rtl text-right">
        <div class="page-content">
            <div class="container">

                {{-- Breadcrumb --}}
                <nav class="breadcrumb-nav">
                    <div class="container breadcrumb-nav-wrap">
                        <ul class="breadcrumb">
                            <li><a href="/"><i class="fa-light fa-house"></i></a></li>
                            <li>{{ $product->title }}</li>
                        </ul>
                    </div>
                </nav>

                <div class="row gutter-lg single-product-wrap">
                    <div class="col-xl-12 col-lg-12">

                        <div class="product product-single row mb-5">

                            {{-- ==== تصاویر محصول ==== --}}
                            <div class="col-md-6">
                                <div class="product-gallery">

                                    <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner ltr">
                                        @php
                                            $gallery = json_decode($product->gallery);
                                        @endphp
                                        @foreach($gallery as $img)
                                            <figure class="product-image">
                                                <picture>
                                                    <img loading="lazy" src="/{{ $img }}" alt="{{ $product->title }}"
                                                        width="800" height="900">
                                                </picture>
                                            </figure>
                                        @endforeach

                                    </div>

                                    <div class="product-label-group">

                                        @if($product->quantity == 0)
                                            <div class="sold-out">تمام شد</div>
                                        @endif

                                        @if($product->discount_percent > 0)
                                            <div class="discount">{{ $product->discount_percent }}% تخفیف</div>
                                        @endif

                                        @if($product->is_new)
                                            <div class="new-label">جدید</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            {{-- ==== اطلاعات محصول ==== --}}
                            <div class="col-md-6">
                                <div class="product-details pt-3">

                                    <h1 class="product-name">{{ $product->title }}</h1>
                                    <h3 class="product-name-en">{{ $product->english_title }}</h3>

                                    <div class="product-meta">
                                        کد کالا :
                                        <span class="product-sku ml-3">{{ $product->sku }}</span>

                                        دسته بندی :
                                        <span class="product-brand">{{ $product->category->name ?? '-' }}</span>
                                    </div>

                                    {{-- قیمت --}}
                                    <div class="product-price">

                                        @if($product->discount_percent > 0)
                                            <del class="old-price">{{ number_format($product->price) }} تومان</del>
                                            <ins class="new-price">{{ number_format($product->final_price) }} تومان</ins>
                                        @else
                                            <span class="price">{{ number_format($product->price) }} تومان</span>
                                        @endif

                                    </div>

                                    {{-- موجودی --}}
                                    <div class="ratings-container mt-2">
                                        <span>( {{ $product->quantity }} عدد موجود در انبار )</span>
                                    </div>

                                    {{-- توضیح کوتاه --}}
                                    <p class="product-short-desc mt-3">
                                        {{ $product->short_description }}
                                    </p>

                                    {{-- جدول مشخصات --}}
                                    <div class="table-info">
                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>جنسیت</td>
                                                    <td>{{ $product->gender }}</td>
                                                </tr>
                                                <tr>
                                                    <td>طبع</td>
                                                    <td>{{ $product->nature }}</td>
                                                </tr>
                                                <tr>
                                                    <td>فصل</td>
                                                    <td>{{ $product->season }}</td>
                                                </tr>
                                                <tr>
                                                    <td>ماندگاری</td>
                                                    <td>{{ $product->duration }}</td>
                                                </tr>
                                                <tr>
                                                    <td>پخش بو</td>
                                                    <td>{{ $product->spread }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    {{-- انتخاب تعداد --}}
                                    <div class="product-form product-qty mb-3">
                                        <div class="product-form-group">

                                            <div class="input-group">
                                                <button class="quantity-minus d-icon-minus"></button>
                                                <input class="quantity form-control" type="number" min="1" max="1000"
                                                    value="1">
                                                <button class="quantity-plus d-icon-plus"></button>
                                            </div>

                                            <button data-product-id="{{ $product->id }}" class="btn-product btn-cart" @if($product->quantity == 0) disabled @endif>
                                                اضافه به خرید <i class="fa-light fa-basket-shopping-simple"></i>
                                            </button>

                                        </div>
                                    </div>

                                    {{-- شبکه های اجتماعی --}}
                                    <div class="product-footer">
                                        <div class="social-links pl-4">
                                            <a href="#" class="social-link"><img
                                                    src="/assets/images/social/facebook.png"></a>
                                            <a href="#" class="social-link"><img src="/assets/images/social/x.png"></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- ==== توضیحات کامل ==== --}}
                        <div class="tab tab-nav-simple product-tabs mt-8">
                            <ul class="nav nav-tabs justify-content-center">

                                <li class="nav-item">
                                    <a class="nav-link active" href="#product-tab-description">توضیحات</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#product-tab-additional">اطلاعات بیشتر</a>
                                </li>

                            </ul>

                            <div class="tab-content">

                                {{-- توضیحات --}}
                                <div class="tab-pane active" id="product-tab-description">
                                    <div class="row mt-6">
                                        <div class="col-12">
                                            {!! nl2br($product->description) !!}
                                        </div>
                                    </div>
                                </div>

                                {{-- اطلاعات بیشتر --}}
                                <div class="tab-pane" id="product-tab-additional">
                                    <ul class="list-none">
                                        <li><label>گروه بویایی:</label> {{ $product->nature }}</li>
                                        <li><label>جنسیت:</label> {{ $product->gender }}</li>
                                        <li><label>فصل:</label> {{ $product->season }}</li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                        {{-- ==== محصولات مرتبط ==== --}}
                        <section class="pt-2 mt-10">

                            <h2 class="title justify-content-center ls-normal">محصولات مرتبط</h2>

                            <div class="owl-carousel owl-theme owl-nav-full owl-rtl"
                                data-owl-options='{"rtl":true, "items":3, "dots":true}'>

                                @foreach($related as $item)
                                    <div class="product product-border text-center">

                                        <figure class="product-media">
                                            <a href="{{ route('product.show', $item->slug) }}">
                                                <img loading="lazy" src="/{{ $item->image }}" width="260" height="293">
                                            </a>
                                        </figure>

                                        <div class="product-details rtl">
                                            <h3 class="product-name">
                                                <a href="{{ route('product.show', $item->slug) }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h3>

                                            <div class="product-price">
                                                @if($item->discount_percent > 0)
                                                    <del class="old-price">{{ number_format($item->price) }}</del>
                                                    <ins class="new-price">{{ number_format($item->final_price) }} تومان</ins>
                                                @else
                                                    <span class="price">{{ number_format($item->price) }} تومان</span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                            </div>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section("script")
    <script>
        $(document).on("click", ".btn-product", function (e) {
            e.preventDefault();

            let productId = $(this).data("product-id");

            $.ajax({
                url: "/cart/"+productId+"/add",
                type: "GET",
                data: '',
                success: function (response) {
                    console.log("محصول اضافه شد ✅", response);
                },
                error: function (xhr) {
                    console.error("خطا در افزودن محصول ❌", xhr.responseText);
                }
            });
        });
    </script>

@endsection
