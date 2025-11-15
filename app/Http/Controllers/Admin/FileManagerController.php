<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    private $basePath = "uploads/products/";

    public function index()
    {
        $path = public_path($this->basePath);

        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        $files = array_values(array_filter(scandir($path), function ($file) {
            return !in_array($file, ['.', '..']);
        }));

        return view("Admin.filemanager.index", [
            "files" => $files,
            "path"  => $this->basePath
        ]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            "file" => "required|image|max:3072"
        ]);

        $file = $request->file("file");
        $name = uniqid() . "." . $file->getClientOriginalExtension();

        $file->move(public_path($this->basePath), $name);

        return response()->json([
            "status" => true,
            "url"    => asset($this->basePath . $name),
            "path"   => $this->basePath . $name,
            "name"   => $name
        ]);
    }

    public function delete(Request $request)
    {
        $request->validate([
            "file" => "required|string"
        ]);

        $file = public_path($request->file);

        if (file_exists($file)) {
            unlink($file);

            return response()->json([
                "status" => true,
                "message" => "فایل با موفقیت حذف شد."
            ]);
        }

        return response()->json([
            "status" => false,
            "message" => "فایل پیدا نشد."
        ]);
    }
}
