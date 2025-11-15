@extends('Admin.app')

@section('title', 'لیست اسلایدرها')

@section('content')
<div class="content">
    @include('Admin.partials.header')

    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a class="is-active">اسلایدر</a></li>
        </ul>
    </div>

    <div class="main-content">

        <div class="tab__box">
            <div class="tab__items">
                <a href="{{ route('admin.sliders.index') }}" class="tab__item is-active">لیست اسلایدرها</a>
                <a href="{{ route('admin.sliders.create') }}" class="tab__item">افزودن اسلایدر</a>
            </div>
        </div>

        <div class="bg-white padding-30 border-radius-3">
            <table class="table font-size-13">
                <thead>
                    <tr>
                        <th>عکس</th>
                        <th>عنوان</th>
                        <th>لینک</th>
                        <th>ترتیب</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sliders as $slider)
                        <tr id="row-{{ $slider->id }}">
                            <td><img src="{{ asset($slider->image) }}" width="100"></td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->button_link }}</td>
                            <td>{{ $slider->sort_order }}</td>
                            <td>
                                @if($slider->is_active)
                                    <span class="chip-success">فعال</span>
                                @else
                                    <span class="chip-danger">غیرفعال</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-primary btn-sm">ویرایش</a>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $slider->id }}">حذف</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

<script>
document.addEventListener("click", e => {
    if(e.target.classList.contains("delete-btn")){
        let id = e.target.dataset.id;
        if(!confirm("آیا از حذف مطمئن هستید؟")) return;

        fetch("{{ url('/admin/sliders') }}/" + id, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Accept": "application/json"
            }
        })
        .then(res => res.json())
        .then(data => {
            if(data.status){
                document.querySelector("#row-" + id).remove();
            }
        });
    }
});
</script>

@endsection
