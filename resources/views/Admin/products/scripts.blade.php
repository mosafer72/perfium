<script>
    /*
    |--------------------------------------------------------------------------
    | آپلود تصویر اصلی محصول
    |--------------------------------------------------------------------------
    */
    document.querySelector("#upload_main_btn").onclick = function () {
        let input = document.createElement("input");
        input.type = "file";
        input.accept = "image/*";

        input.onchange = function () {
            let file = this.files[0];
            if (!file) return;

            let fd = new FormData();
            fd.append("file", file);
            fd.append("_token", "{{ csrf_token() }}");

            fetch("{{ route('admin.upload.image') }}", {
                method: "POST",
                body: fd
            })
                .then(res => res.json())
                .then(data => {
                    if (data.status) {
                        document.querySelector("#image_input").value = data.path;
                        document.querySelector("#upload_main_preview").innerHTML =
                            `<img src="${data.url}" width="120" class="radius-5">`;
                    }
                });
        };

        input.click();
    };


    /*
    |--------------------------------------------------------------------------
    | آپلود تصویر گالری
    |--------------------------------------------------------------------------
    */
    document.querySelector("#upload_gallery_btn").onclick = function () {
        let input = document.createElement("input");
        input.type = "file";
        input.accept = "image/*";

        input.onchange = function () {
            let file = this.files[0];
            if (!file) return;

            let fd = new FormData();
            fd.append("file", file);
            fd.append("_token", "{{ csrf_token() }}");

            fetch("{{ route('admin.upload.image') }}", {
                method: "POST",
                body: fd
            })
                .then(res => res.json())
                .then(data => {
                    if (data.status) {

                        let galleryInput = document.querySelector("#gallery_input");

                        let oldVal = galleryInput.value.trim();
                        let newVal = oldVal ? oldVal + "," + data.path : data.path;

                        galleryInput.value = newVal;

                        document.querySelector("#gallery_preview").innerHTML += `
                            <img src="${data.url}" width="80" class="radius-5">
                        `;
                    }
                });
        };

        input.click();
    };


    /*
    |--------------------------------------------------------------------------
    | دریافت فایل انتخاب‌شده از فایل‌منیجر
    |--------------------------------------------------------------------------
    */
    let selected = localStorage.getItem("filemanager_selected");

    if (selected) {
        selected = JSON.parse(selected);

        // ۱) اگر تصویر اصلی هنوز مقدار ندارد، آن را پر کن
        if (!document.querySelector("#image_input").value) {

            document.querySelector("#image_input").value = selected.path;

            document.querySelector("#upload_main_preview").innerHTML =
                `<img src="${selected.url}" width="120" class="radius-5">`;

        } else {
            // ۲) اگر تصویر اصلی مقدار دارد، عکس انتخاب‌شده را به گالری اضافه کن
            let galleryInput = document.querySelector("#gallery_input");

            let oldVal = galleryInput.value.trim();
            let newVal = oldVal ? oldVal + "," + selected.path : selected.path;

            galleryInput.value = newVal;

            document.querySelector("#gallery_preview").innerHTML += `
                <img src="${selected.url}" width="80" class="radius-5">
            `;
        }

        // پاک کردن انتخاب
        localStorage.removeItem("filemanager_selected");
    }
</script>
