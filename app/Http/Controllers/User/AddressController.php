<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function index()
    {
        // $items = Address::where('user_id', Auth::id())->get();
        $items = Address::all();
        return view("Pages.user.address.index", compact("items"));
    }

    public function create()
    {

        return view("Pages.user.address.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
             'title'      => 'required|string|max:100',
            'province'   => 'required|string|min:1',
            'city'       => 'required|string|min:1',
            'postalcode' => 'required|string|min:6|max:10',
            'address'    => 'required|string|min:6',
            'province_name'  => 'required|string',
            'city_name'      => 'required|string',
        ]);

        // $data['user_id'] = Auth::id();

        Address::create($data);

        return redirect()
            ->route('user.address.index')
            ->with('success', 'آدرس با موفقیت ثبت شد');
    }

    public function edit($id)
    {
        // $item = Address::where('id', $id)
        //     ->where('user_id', Auth::id())
        //     ->firstOrFail();
        $item = Address::where('id', $id)
            // ->where('user_id', Auth::id())
            ->firstOrFail();

        return view("Pages.user.address.edit", compact("item"));
    }

    public function update(Request $request, $id)
    {
        // $item = Address::where('id', $id)
        //     ->where('user_id', Auth::id())
        //     ->firstOrFail();
        $item = Address::where('id', $id)
            ->firstOrFail();

        $data = $request->validate([
            'title'      => 'required|string|max:100',
            'province'   => 'required|string|min:1',
            'city'       => 'required|string|min:1',
            'postalcode' => 'required|string|min:6|max:10',
            'address'    => 'required|string|min:6',
            'province_name'  => 'required|string',
            'city_name'      => 'required|string',
        ]);

        $item->update($data);

        return redirect()
            ->route('user.address.index')
            ->with('success', 'آدرس با موفقیت ویرایش شد');
    }

    public function destroy($id)
    {
        // $item = Address::where('id', $id)
        //     ->where('user_id', Auth::id())
        //     ->firstOrFail();
$item = Address::where('id', $id)
        //     ->where('user_id', Auth::id())
            ->firstOrFail();
        $item->delete();

        return redirect()
            ->route('user.address.index')
            ->with('success', 'آدرس حذف شد');
    }
}
