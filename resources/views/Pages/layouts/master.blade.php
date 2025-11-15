<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>قالب پرفیوم :: صفحه اصلی</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="پرفیوم - قالب نهایی فروشگاه  آنلاین ">
    <meta name="author" content="M-dehghan marziye.dehghan8006@gmail.com">
    <link rel="icon" type="image/png" href="/assets/images/icons/favicon.png">
    <link rel="stylesheet" type="text/css" href="/assets/fonts/awesome/css/custom.css">
    <link href="/assets/fonts/vazir/font-vazir.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/assets/plugin/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugin/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugin/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugin/photoswipe/default-skin/default-skin.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugin/sticky-icon/stickyicon.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main-min.css">
</head>
<body>
    <div class="bg-loader">
        <div class="loader"></div>
    </div>
    <div class="page-wrapper">
        @include("Pages.layouts.header")
            @yield("content")
        @include("Pages.layouts.footer")
    </div>
    <div class="sticky-footer sticky-content fix-bottom rtl text-right">
        <a href="index.html" class="sticky-link">
            <i class="fa-light fa-home"></i>
            <span>صفحه نخست</span>
        </a>
        <a href="shop-classic-filter.html" class="sticky-link">
            <i class="fa-light fa-sliders-up"></i>
            <span>دسته بندی</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="fa-light fa-heart"></i>
            <span>علاقه مندی</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="fa-light fa-user"></i>
            <span>حساب کاربری</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="fa-light fa-magnifying-glass"></i>
                <span>جستجو</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                       placeholder="جستجو ..." required />
                <button class="btn btn-search" type="submit">
                    <i class="fa-light fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fa-light fa-arrow-up"></i></a>

    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>

        <a class="mobile-menu-close" href="#"><i class="fa-light fa-xmark"></i></a>

        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                       placeholder="جستجو ..." required />
                <button class="btn btn-search" type="submit">
                    <i class="fa-light fa-magnifying-glass"></i>
                </button>
            </form>

            <div class="tab tab-nav-simple tab-nav-center tab-nav-boxed">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <a href="#tab-11" class="nav-link active">منو اصلی</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab-21" class="nav-link">منو دسته بندی</a>
                    </li>
                </ul>
            </div>
            <div class="mobile-menu mmenu-anim tab-content">
                <div class="tab-pane active" id="tab-11">
                    <ul>
                        <li>
                            <a href="shop-classic-filter.html" class="active"><i class="fa-light fa-wine-bottle"></i>عطرها</a>
                            <ul>
                                <li>
                                    <a href="product.html">عطر های زنانه</a>
                                    <ul>
                                        <li><a href="product.html">عطر زنانه تلخ</a></li>
                                        <li><a href="product.html">عطر زنانه تند</a></li>
                                        <li><a href="product.html">عطر زنانه شیرین</a></li>
                                        <li><a href="product.html">عطر زنانه ترش</a></li>
                                        <li><a href="product.html">همه عطرهای زنانه</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطر های مردانه</a>
                                    <ul>
                                        <li><a href="product.html">عطر مردانه تلخ</a></li>
                                        <li><a href="product.html">عطر مردانه تند</a></li>
                                        <li><a href="product.html">عطر مردانه شیرین</a></li>
                                        <li><a href="product.html">عطر مردانه ترش</a></li>
                                        <li><a href="product.html">همه عطرهای مردانه</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطر های نوجوان</a>
                                    <ul>
                                        <li><a href="product.html">عطر نوجوان تلخ</a></li>
                                        <li><a href="product.html">عطر نوجوان تند</a></li>
                                        <li><a href="product.html">عطر نوجوان شیرین</a></li>
                                        <li><a href="product.html">عطر نوجوان ترش</a></li>
                                        <li><a href="product.html">همه عطرهای نوجوان</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطر های کودکانه</a>
                                    <ul>
                                        <li><a href="product.html">عطر کودکانه تلخ</a></li>
                                        <li><a href="product.html">عطر کودکانه تند</a></li>
                                        <li><a href="product.html">عطر کودکانه شیرین</a></li>
                                        <li><a href="product.html">عطر کودکانه ترش</a></li>
                                        <li><a href="product.html">همه عطرهای کودکانه</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="product.html"><i class="fa-light fa-prescription-bottle"></i>عطرهای منیاتوری</a>
                            <ul>
                                <li>
                                    <a href="product.html">عطرهای منیاتوری زنانه</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای منیاتوری زنانه تلخ</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری زنانه تند</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری زنانه شیرین</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری زنانه ترش</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری زنانه </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطرهای منیاتوری مردانه</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای منیاتوری مردانه تلخ</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری مردانه تند</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری مردانه شیرین</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری مردانه ترش</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری مردانه </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطرهای منیاتوری نوجوان</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای منیاتوری نوجوان تلخ</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری نوجوان تند</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری نوجوان شیرین</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری نوجوان ترش</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری نوجوان </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطرهای منیاتوری کودکانه</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای منیاتوری کودکانه تلخ</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری کودکانه تند</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری کودکانه شیرین</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری کودکانه ترش</a></li>
                                        <li><a href="product.html">عطرهای منیاتوری کودکانه </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="product.html"> <i class="fa-light fa-vial"></i>عطرهای سمپل </a>
                            <ul>
                                <li>
                                    <a href="product.html">عطرهای سمپل زنانه</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای سمپل زنانه تلخ</a></li>
                                        <li><a href="product.html">عطرهای سمپل زنانه تند</a></li>
                                        <li><a href="product.html">عطرهای سمپل زنانه شیرین</a></li>
                                        <li><a href="product.html">عطرهای سمپل زنانه ترش</a></li>
                                        <li><a href="product.html">عطرهای سمپل زنانه </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطرهای سمپل مردانه</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای سمپل مردانه تلخ</a></li>
                                        <li><a href="product.html">عطرهای سمپل مردانه تند</a></li>
                                        <li><a href="product.html">عطرهای سمپل مردانه شیرین</a></li>
                                        <li><a href="product.html">عطرهای سمپل مردانه ترش</a></li>
                                        <li><a href="product.html">عطرهای سمپل مردانه </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطرهای سمپل نوجوان</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای سمپل نوجوان تلخ</a></li>
                                        <li><a href="product.html">عطرهای سمپل نوجوان تند</a></li>
                                        <li><a href="product.html">عطرهای سمپل نوجوان شیرین</a></li>
                                        <li><a href="product.html">عطرهای سمپل نوجوان ترش</a></li>
                                        <li><a href="product.html">عطرهای سمپل نوجوان </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطرهای سمپل کودکانه</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای سمپل کودکانه تلخ</a></li>
                                        <li><a href="product.html">عطرهای سمپل کودکانه تند</a></li>
                                        <li><a href="product.html">عطرهای سمپل کودکانه شیرین</a></li>
                                        <li><a href="product.html">عطرهای سمپل کودکانه ترش</a></li>
                                        <li><a href="product.html">عطرهای سمپل کودکانه </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="product.html"><i class="fa-light fa-heart"></i>عطرهای برند</a>
                            <ul>
                                <li>
                                    <a href="product.html">عطرهای برندهای زنانه</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای برندهای زنانه تلخ</a></li>
                                        <li><a href="product.html">عطرهای برندهای زنانه تند</a></li>
                                        <li><a href="product.html">عطرهای برندهای زنانه شیرین</a></li>
                                        <li><a href="product.html">عطرهای برندهای زنانه ترش</a></li>
                                        <li><a href="product.html">عطرهای برندهای زنانه </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطرهای برندهای مردانه</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای برندهای مردانه تلخ</a></li>
                                        <li><a href="product.html">عطرهای برندهای مردانه تند</a></li>
                                        <li><a href="product.html">عطرهای برندهای مردانه شیرین</a></li>
                                        <li><a href="product.html">عطرهای برندهای مردانه ترش</a></li>
                                        <li><a href="product.html">عطرهای برندهای مردانه </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطرهای برندهای نوجوان</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای برندهای نوجوان تلخ</a></li>
                                        <li><a href="product.html">عطرهای برندهای نوجوان تند</a></li>
                                        <li><a href="product.html">عطرهای برندهای نوجوان شیرین</a></li>
                                        <li><a href="product.html">عطرهای برندهای نوجوان ترش</a></li>
                                        <li><a href="product.html">عطرهای برندهای نوجوان </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="product.html">عطرهای برندهای کودکانه</a>
                                    <ul>
                                        <li><a href="product.html">عطرهای برندهای کودکانه تلخ</a></li>
                                        <li><a href="product.html">عطرهای برندهای کودکانه تند</a></li>
                                        <li><a href="product.html">عطرهای برندهای کودکانه شیرین</a></li>
                                        <li><a href="product.html">عطرهای برندهای کودکانه ترش</a></li>
                                        <li><a href="product.html">عطرهای برندهای کودکانه </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="product.html"><i class="fa-light fa-jug"></i>ادکلن سایز بزرگ</a></li>
                        <li><a href="product.html"><i class="fa-light fa-gift"></i>گیفت ست</a></li>
                        <li><a href="product.html"><i class="fa-light fa-box-heart"></i>عطرلوکس</a></li>
                        <li><a href="product.html"><i class="fa-light fa-sitemap"></i>فروش عمده و سازمانی</a></li>
                        <li><a href="product.html"><i class="fa-light fa-badge-percent"></i>عطرهای تخفیف دار</a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="tab-21">
                    <ul>
                        <li>
                            <a href="#">صفحات </a>
                            <ul>
                                <li><a href="index.html">صفحه اصلی 1</a></li>
                                <li><a href="index2.html">صفحه اصلی 2</a></li>
                                <li><a href="index3.html">صفحه اصلی 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">وبلاگ</a>
                            <ul>
                                <li><a href="blog.html">شرح مقاله</a></li>
                                <li><a href="blog-classic.html">لیست مقالات</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">دیگر صفحات</a>
                            <ul>
                                <li><a href="account.html">کاربری</a></li>
                                <li><a href="checkout.html">صورتحساب</a></li>
                                <li><a href="coming-soon.html">بزودی</a></li>
                                <li><a href="error-404.html">لیست آیکن ها ( فونت آوسوم )</a></li>
                                <li><a href="order.html">سفارش</a></li>
                                <li><a href="wishlist-empty.html">علاقه مندی خالی</a></li>
                                <li><a href="wishlist.html">علاقه مندی</a></li>
                                <li><a href="login.html">ورود</a></li>
                                <li><a href="register.html">ثبت نام</a></li>
                                <li><a href="notify-me.html">خبرم کن</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">محصولات</a>
                            <ul>
                                <li><a href="product.html">معرفی محصول</a></li>
                                <li><a href="shop-list-mode.html">محصولات با فیلتر ( لیستی )</a></li>
                                <li><a href="shop-classic-filter.html">محصولات با فیلتر ( گریدی )</a></li>
                                <li><a href="cart-empty.html">سبد خرید ( خالی )</a></li>
                                <li><a href="cart.html">سبد خرید</a></li>
                            </ul>
                        </li>
                        <li><a href="checkout.html">پیگیری سفارش</a></li>
                        <li><a href="about.html"> درباره ما</a></li>
                        <li><a href="contact.html"> تماس با ما</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="sticky-icons-wrapper rtl">
        <div class="sticky-icon-links">
            <ul>
                <li><a href="index.html"><i class="fa-light fa-home"></i><span>خانه</span></a></li>
                <li>
                    <a href="contact.html"><i class="fa-light fa-phone"></i><span>تماس با ما</span></a>
                </li>
                <li><a href="wishlist.html"><i class="fa-light fa-heart"></i><span>علاقه مندی</span></a></li>
                <li>
                    <a class="white" href="shop-list-mode.html"><i class="fa-light fa-shopping-cart"></i><span>فروشگاه</span></a>
                </li>
            </ul>
        </div>
    </div>
    <script defer src="/assets/plugin/jquery/jquery.min.js"></script>
    <script defer src="/assets/plugin/jquery.plugin/jquery.plugin.min.js"></script>
    <script defer src="/assets/plugin/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script defer src="/assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script defer src="/assets/plugin/owl-carousel/owl.carousel.min.js"></script>
    <script defer src="/assets/plugin/photoswipe/photoswipe.min.js"></script>
    <script defer src="/assets/plugin/photoswipe/photoswipe-ui-default.min.js"></script>
    <script defer src="/assets/plugin/jquery.floating/jquery.floating.min.js"></script>
    <script defer src="/assets/js/main.min.js"></script>
</body>
</html>