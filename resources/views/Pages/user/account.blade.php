@extends("Pages.user.app")
@section("profile_cotent")
    <div class="tab-content col-lg-9 col-md-8">
        <div class="tab-pane active" id="dashboard">
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
        <div class="tab-pane" id="account">
            <form action="#" class="form">
                <div class="row">
                    <div class="col-sm-6">
                        <label>نام </label>
                        <input type="text" class="form-control" name="first_name" required="">
                    </div>
                    <div class="col-sm-6">
                        <label>نام خانوادگی</label>
                        <input type="text" class="form-control" name="last_name" required="">
                    </div>
                </div>
                <label>نام کاربری</label>
                <input type="text" class="form-control mb-0 text-left" name="display_name" required="">
                <small class="d-block form-text mb-5 mt-3">
                    به این ترتیب نام شما نمایش داده می شود
                    در بخش حساب و در بررسی
                </small>
                <label>ایمیل</label>
                <input type="email" class="form-control text-left" name="email" required="" placeholder="ایمیل">
                <fieldset>
                    <legend>تغییر پسورد</legend>
                    <label>رمز عبور فعلی (خالی بگذارید تا بدون تغییر باقی بماند)</label>
                    <input type="password" class="form-control text-left ltr" name="current_password">
                    <label>رمز عبور جدید (خالی بگذارید تا بدون تغییر باقی بماند)</label>
                    <input type="password" class="form-control text-left ltr" name="new_password">
                    <label>رمز عبور جدید را تایید کنید</label>
                    <input type="password" class="form-control text-left ltr" name="confirm_password">
                </fieldset>
                <a href="shop-classic-filter.html" class="btn btn-dark btn-rounded btn-md btn-gradient mt-4">
                    ذخیره تغییرات
                </a>
            </form>
        </div>
    </div>
@endsection
