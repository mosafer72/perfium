<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('sort_order')->get();
        return view('Admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('Admin.sliders.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'nullable|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'image'       => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'sort_order'  => 'nullable|integer|min:0|max:255',
            'is_active'   => 'required|boolean',
        ]);

        Slider::create($data);

        return redirect()->route('admin.sliders.index')->with('success', 'اسلایدر ایجاد شد');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('Admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $data = $request->validate([
            'title'       => 'nullable|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'image'       => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'sort_order'  => 'nullable|integer|min:0|max:255',
            'is_active'   => 'required|boolean',
        ]);

        $slider->update($data);

        return redirect()->route('admin.sliders.index')->with('success', 'اسلایدر ویرایش شد');
    }

    public function destroy($id)
    {
        Slider::findOrFail($id)->delete();

        return response()->json(['status' => true]);
    }
}
