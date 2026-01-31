<div class="product-lists product-wrapper rtl">

    @forelse($products as $product)
        <div class="product product-list">

            {{-- تصویر محصول --}}
            <figure class="product-media">
                <a href="{{ route('product.show', $product->slug) }}">
                    <picture>
                        @if($product->image_webp)
                            <source srcset="{{ asset($product->image_webp) }}" type="image/webp">
                        @endif
                        <img
                            loading="lazy"
                            decoding="async"
                            src="{{ asset($product->image) }}"
                            alt="{{ $product->title }}"
                            width="260"
                            height="293">
                    </picture>
                </a>

                @if($product->is_new)
                    <div class="product-label-group">
                        <label class="product-label label-new">جدید</label>
                    </div>
                @endif
            </figure>

            {{-- جزئیات --}}
            <div class="product-details rtl">

                {{-- دسته بندی --}}
                <div class="product-cat">
                    <a href="{{ route('products.index', ['category' => $product->category_id]) }}">
                        {{ $product->category?->title }}
                    </a>
                </div>

                {{-- نام --}}
                <h3 class="product-name">
                    <a href="{{ route('product.show', $product->slug) }}">
                        {{ $product->title }}
                    </a>
                </h3>

                {{-- قیمت --}}
                <div class="product-price">
                    <span class="price">
                        {{ number_format($product->price) }} تومان
                    </span>
                </div>

                {{-- امتیاز --}}
                <div class="ratings-container">
                    <div class="ratings-full">
                        <span class="ratings"
                              style="width:{{ ($product->rating_avg ?? 0) * 20 }}%">
                        </span>
                    </div>
                    <a href="{{ route('product.show', $product->slug) }}"
                       class="rating-reviews">
                        ( از {{ $product->reviews_count ?? 0 }} نظر )
                    </a>
                </div>

                {{-- توضیح کوتاه --}}
                <p class="product-short-desc">
                    {{ Str::limit(strip_tags($product->description), 230) }}
                </p>

                {{-- اکشن‌ها --}}
                <div class="product-action">

                    <a href="#"
                       class="btn-product btn-cart add-to-cart"
                       data-id="{{ $product->id }}"
                       title="اضافه به خرید">
                        <i class="fa-light fa-basket-shopping-simple"></i>
                        <span>افزودن به سبد</span>
                    </a>

                    <a href="#"
                       class="btn-product-icon btn-wishlist"
                       data-id="{{ $product->id }}"
                       title="اضافه به علاقه مندی">
                        <i class="fa-light fa-heart"></i>
                    </a>

                    <a href="#"
                       class="btn-product-icon btn-quickview"
                       data-id="{{ $product->id }}"
                       title="نمایش">
                        <i class="fa-light fa-magnifying-glass"></i>
                    </a>

                </div>
            </div>
        </div>

    @empty
        <div class="text-center py-5">
            محصولی یافت نشد
        </div>
    @endforelse

</div>

{{-- pagination --}}
@if($products->hasPages())
    <div class="mt-4">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
@endif
