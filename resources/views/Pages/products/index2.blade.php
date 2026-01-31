@extends('Pages.layouts.master')

@section('content')
<div class="container mx-auto flex gap-6">

    {{-- ================== SIDEBAR FILTER ================== --}}
    <aside class="w-1/4 bg-white p-4 rounded">
        <form id="filterForm">

            {{-- دسته بندی --}}
            <h3 class="font-bold mb-3">دسته بندی محصولات</h3>
            @foreach($categories as $category)
                <label class="flex items-center gap-2 mb-2 cursor-pointer">
                    <input type="radio"
                           name="category"
                           value="{{ $category->id }}"
                           class="filter-input"
                           {{ request('category') == $category->id ? 'checked' : '' }}>
                    <span>{{ $category->title }}</span>
                </label>
            @endforeach

            <hr class="my-4">

            {{-- فیلتر قیمت --}}
            <h3 class="font-bold mb-3">فیلتر بر اساس قیمت</h3>

            <input type="number"
                   name="min_price"
                   class="filter-input w-full mb-2 border p-2 rounded"
                   placeholder="حداقل قیمت"
                   value="{{ request('min_price') }}">

            <input type="number"
                   name="max_price"
                   class="filter-input w-full mb-3 border p-2 rounded"
                   placeholder="حداکثر قیمت"
                   value="{{ request('max_price') }}">

            {{-- hidden inputs --}}
            <input type="hidden" name="sort" id="sortInput" value="{{ request('sort') }}">
            <input type="hidden" name="per_page" id="perPageInput" value="{{ request('per_page',12) }}">

        </form>
    </aside>

    {{-- ================== MAIN CONTENT ================== --}}
    <main class="w-3/4">

        {{-- top bar --}}
        <div class="flex justify-between items-center mb-4">

            <div>
                <label>تعداد نمایش:</label>
                <select onchange="setPerPage(this.value)" class="border p-1 rounded">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="48">48</option>
                </select>
            </div>

            <div>
                <label>ترتیب نمایش:</label>
                <select onchange="setSort(this.value)" class="border p-1 rounded">
                    <option value="">پیش فرض</option>
                    <option value="best">پرفروش‌ترین</option>
                    <option value="cheap">ارزان‌ترین</option>
                    <option value="expensive">گران‌ترین</option>
                </select>
            </div>

        </div>

        {{-- product list --}}
        <div id="productList">
            @include('Pages.products._list')
        </div>

    </main>

</div>
@endsection

@section('script')
<script>
    document.querySelectorAll('.filter-input').forEach(el => {
        el.addEventListener('change', () => fetchProducts());
    });

    function setSort(val) {
        document.getElementById('sortInput').value = val;
        fetchProducts();
    }

    function setPerPage(val) {
        document.getElementById('perPageInput').value = val;
        fetchProducts();
    }

    function fetchProducts(page = 1) {
        const form   = document.getElementById('filterForm');
        const params = new URLSearchParams(new FormData(form));
        params.append('page', page);

        fetch("{{ route('products.index') }}?" + params.toString(), {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(res => res.text())
        .then(html => {
            document.getElementById('productList').innerHTML = html;
            history.pushState({}, '', '?' + params.toString());
        });
    }

    // pagination ajax
    document.addEventListener('click', function(e) {
        if (e.target.closest('.pagination a')) {
            e.preventDefault();
            const url = e.target.closest('a').getAttribute('href');
            const page = new URL(url).searchParams.get('page');
            fetchProducts(page);
        }
    });
</script>
@endsection
