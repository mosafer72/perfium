<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048', // 2MB max
        ]);

        $file = $request->file('file');

        // تولید اسم فایل امن و یکتا
        $filename = Str::random(16) . '.' . $file->getClientOriginalExtension();

        // مسیر ذخیره سازی
        $path = "uploads/products/";

        // ذخیره فایل
        $file->move(public_path($path), $filename);

        return response()->json([
            'status' => true,
            'url'    => asset($path . $filename),
            'path'   => $path . $filename
        ]);
    }
}
