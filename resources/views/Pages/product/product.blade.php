@extends("Pages.layouts.master")

@section('title', $product->title)

@section("content")

<div class="container rtl text-right single-product mt-40 mb-60">

    {{-- breadcrumb --}}
    <nav class="breadcrumb-nav mb-20">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa-light fa-house"></i></a></li>
            @if($product->category)
                <li>
                    <a href="#">{{ $product->category->name }}</a>
                </li>
            @endif
            <li class="active">{{ $product->title }}</li>
        </ul>
    </nav>

    <div class="row gutter-lg single-product-wrap">

        {{-- گالری محصول --}}
        <div class="col-xl-5 col-lg-5 col-md-6">
            <div class="product-gallery">

                <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no ltr">

                    {{-- تصویر اصلی --}}
                    <figure class="product-image">
                        <picture>
                            <img
                                loading="lazy"
                                src="{{ asset($product->image) }}"
                                data-zoom-image="{{ asset($product->image) }}"
                                alt="{{ $product->title }}"
                                width="800" height="900"
                            >
                        </picture>
                    </figure>

                    {{-- گالری اضافی --}}
                    @if($product->gallery)
                        @foreach(json_decode($product->gallery, true) as $img)
                            <figure class="product-image">
                                <picture>
                                    <img
                                        loading="lazy"
                                        src="{{ asset($img) }}"
                                        data-zoom-image="{{ asset($img) }}"
                                        alt="{{ $product->title }}"
                                        width="800" height="900"
                                    >
                                </picture>
                            </figure>
                        @endforeach
                    @endif
                </div>

                {{-- thumbnail‌ها --}}
                <div class="product-thumbs-wrap mt-3">
                    <div class="product-thumbs owl-carousel owl-theme owl-nav-inner row cols-4 gutter-sm ltr">
                        <img src="{{ asset($product->image) }}" class="product-thumb" width="100" alt="">
                        @if($product->gallery)
                            @foreach(json_decode($product->gallery, true) as $img)
                                <img src="{{ asset($img) }}" class="product-thumb" width="100" alt="">
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>

        {{-- جزئیات محصول --}}
        <div class="col-xl-7 col-lg-7 col-md-6">

            <div class="product-details pt-3">

                <h1 class="product-name">{{ $product->title }}</h1>

                @if($product->english_title)
                    <h3 class="product-name-en">{{ $product->english_title }}</h3>
                @endif

                <div class="product-meta mb-10">
                    <span>کد کالا: </span>
                    <span class="product-sku ml-2">{{ $product->sku ?? '-' }}</span>

                    @if($product->category)
                        <span class="mx-2">|</span>
                        <span>دسته: {{ $product->category->name }}</span>
                    @endif
                </div>

                {{-- قیمت و تخفیف --}}
                <div class="product-price mb-15">
                    @php
                        $price = $product->price;
                        $final = $price;
                        if ($product->discount_percent > 0) {
                            $final = $price - ($price * $product->discount_percent / 100);
                        }
                    @endphp

                    @if($product->discount_percent > 0)
                        <del class="text-danger ml-10">{{ number_format($price) }} تومان</del>
                        <span class="text-success font-bold">{{ number_format($final) }} تومان</span>
                        <span class="badge badge-danger mx-2">{{ $product->discount_percent }}٪ تخفیف</span>
                    @else
                        <span class="text-primary font-bold">{{ number_format($price) }} تومان</span>
                    @endif
                </div>

                {{-- موجودی --}}
                <div class="mb-15">
                    @if($product->quantity > 0)
                        <span>موجودی: </span>
                        <strong class="text-green">{{ $product->quantity }} عدد</strong>
                    @else
                        <span class="text-danger">ناموجود</span>
                    @endif
                </div>

                {{-- توضیح کوتاه --}}
                @if($product->short_description)
                    <p class="product-short-desc">
                        {{ $product->short_description }}
                    </p>
                @endif

                {{-- دکمه افزودن به سبد --}}
                <div class="product-form product-qty mt-20">
                    @if($product->quantity > 0)
                        <a href="{{ route('cart.add', $product->id) }}"
                           class="btn btn-primary btn-cart btn-rounded">
                            <i class="fa-light fa-cart-shopping ml-2"></i>
                            افزودن به سبد خرید
                        </a>
                    @else
                        <button class="btn btn-gray" disabled>ناموجود</button>
                    @endif
                </div>

            </div>

        </div>
    </div>

    {{-- تب‌ها: توضیحات / نظرات --}}
    <div class="product-details-tab mt-40">

        <ul class="nav nav-tabs tab-nav-simple">
            <li><a class="active" data-bs-toggle="tab" href="#tab-desc">توضیحات</a></li>
            <li><a data-bs-toggle="tab" href="#tab-reviews">نظرات</a></li>
        </ul>

        <div class="tab-content mb-30">

            {{-- توضیحات کامل --}}
            <div class="tab-pane fade show active" id="tab-desc">
                <div class="product-desc-content">
                    {!! $product->description !!}
                </div>
            </div>

            {{-- نظرات --}}
            <div class="tab-pane fade" id="tab-reviews">
                @if(isset($comments) && $comments->count())
                    <div class="product-comment-list">
                        @foreach($comments as $comment)
                            <div class="comment-box mb-15">
                                <div class="comment-header d-flex justify-content-between">
                                    <span class="comment-author">{{ $comment->user->name ?? 'کاربر سایت' }}</span>
                                    <span class="comment-date">
                                        {{ jdate($comment->created_at)->format('Y/m/d') }}
                                    </span>
                                </div>
                                <div class="comment-body">
                                    <p>{{ $comment->body }}</p>
                                </div>

                                @if($comment->answer)
                                    <div class="comment-answer mt-10 p-10 bg-light radius-5">
                                        <strong>پاسخ فروشگاه:</strong>
                                        <p class="mb-0">{{ $comment->answer->body }}</p>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>هنوز نظری برای این محصول ثبت نشده است.</p>
                @endif

                {{-- فرم ارسال نظر (اگر سیستم کامنت داری) --}}
                @auth
                    <form action="{{ route('comments.store') }}" method="POST" class="mt-20">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="form-group mb-10">
                            <label>نظر شما</label>
                            <textarea name="body" class="input" rows="3" required></textarea>
                        </div>
                        <button class="btn btn-primary btn-rounded">ثبت نظر</button>
                    </form>
                @else
                    <p class="mt-10">برای ثبت نظر، ابتدا <a href="{{ route('login') }}">وارد شوید</a>.</p>
                @endauth
            </div>

        </div>
    </div>

    {{-- محصولات مرتبط --}}
    @if($related->count())
        <section class="mt-40">
            <h3 class="mb-20">محصولات مرتبط</h3>

            <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2"
                 data-owl-options="{
                    'rtl':true,
                    'nav': true,
                    'dots': false,
                    'margin': 20,
                    'responsive': {
                        '0': {'items': 1},
                        '480': {'items': 2},
                        '768': {'items': 3},
                        '992': {'items': 4}
                    }
                 }">

                @foreach($related as $item)
                    <div class="product text-right rtl">
                        <figure class="product-media">
                            <a href="{{ route('product.show', $item->slug) }}">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" width="280" height="315">
                            </a>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name">
                                <a href="{{ route('product.show', $item->slug) }}">
                                    {{ $item->title }}
                                </a>
                            </h4>
                            <div class="product-price">
                                @php
                                    $p = $item->price;
                                    $f = $p - ($p * $item->discount_percent / 100);
                                @endphp
                                @if($item->discount_percent > 0)
                                    <del class="text-danger ml-5">{{ number_format($p) }}</del>
                                    <span>{{ number_format($f) }} تومان</span>
                                @else
                                    <span>{{ number_format($p) }} تومان</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    @endif

</div>

@endsection
