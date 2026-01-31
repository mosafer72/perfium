@extends("Pages.user.app")
@section("profile_cotent")
    <div class="tab-content col-lg-9 col-md-8">
        <div class="tab-pane active in" id="orders">
            <a class="btn btn-warning rounded mb-3" href="{{ route("user.address.create") }}">اضافه کردن آدرس</a>
            @if (session('success'))
                <div class="alert mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <table class="order-table">
                <thead>
                    <tr>
                        <th>عنوان</th>
                        <th>استان</th>
                        <th>شهر</th>
                        <th>کد پستی</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->province_name }}</td>
                        <td>{{ $item->city_name }}</td>
                        <td>{{ $item->postalcode }}</td>
                        <td class="order-action">
                            <a href="{{ route('user.address.edit', $item->id) }}"
                            class="btn btn-sm btn-warning">
                                ویرایش
                            </a>

                            <form action="{{ route('user.address.destroy', $item->id) }}"
                                method="POST"
                                style="display:inline-block"
                                onsubmit="return confirm('حذف شود؟')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            آدرسی ثبت نشده است
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

