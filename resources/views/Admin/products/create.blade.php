@extends('Admin.app')

@section('title', 'افزودن محصول جدید')

@section('content')
<div class="content">

    {{-- breadcrumb --}}
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a href="{{ route('admin.products.index') }}">محصولات</a></li>
            <li><a href="#" class="is-active">افزودن محصول</a></li>
        </ul>
    </div>

    <div class="main-content font-size-13">

        {{-- tabs --}}
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item" href="{{ route('admin.products.index') }}">لیست محصولات</a>
                <a class="tab__item is-active" href="{{ route('admin.products.create') }}">افزودن محصول</a>
            </div>
        </div>

        {{-- alerts --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="m-0">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- form --}}
        <div class="form__box">
            <form action="{{ route('admin.products.store') }}" method="POST"
                  class="padding-30 bg-white border-radius-3">

                @csrf
                <div class="row no-gutters">

                    {{-- title --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">عنوان فارسی</label>
                        <input type="text" name="title" class="input" value="{{ old('title') }}" required>
                    </div>

                    {{-- english title --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">عنوان انگلیسی</label>
                        <input type="text" name="english_title" class="input" value="{{ old('english_title') }}">
                    </div>

                    {{-- slug --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">اسلاگ</label>
                        <input type="text" name="slug" class="input" value="{{ old('slug') }}"
                               placeholder="اگر خالی باشد خودکار ساخته می‌شود">
                    </div>

                    {{-- sku --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">SKU</label>
                        <input type="text" name="sku" class="input" value="{{ old('sku') }}">
                    </div>

                    {{-- short desc --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">توضیح کوتاه</label>
                        <textarea class="input" name="short_description">{{ old('short_description') }}</textarea>
                    </div>

                    {{-- description --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">توضیح کامل</label>
                        <textarea class="input" name="description" rows="6">{{ old('description') }}</textarea>
                    </div>

                    {{-- price --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">قیمت</label>
                        <input type="number" name="price" class="input" value="{{ old('price') }}" required>
                    </div>

                    {{-- discount --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">درصد تخفیف</label>
                        <input type="number" name="discount_percent" class="input"
                               min="0" max="90" value="{{ old('discount_percent', 0) }}">
                    </div>

                    {{-- quantity --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">موجودی</label>
                        <input type="number" name="quantity" class="input"
                               min="0" value="{{ old('quantity', 0) }}">
                    </div>

                    {{-- type --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">نوع محصول</label>
                        <select class="input" name="type">
                            <option value="perfume" {{ old('type')=='perfume' ? 'selected' : '' }}>عطر</option>
                            <option value="deodorant" {{ old('type')=='deodorant' ? 'selected' : '' }}>اسپری</option>
                            <option value="gift-set"  {{ old('type')=='gift-set' ? 'selected' : '' }}>ست هدیه</option>
                            <option value="body-splash" {{ old('type')=='body-splash' ? 'selected' : '' }}>بادی اسپلش</option>
                        </select>
                    </div>

                    {{-- Main image --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">تصویر اصلی</label>

                        <input type="hidden" name="image" id="image_input"
                               value="{{ old('image') }}">

                        <div class="d-flex" style="gap:10px">
                            <button type="button" class="btn btn-dark" id="upload_main_btn">آپلود</button>
                            <a href="{{ route('admin.fm.index') }}" class="btn btn-info">انتخاب از فایل منیجر</a>
                        </div>

                        <div id="upload_main_preview" class="margin-top-10">
                            @if(old('image'))
                                <img src="{{ asset(old('image')) }}" width="120">
                            @endif
                        </div>
                    </div>

                    {{-- gallery --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">گالری تصاویر</label>

                        <input type="hidden" name="gallery" id="gallery_input"
                               value="{{ old('gallery') }}">

                        <div class="d-flex" style="gap:10px">
                            <button type="button" class="btn btn-dark" id="upload_gallery_btn">آپلود</button>
                            <a href="{{ route('admin.fm.index') }}" class="btn btn-info">انتخاب از فایل منیجر</a>
                        </div>

                        <div id="gallery_preview" style="display:flex; gap:10px; flex-wrap:wrap; margin-top:10px;">
                            @if(old('gallery'))
                                @foreach(explode(',', old('gallery')) as $g)
                                    <img src="{{ asset($g) }}" width="80">
                                @endforeach
                            @endif
                        </div>
                    </div>

                    {{-- banner --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">بنر محصول</label>
                        <input type="text" name="banner" class="input" value="{{ old('banner') }}">
                    </div>


                    {{-- ⭐ TAB-MAIN SETTINGS --}}
                    <div class="col-12 margin-bottom-20">
                        <h3 class="margin-bottom-10">تنظیمات بخش tab-main</h3>
                        <hr>
                    </div>

                    {{-- show_in_tab --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="d-flex item-center">
                            <input type="checkbox" name="show_in_tab" value="1"
                                   {{ old('show_in_tab') ? 'checked' : '' }}>
                            <span class="margin-right-10">نمایش در بخش تخفیف پرفیوم</span>
                        </label>
                    </div>

                    {{-- sort order --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">ترتیب نمایش</label>
                        <input type="number" name="tab_sort_order" class="input"
                               value="{{ old('tab_sort_order', 0) }}">
                    </div>

                    {{-- tab image --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">تصویر مخصوص تب</label>
                        <input type="text" name="tab_image" id="tab_image"
                               value="{{ old('tab_image') }}"
                               class="input">

                        <div class="d-flex" style="gap:10px; margin-top:10px;">
                            <button type="button" class="btn btn-dark" id="upload_tab_image_btn">آپلود</button>
                            <a href="{{ route('admin.fm.index') }}" class="btn btn-info">انتخاب از فایل‌منیجر</a>
                        </div>

                        <div id="tab_image_preview" style="margin-top:10px;">
                            @if(old('tab_image'))
                                <img src="{{ asset(old('tab_image')) }}" width="120">
                            @endif
                        </div>
                    </div>

                    {{-- perfume attributes --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">جنسیت</label>
                        <input type="text" name="gender" class="input"
                               value="{{ old('gender') }}" placeholder="مثلاً زنانه / مردانه / یونیسکس">
                    </div>

                    <div class="col-12 margin-bottom-15">
                        <label class="label">طبع</label>
                        <input type="text" name="nature" class="input"
                               value="{{ old('nature') }}" placeholder="مثلاً خنک / گرم / تلخ">
                    </div>

                    <div class="col-12 margin-bottom-15">
                        <label class="label">فصل مناسب</label>
                        <input type="text" name="season" class="input"
                               value="{{ old('season') }}" placeholder="مثلاً فصول سرد">
                    </div>

                    <div class="col-12 margin-bottom-15">
                        <label class="label">ماندگاری</label>
                        <input type="text" name="duration" class="input"
                               value="{{ old('duration') }}" placeholder="مثلاً ۲ روز">
                    </div>

                    <div class="col-12 margin-bottom-15">
                        <label class="label">پخش بو</label>
                        <input type="text" name="spread" class="input"
                               value="{{ old('spread') }}" placeholder="مثلاً ۱ روز">
                    </div>


                    {{-- category --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">دسته‌بندی</label>
                        <select class="input" name="category_id">
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ old('category_id')==$cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- active --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">وضعیت</label>
                        <select class="input" name="is_active">
                            <option value="1" {{ old('is_active')=='1' ? 'selected' : '' }}>فعال</option>
                            <option value="0" {{ old('is_active')=='0' ? 'selected' : '' }}>غیرفعال</option>
                        </select>
                    </div>

                    {{-- show --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">نمایش در سایت</label>
                        <select class="input" name="show_on_site">
                            <option value="1" {{ old('show_on_site')=='1' ? 'selected' : '' }}>نمایش</option>
                            <option value="0" {{ old('show_on_site')=='0' ? 'selected' : '' }}>عدم نمایش</option>
                        </select>
                    </div>

                    {{-- submit --}}
                    <div class="col-12 margin-top-20">
                        <button class="btn btn-brand">ثبت محصول</button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-gray">بازگشت</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

{{-- AJAX upload + filemanager --}}
@include('Admin.products.scripts')

@endsection
