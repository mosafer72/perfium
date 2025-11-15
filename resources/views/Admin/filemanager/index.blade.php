@extends('Admin.layouts.master')

@section('content')

<div class="padding-30 bg-white border-radius-3">

    <h2 class="mb-20">مدیریت فایل‌ها</h2>

    {{-- دکمه آپلود --}}
    <button class="btn btn-brand mb-20" id="uploadBtn">آپلود فایل جدید</button>

    <input type="file" id="hiddenUpload" style="display:none" accept="image/*">

    {{-- لیست فایل‌ها --}}
    <div class="row" id="fileGrid">

        @foreach($files as $file)
            <div class="col-2 mb-20 file-box" data-file="{{ $path . $file }}">
                <div class="box" style="border:1px solid #ddd; padding:10px; text-align:center; position:relative">

                    <img src="{{ asset($path . $file) }}" style="width:100%; height:100px; object-fit:cover">

                    <small>{{ $file }}</small>

                    <button class="btn btn-danger btn-sm delete-btn"
                            style="position:absolute; top:5px; left:5px"
                            data-file="{{ $path . $file }}">
                        حذف
                    </button>

                    <button class="btn btn-dark btn-sm select-btn"
                            style="position:absolute; top:5px; right:5px"
                            data-file="{{ asset($path . $file) }}"
                            data-path="{{ $path . $file }}">
                        انتخاب
                    </button>

                </div>
            </div>
        @endforeach

    </div>
</div>

<script>
    // دکمه آپلود
    document.querySelector("#uploadBtn").onclick = () => {
        document.querySelector("#hiddenUpload").click();
    };

    document.querySelector("#hiddenUpload").onchange = function () {
        let file = this.files[0];
        let form = new FormData();
        form.append("file", file);
        form.append("_token", "{{ csrf_token() }}");

        fetch("{{ route('admin.fm.upload') }}", {
            method: "POST",
            body: form
        }).then(res => res.json())
            .then(data => {
                if (data.status) {
                    let html = `
                    <div class="col-2 mb-20 file-box" data-file="${data.path}">
                        <div class="box" style="border:1px solid #ddd; padding:10px; text-align:center; position:relative">
                            <img src="${data.url}" style="width:100%; height:100px; object-fit:cover">
                            <small>${data.name}</small>

                            <button class="btn btn-danger btn-sm delete-btn"
                                    style="position:absolute; top:5px; left:5px"
                                    data-file="${data.path}">
                                حذف
                            </button>

                            <button class="btn btn-dark btn-sm select-btn"
                                    style="position:absolute; top:5px; right:5px"
                                    data-file="${data.url}"
                                    data-path="${data.path}">
                                انتخاب
                            </button>
                        </div>
                    </div>
                    `;

                    document.querySelector("#fileGrid").innerHTML += html;
                }
            });
    };

    // حذف فایل
    document.addEventListener("click", function (e) {
        if (e.target.classList.contains("delete-btn")) {
            let file = e.target.dataset.file;

            if (!confirm("فایل حذف شود؟")) return;

            fetch("{{ route('admin.fm.delete') }}", {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({file})
            }).then(res => res.json())
                .then(data => {
                    if (data.status) {
                        document.querySelector(`.file-box[data-file="${file}"]`).remove();
                    }
                });
        }
    });

    // انتخاب فایل → بازگشت به فرم محصول
    document.addEventListener("click", function (e) {
        if (e.target.classList.contains("select-btn")) {
            let url  = e.target.dataset.file;
            let path = e.target.dataset.path;

            // برگشت به صفحه قبل با ارسال path
            localStorage.setItem("filemanager_selected", JSON.stringify({url, path}));

            window.history.back();
        }
    });
</script>

@endsection
