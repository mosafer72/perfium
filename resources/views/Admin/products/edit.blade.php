@extends('Admin.app')

@section('title', 'ویرایش محصول')

@section('content')
<div class="content">

    {{-- breadcrumb --}}
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a href="{{ route('admin.products.index') }}">محصولات</a></li>
            <li><a href="#" class="is-active">ویرایش محصول</a></li>
        </ul>
    </div>

    <div class="main-content font-size-13">

        {{-- tabs --}}
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item" href="{{ route('admin.products.index') }}">لیست محصولات</a>
                <a class="tab__item is-active" href="#">ویرایش محصول</a>
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
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                  class="padding-30 bg-white border-radius-3">

                @csrf
                @method('PUT')

                <div class="row no-gutters">

                    {{-- title --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">عنوان فارسی</label>
                        <input type="text" name="title" class="input"
                               value="{{ old('title', $product->title) }}" required>
                    </div>

                    {{-- english title --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">عنوان انگلیسی</label>
                        <input type="text" name="english_title" class="input"
                               value="{{ old('english_title', $product->english_title) }}">
                    </div>

                    {{-- slug --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">اسلاگ</label>
                        <input type="text" name="slug" class="input"
                               value="{{ old('slug', $product->slug) }}">
                    </div>

                    {{-- sku --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">SKU</label>
                        <input type="text" name="sku" class="input"
                               value="{{ old('sku', $product->sku) }}">
                    </div>

                    {{-- short desc --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">توضیح کوتاه</label>
                        <textarea class="input" name="short_description">{{ old('short_description', $product->short_description) }}</textarea>
                    </div>

                    {{-- description --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">توضیح کامل</label>
                        <textarea class="input" name="description" rows="6">{{ old('description', $product->description) }}</textarea>
                    </div>

                    {{-- price --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">قیمت</label>
                        <input type="number" name="price" class="input"
                               value="{{ old('price', $product->price) }}" required>
                    </div>

                    {{-- discount --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">درصد تخفیف</label>
                        <input type="number" name="discount_percent" class="input"
                               min="0" max="90"
                               value="{{ old('discount_percent', $product->discount_percent) }}">
                    </div>

                    {{-- quantity --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">موجودی</label>
                        <input type="number" name="quantity" class="input"
                               value="{{ old('quantity', $product->quantity) }}">
                    </div>

                    {{-- type --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">نوع محصول</label>
                        <select class="input" name="type">
                            <option value="perfume" {{ old('type', $product->type) == 'perfume' ? 'selected' : '' }}>عطر</option>
                            <option value="deodorant" {{ old('type', $product->type) == 'deodorant' ? 'selected' : '' }}>اسپری</option>
                            <option value="gift-set" {{ old('type', $product->type) == 'gift-set' ? 'selected' : '' }}>ست هدیه</option>
                            <option value="body-splash" {{ old('type', $product->type) == 'body-splash' ? 'selected' : '' }}>بادی اسپلش</option>
                        </select>
                    </div>


                    {{-- Main image --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">تصویر اصلی</label>

                        <input type="hidden" name="image" id="image_input"
                               value="{{ old('image', $product->image) }}">

                        <div class="d-flex" style="gap:10px">
                            <button type="button" class="btn btn-dark" id="upload_main_btn">آپلود</button>
                            <a href="{{ route('admin.fm.index') }}" class="btn btn-info">انتخاب از فایل‌منیجر</a>
                        </div>

                        <div id="upload_main_preview" class="margin-top-10">
                            @if(old('image', $product->image))
                                <img src="{{ asset(old('image', $product->image)) }}" width="120">
                            @endif
                        </div>
                    </div>

                    {{-- gallery --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">گالری تصاویر</label>

                        <input type="hidden" name="gallery" id="gallery_input"
                               value="{{ old('gallery', $product->gallery) }}">

                        <div class="d-flex" style="gap:10px">
                            <button type="button" class="btn btn-dark" id="upload_gallery_btn">آپلود</button>
                            <a href="{{ route('admin.fm.index') }}" class="btn btn-info">انتخاب از فایل‌منیجر</a>
                        </div>

                        <div id="gallery_preview" style="display:flex; gap:10px; flex-wrap:wrap;margin-top:10px;">
                            @if(old('gallery', $product->gallery))
                                @foreach(explode(',', old('gallery', $product->gallery)) as $g)
                                    <img src="{{ asset($g) }}" width="80">
                                @endforeach
                            @endif
                        </div>
                    </div>

                    {{-- banner --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">بنر محصول</label>
                        <input type="text" name="banner" class="input"
                               value="{{ old('banner', $product->banner) }}">
                    </div>


                    {{-- ⭐ TAB-MAIN --}}
                    <div class="col-12 margin-bottom-20">
                        <h3 class="margin-bottom-10">تنظیمات tab-main</h3>
                        <hr>
                    </div>

                    {{-- show_in_tab --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="d-flex item-center">
                            <input type="checkbox" name="show_in_tab" value="1"
                                   {{ old('show_in_tab', $product->show_in_tab) ? 'checked' : '' }}>
                            <span class="margin-right-10">نمایش در بخش تخفیف پرفیوم</span>
                        </label>
                    </div>

                    {{-- tab_sort_order --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">ترتیب نمایش</label>
                        <input type="number" name="tab_sort_order" class="input"
                               value="{{ old('tab_sort_order', $product->tab_sort_order) }}">
                    </div>

                    {{-- tab image --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">تصویر مخصوص تب</label>
                        <input type="text" name="tab_image" id="tab_image"
                               value="{{ old('tab_image', $product->tab_image) }}"
                               class="input">

                        <div class="d-flex" style="gap:10px; margin-top:10px;">
                            <button type="button" class="btn btn-dark" id="upload_tab_image_btn">آپلود</button>
                            <a href="{{ route('admin.fm.index') }}" class="btn btn-info">انتخاب از فایل‌منیجر</a>
                        </div>

                        <div id="tab_image_preview" style="margin-top:10px;">
                            @if(old('tab_image', $product->tab_image))
                                <img src="{{ asset(old('tab_image', $product->tab_image)) }}" width="120">
                            @endif
                        </div>
                    </div>

                    {{-- perfume attributes --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">جنسیت</label>
                        <input type="text" name="gender" class="input"
                               value="{{ old('gender', $product->gender) }}">
                    </div>

                    <div class="col-12 margin-bottom-15">
                        <label class="label">طبع</label>
                        <input type="text" name="nature" class="input"
                               value="{{ old('nature', $product->nature) }}">
                    </div>

                    <div class="col-12 margin-bottom-15">
                        <label class="label">فصل مناسب</label>
                        <input type="text" name="season" class="input"
                               value="{{ old('season', $product->season) }}">
                    </div>

                    <div class="col-12 margin-bottom-15">
                        <label class="label">ماندگاری</label>
                        <input type="text" name="duration" class="input"
                               value="{{ old('duration', $product->duration) }}">
                    </div>

                    <div class="col-12 margin-bottom-15">
                        <label class="label">پخش بو</label>
                        <input type="text" name="spread" class="input"
                               value="{{ old('spread', $product->spread) }}">
                    </div>


                    {{-- category --}}
                    <div class="col-12 margin-bottom-15">
                        <label class="label">دسته‌بندی</label>
                        <select class="input" name="category_id">
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- active --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">وضعیت</label>
                        <select class="input" name="is_active">
                            <option value="1" {{ old('is_active', $product->is_active) == 1 ? 'selected' : '' }}>فعال</option>
                            <option value="0" {{ old('is_active', $product->is_active) == 0 ? 'selected' : '' }}>غیرفعال</option>
                        </select>
                    </div>

                    {{-- show --}}
                    <div class="col-6 margin-bottom-15">
                        <label class="label">نمایش در سایت</label>
                        <select class="input" name="show_on_site">
                            <option value="1" {{ old('show_on_site', $product->show_on_site)=='1' ? 'selected' : '' }}>نمایش</option>
                            <option value="0" {{ old('show_on_site', $product->show_on_site)=='0' ? 'selected' : '' }}>عدم نمایش</option>
                        </select>
                    </div>

                    {{-- submit --}}
                    <div class="col-12 margin-top-20">
                        <button class="btn btn-brand">ویرایش محصول</button>
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
