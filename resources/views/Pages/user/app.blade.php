@extends("Pages.layouts.master")
@section("content")
    <main class="main rtl text-right">
        <nav class="breadcrumb-nav">
            <div class="container breadcrumb-nav-wrap">
                <ul class="breadcrumb ">
                    <li><a href="index.html"><i class="fa-light fa-house"></i></a></li>
                    <li>
                        حساب کاربری
                    </li>
                </ul>
            </div>
        </nav>
        <div class="page-content">
            <div class="container account-main">
                <h2 class="title title-center mb-10">حساب کاربری</h2>
                <div class="tab tab-vertical gutter-lg">
                    <ul class="nav nav-tabs mb-4 col-lg-3 col-md-4 nav-tabs-account mr-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-right active" href="{{ route("user.profile") }}">داشبورد</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right" href="{{ route("user.orders") }}">سفارشات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right " href="#downloads">دانلود</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right " href="{{ route("user.address.index") }}">آدرس</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right " href="#account">جزئیات کاربری</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right" href="login.html">خروج</a>
                        </li>
                    </ul>
                    @yield("profile_cotent")
                </div>
            </div>
        </div>
    </main>
@endsection
