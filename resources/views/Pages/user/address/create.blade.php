@extends("Pages.user.app")
@section("profile_cotent")
    <div class="tab-content col-lg-9 col-md-8">
        <div class="tab-pane" id="dashboard">
            <p class="mb-0">
                سلام <span>مشتری عزیز</span> (یا <span>کاربر مهمان گرامی</span> / <a href="#" class="text-primary">
                    خروج
                </a>)
            </p>
            <p class="mb-8">
                از داشبورد حساب خود می توانید سفارشات اخیر خود را مشاهده کنید.
                <a href="#orders" class="link-to-tab text-primary">
                    آدرس های حمل و نقل و صورتحساب خود را مدیریت کنید،
                    <br>و رمز عبور و جزئیات حساب خود را ویرایش کنید.
                </a>
            </p>
            <a href="shop-classic-filter.html" class="btn btn-dark btn-rounded btn-md btn-gradient">
                رفتن به فروشگاه <i class="fa-light fa-angles-right"></i>
            </a>
        </div>
        <div class="tab-pane" id="orders">
            <table class="order-table">
                <thead>
                    <tr>
                        <th>سفارش</th>
                        <th> تاریخ </th>
                        <th>وضعیت</th>
                        <th>جمع</th>
                        <th class="pl-2">اقدامات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="order-number"><a href="#">#3596</a></td>
                        <td class="order-date"><span>2 آبان 1402</span></td>
                        <td class="order-status"><span>درحال بارگیری</span></td>
                        <td class="order-total"><span>3میلیون تومان برای 5 بسته </span></td>
                        <td class="order-action">
                            <a href="#" class="btn btn-link btn-underline">نمایش </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="order-number"><a href="#">#3593</a></td>
                        <td class="order-date"><span>2 آبان 1402</span></td>
                        <td class="order-status"><span>درحال بارگیری</span></td>
                        <td class="order-total"><span>3میلیون تومان برای 5 بسته</span></td>
                        <td class="order-action">
                            <a href="#" class="btn btn-link btn-underline">نمایش </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="order-number"><a href="#">#2547</a></td>
                        <td class="order-date"><span>2 آبان 1402</span></td>
                        <td class="order-status"><span>درحال بارگیری</span></td>
                        <td class="order-total"><span>3میلیون تومان برای 5 بسته</span></td>
                        <td class="order-action">
                            <a href="#" class="btn btn-link btn-underline">نمایش </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="order-number"><a href="#">#2549</a></td>
                        <td class="order-date"><span>2 آبان 1402</span></td>
                        <td class="order-status"><span>درحال بارگیری</span></td>
                        <td class="order-total"><span>3میلیون تومان برای 5 بسته</span></td>
                        <td class="order-action">
                            <a href="#" class="btn btn-link btn-underline">نمایش </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="order-number"><a href="#">#4523</a></td>
                        <td class="order-date"><span>2 آبان 1402</span></td>
                        <td class="order-status"><span>درحال بارگیری</span></td>
                        <td class="order-total"><span>3میلیون تومان برای 5 بسته</span></td>
                        <td class="order-action">
                            <a href="#" class="btn btn-link btn-underline">نمایش </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="order-number"><a href="#">#4526</a></td>
                        <td class="order-date"><span>2 آبان 1402</span></td>
                        <td class="order-status"><span>درحال بارگیری</span></td>
                        <td class="order-total"><span>3میلیون تومان برای 5 بسته</span></td>
                        <td class="order-action">
                            <a href="#" class="btn btn-link btn-underline">نمایش </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane" id="downloads">
            <p class="mb-4 text-body">هنوز دانلودی در دسترس نیست.</p>
            <a href="#" class="btn btn-link btn-underline">
                لیست محصولات<i class="fa-light fa-angles-right"></i>
            </a>
        </div>
        <div class="tab-pane" id="address">
            <p class="mb-2">
                آدرس های زیر به طور پیش فرض در صفحه پرداخت استفاده می شود.
            </p>
            <div class="row">
                <div class="col-sm-6 mb-4">
                    <div class="card card-address">
                        <div class="card-body">
                            <h5 class="card-title">آدرس قبض</h5>
                            <p>
                                سارا <br>
                                دفتر فروش<br>
                                بلوار آزادگان<br>
                            </p>
                            <a href="#" class="btn btn-link btn-secondary btn-underline">
                                ویرایش <i class="far fa-edit"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="card card-address">
                        <div class="card-body">
                            <h5 class="card-title">آدرس حمل ونقل</h5>
                            <p>شما هنوز این نوع آدرس را تنظیم نکرده اید.</p>
                            <a href="#" class="btn btn-link btn-secondary btn-underline">
                                ویرایش <i class="far fa-edit"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane active in col-md-10" id="account">
            @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('user.address.store') }}" method="POST">
                @csrf

                <input type="text" name="title" class="form-control mb-2" placeholder="عنوان آدرس"
                    value="{{ old('title') }}">

                <select name="province" id="state" class="form-control mb-2" onchange="getcities(this.value)"></select>

                <input type="hidden" name="province_name" id="province_name">


                <select name="city" id="city" class="form-control mb-2"></select>

                <input type="hidden" name="city_name" id="city_name">

                <input type="text" name="address" class="form-control mb-2" placeholder="آدرس" value="{{ old('address') }}">

                <input type="text" name="postalcode" class="form-control mb-2" placeholder="کد پستی"
                    value="{{ old('postalcode') }}">

                <button class="btn btn-dark btn-rounded mt-3">
                    ذخیره آدرس
                </button>
            </form>

        </div>
    </div>
@endsection
@section("script")
    <script>
        get_province();
        async function get_province() {
            let stateSelect = $("#state");
            const url = "https://www.iran-locations-api.ir/api/v1/fa/states";

            const provinceName = stateSelect.find("option:selected").data("name");
            $("#province_name").val(provinceName);

            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`Response status: ${response.status}`);
                }
                const result = await response.json();
                $.each(result, function (i, state) {
                    stateSelect.append(
                        `<option value="${state.id}" data-name="${state.name}">${state.name}</option>`
                    );
                });
                $("#province_name").val(result[0].name);
                console.log(result);
            } catch (error) {
                console.error(error.message);
            }
        }
        getcities(1);
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
                $.each(result, function (i, state) {
                    citySelect.append(
                        `<option value="${state.id}" data-name="${city.name}" >${state.name}</option>`
                    );
                    $("#city_name").val(result[0].name);
                });
                console.log(result);
            } catch (error) {
                console.error(error.message);
            }
        };

        $("#city").on("change", function () {
            const cityName = this.options[this.selectedIndex].dataset.name;
            $("#city_name").val(cityName);
        });
        $("#province").on("change", function () {
            const province = this.options[this.selectedIndex].dataset.name;
            $("#city_name").val(province);
        });

    </script>
@endsection
