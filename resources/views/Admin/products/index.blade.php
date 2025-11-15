@extends('Admin.app')

@section('title', 'لیست محصولات')

@section('content')
<div class="content">

    {{-- breadcrumb --}}
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a class="is-active">محصولات</a></li>
        </ul>
    </div>

    <div class="main-content font-size-13">

        {{-- tab menu --}}
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route('admin.products.index') }}">لیست محصولات</a>
                <a class="tab__item" href="{{ route('admin.products.create') }}">افزودن محصول</a>
            </div>
        </div>

        {{-- alerts --}}
        @if(session('success'))
            <div class="alert alert-success m-2 p-2">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger m-2 p-2">{{ session('error') }}</div>
        @endif

        {{-- search --}}
        <div class="d-flex bg-white padding-15 border-radius-3 margin-top-20"
             style="align-items:center; gap:10px;">
            <form action="{{ route('admin.products.index') }}" method="GET" class="d-flex flex-grow-1">
                <input type="text" name="q" class="input" placeholder="جستجو در عنوان..."
                       value="{{ request('q') }}" style="flex-grow:1;">
                <button class="btn btn-brand margin-right-10">جستجو</button>
            </form>

            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">+ محصول جدید</a>
        </div>

        {{-- table --}}
        <div class="bg-white padding-30 border-radius-3 margin-top-20">

            <table class="table font-size-13">
                <thead>
                <tr>
                    <th>تصویر</th>
                    <th>عنوان</th>
                    <th>دسته‌بندی</th>
                    <th>قیمت</th>
                    <th>موجودی</th>
                    <th>وضعیت</th>
                    <th>نمایش</th>
                    <th>تاریخ</th>
                    <th>عملیات</th>
                </tr>
                </thead>

                <tbody>
                @forelse($products as $product)
                    <tr id="row-{{ $product->id }}">

                        {{-- تصویر --}}
                        <td>
                            @if($product->image)
                                <img src="{{ asset($product->image) }}" width="55" class="radius-5">
                            @else
                                <span class="text-gray">—</span>
                            @endif
                        </td>

                        {{-- عنوان --}}
                        <td>{{ $product->title }}</td>

                        {{-- دسته‌بندی --}}
                        <td>{{ $product->category->name ?? '—' }}</td>

                        {{-- قیمت --}}
                        <td>{{ number_format($product->price) }} تومان</td>

                        {{-- موجودی --}}
                        <td>{{ $product->quantity }}</td>

                        {{-- وضعیت --}}
                        <td>
                            @if($product->is_active)
                                <span class="chip-success">فعال</span>
                            @else
                                <span class="chip-danger">غیرفعال</span>
                            @endif
                        </td>

                        {{-- نمایش در سایت --}}
                        <td>
                            @if($product->show_on_site)
                                <span class="chip-primary">نمایش</span>
                            @else
                                <span class="chip-gray">عدم نمایش</span>
                            @endif
                        </td>

                        {{-- تاریخ --}}
                        <td>{{ jdate($product->created_at)->format('Y/m/d') }}</td>

                        {{-- عملیات --}}
                        <td class="d-flex" style="gap:10px;">

                            <a href="{{ route('admin.products.edit', $product->id) }}"
                               class="btn btn-primary btn-sm">ویرایش</a>

                            <button class="btn btn-danger btn-sm delete-btn"
                                    data-id="{{ $product->id }}">حذف</button>

                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center text-gray">محصولی یافت نشد.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            {{-- pagination --}}
            <div class="pagination-wrapper margin-top-20">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div>
</div>


{{-- حذف AJAX --}}
<script>
    document.addEventListener("click", function (e) {

        if (e.target.classList.contains("delete-btn")) {

            let id = e.target.dataset.id;

            if (!confirm("آیا از حذف محصول مطمئن هستید؟")) return;

            fetch("{{ url('admin/products') }}/" + id, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Accept": "application/json",
                }
            })
                .then(res => res.json())
                .then(data => {
                    if (data.status || data.success) {
                        document.querySelector("#row-" + id).remove();
                    } else {
                        alert("خطا در حذف محصول");
                    }
                });
        }
    });
</script>

@endsection
