@extends("Pages.user.app")

@section("profile_cotent")
<div class="tab-content col-lg-9 col-md-8">
    <div class="tab-pane active in">

        <h4 class="mb-4">ویرایش آدرس</h4>

        {{-- پیام موفقیت --}}
        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        {{-- خطاهای اعتبارسنجی --}}
        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.address.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text"
                   name="title"
                   class="form-control mb-3"
                   placeholder="عنوان آدرس (مثلاً منزل، محل کار)"
                   value="{{ old('title', $item->title) }}">

            <select name="province"
                    id="state"
                    class="form-control mb-3"
                    onchange="getcities(this.value)">
            </select>
            <input type="hidden" name="province_name" id="province_name" value="{{ $item->province_name }}">

            <select name="city"
                    id="city"
                    class="form-control mb-3">
            </select>
            <input type="hidden" name="city_name" id="city_name" value="{{ $item->city_name }}">

            <input type="text"
                   name="address"
                   class="form-control mb-3"
                   placeholder="آدرس کامل"
                   value="{{ old('address', $item->address) }}">

            <input type="text"
                   name="postalcode"
                   class="form-control mb-3"
                   placeholder="کد پستی"
                   value="{{ old('postalcode', $item->postalcode) }}">

            <button class="btn btn-dark btn-rounded mt-3">
                ذخیره تغییرات
            </button>

            <a href="{{ route('user.address.index') }}"
               class="btn btn-link text-secondary mt-3">
                بازگشت
            </a>
        </form>

    </div>
</div>
@endsection
@section("script")
    <script>
        get_province({{ $item->province }});
        async function get_province(id) {
            let stateSelect = $("#state");
            const url = "https://www.iran-locations-api.ir/api/v1/fa/states";
            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`Response status: ${response.status}`);
                }
                const result = await response.json();
                $.each(result, function (i, state) {
                    stateSelect.append(`<option value="${state.id}" ${state.id == id ? 'selected' : ''} data-name="${state.name}">${state.name}</option>`);
                });
                console.log(result);
            } catch (error) {
                console.error(error.message);
            }
        }
        getcities({{ $item->province }});
        async function getcities(stateId) {
            console.log(stateId)
            let citySelect = $("#city");

            // ریست شهرها
            citySelect.text('<option value="">انتخاب شهر</option>');

            if (!stateId) return;

            const url_city = "https://www.iran-locations-api.ir/api/v1/fa/cities?state_id=" + stateId
            try {
                const response = await fetch(url_city);
                if (!response.ok) {
                    throw new Error(`Response status: ${response.status}`);
                }
                const result = await response.json();
                $.each(result, function (i, city) {
                       citySelect.append(`<option value="${city.id}" ${city.id == {{ $item->city  }} ? 'selected' : ''} data-name="${city.name}">${city.name}</option>`);
                });
                console.log(result);
            } catch (error) {
                console.error(error.message);
            }
        };

         $(document).on("change","#city" , function () {
            console.log("this is true");
            const cityName = $(this).find("option:selected").data("name");
            console.log(cityName);
            $("#city_name").val(cityName);
        });

        $(document).on("change","#state" , function () {
            const province = $(this).find("option:selected").data("name");
            $("#province_name").val(province);
        });


    </script>
@endsection

