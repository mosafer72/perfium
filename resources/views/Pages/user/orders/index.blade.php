@extends("Pages.user.app")
@section("profile_cotent")
    <div class="tab-content col-lg-9 col-md-8">
        <div class="tab-pane active in" id="orders">
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
    </div>
@endsection
