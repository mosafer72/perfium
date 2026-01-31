@extends('Pages.layouts.master')

@section("css")
    <link rel="stylesheet" type="text/css" href="assets/plugin/nouislider/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main-min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nouislider@15.7.1/dist/nouislider.min.css"> -->
@endsection
@section('content')
    <main class="main rtl text-right mt-3">
        <div class="page-content">
            <div class="container">
                <div class="row gutter-lg main-content-wrap">
                    <div class="col-lg-9 main-content">
                        <nav class="toolbox sticky-toolbox sticky-content fix-top rtl">
                            <div class="toolbox-right">
                                <a href="#"
                                    class="toolbox-item right-sidebar-toggle btn btn-outline btn-primary btn-icon-left d-lg-none">
                                    <i class="fa-light fa-chevron-right"></i>
                                </a>
                                <div class="toolbox-item toolbox-sort select-box text-dark">
                                    <label>ترتیب نمایش :</label>
                                    <select name="orderby" class="form-control">
                                        <option value="default">پیش فرض</option>
                                        <option value="popularity" selected="selected">پرفروش ترین ها</option>
                                        <option value="rating">پر امتیازترین ها</option>
                                        <option value="date">جدیدترین ها</option>
                                        <option value="price-low">قیمت صعودی</option>
                                        <option value="price-high">قیمت نزولی</option>
                                        <option value="">پاک کردن ترتیب نمایش</option>
                                    </select>
                                </div>
                            </div>
                            <div class="toolbox-left">
                                <div class="toolbox-item toolbox-show select-box text-dark">
                                    <label>تعداد محصول :</label>
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36ل</option>
                                    </select>
                                </div>
                                <div class="toolbox-item toolbox-layout">
                                    <a href="shop-list-mode.html" class="d-icon-mode-list btn-layout active"></a>
                                    <a href="shop-classic-filter.html" class="d-icon-mode-grid btn-layout"></a>
                                </div>
                            </div>
                        </nav>
                        <div id="productList">
                            @include('Pages.products._list')
                        </div>
                    </div>
                    <aside class="col-xl-3 col-lg-3 sidebar right-sidebar sidebar-fixed sticky-sidebar-wrapper">
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="fa-light fa-xmark"></i></a>
                        <a href="#" class="sidebar-toggle">
                            <i class="fa-light fa-chevron-right"></i>
                        </a>
                        <div class="sidebar-content">
                            <div class="pin-wrapper">
                                <div class="sticky-sidebar" data-sticky-options="{'top': 10}"
                                    style="border-bottom: 0px none rgb(102, 102, 102); width: 316.75px;">
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">دسته بندی محصولات<span class="toggle-btn"></span></h3>
                                        <ul class="widget-body filter-items search-ul">

                                            @foreach($categories as $parent)
                                                <li class="with-ul">

                                                    <a href="#" class="category-filter" data-id="{{ $parent->id }}">
                                                        {{ $parent->name }}
                                                        @if($parent->children->count())
                                                            <i class="fas fa-chevron-down"></i>
                                                        @endif
                                                    </a>

                                                    @if($parent->children->count())
                                                        <ul class="children">
                                                            @foreach($parent->children as $child)
                                                                <li>
                                                                    <a href="#" class="category-filter" data-id="{{ $child->id }}">
                                                                        {{ $child->name }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif

                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <form id="priceFilterForm" action="#">
                                        <input type="hidden" name="min_price" id="minPrice">
                                        <input type="hidden" name="max_price" id="maxPrice">

                                        <div class="filter-price-slider"></div>

                                        <div class="filter-actions">
                                            <div class="filter-price-text mb-4 mt-4">
                                                قیمت:
                                                <span class="filter-price-range"></span>
                                            </div>
                                            <button type="submit" class="btn btn-dark btn-filter btn-rounded">
                                                فیلتر
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
@endsection

@section("script")
    <script src="assets/plugin/nouislider/nouislider.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/nouislider@15.7.1/dist/nouislider.min.js"></script> -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const sliderEl = document.querySelector('.filter-price-slider');
            const rangeText = document.querySelector('.filter-price-range');
            const minInput = document.getElementById('minPrice');
            const maxInput = document.getElementById('maxPrice');

            // اگر قالب هنوز اسلایدر رو نساخته
            if (!sliderEl) return;

            // صبر می‌کنیم تا themeparsi.priceSlider اجرا بشه
            const waitForSlider = setInterval(() => {
                if (sliderEl.noUiSlider) {
                    clearInterval(waitForSlider);
                    bindPriceSlider(sliderEl.noUiSlider);
                }
            }, 50);

            function toFa(num) {
                return num.toString().replace(/\d/g, d => '۰۱۲۳۴۵۶۷۸۹'[d]);
            }

            function bindPriceSlider(slider) {

                // مقدار اولیه
                const values = slider.get();
                updateValues(values);

                // هر تغییر
                slider.on('update', function (values) {
                    updateValues(values);
                });
            }

            function updateValues(values) {
                const min = Math.round(values[0]);
                const max = Math.round(values[1]);

                minInput.value = min;
                maxInput.value = max;

                rangeText.innerText =
                    toFa(max.toLocaleString()) +
                    ' تومان - ' +
                      toFa(min.toLocaleString()) +
                    ' تومان ';
            }

            // submit فیلتر
            document.getElementById('priceFilterForm')
                .addEventListener('submit', function (e) {
                    e.preventDefault();
                    fetchProducts(); // Ajax لیست محصولات
                });

        });
    </script>


    <script>
        let selectedCategory = null;

        document.querySelectorAll('.category-filter').forEach(el => {
            el.addEventListener('click', e => {
                e.preventDefault();
                selectedCategory = el.dataset.id;
                fetchProducts();
            });
        });

        document.getElementById('priceFilterForm')
            .addEventListener('submit', e => {
                e.preventDefault();
                fetchProducts();
            });

        function fetchProducts(page = 1) {
            const params = new URLSearchParams();
            params.append('page', page);

            if (selectedCategory) {
                params.append('category', selectedCategory);
            }

            params.append('min_price', document.getElementById('minPrice').value);
            params.append('max_price', document.getElementById('maxPrice').value);

            fetch("{{ route('products.index') }}?" + params.toString(), {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
                .then(res => res.text())
                .then(html => {
                    document.getElementById('productList').innerHTML = html;
                    history.pushState({}, '', '?' + params.toString());
                });
        }
    </script>




@endsection
