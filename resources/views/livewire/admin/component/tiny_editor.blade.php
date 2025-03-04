<div class="form-group"
     x-data="{value: @entangle($model).defer}"
     x-init="
            (() => {
            $nextTick(() => {
                tinymce.createEditor('tiny-editor-{{$model}}', {
                    target: $refs.tinymce,
                    deprecation_warnings: false,
                    toolbar_sticky: 'true',
                    toolbar_sticky_offset: 64,
                    min_height: 500,
                    skin: {
                        light: 'oxide',
                        dark: 'oxide-dark',
                        system: window.matchMedia('(prefers-color-scheme: dark)').matches ? 'oxide-dark' : 'oxide',
                    }[typeof theme === 'undefined' ? 'light' : theme],
                    content_css: {
                        light: 'default',
                        dark: 'dark',
                        system: window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default',
                    }[typeof theme === 'undefined' ? 'light' : theme],

                    menubar: 'true',
                    images_upload_handler: (blobInfo, success, failure, progress) => {
                        if (!blobInfo.blob()) return;
                        const url = uploadFile(blobInfo,success,failure);

                    },
                    relative_urls: false,
                    plugins: ['advlist autoresize codesample directionality emoticons fullscreen hr image imagetools link lists media table toc wordcount'],
                    toolbar: 'undo redo removeformat | formatselect fontsizeselect | bold italic | rtl ltr | alignjustify alignright aligncenter alignleft | numlist bullist | forecolor backcolor | blockquote table toc hr | image link media codesample emoticons | wordcount fullscreen',
                    toolbar_mode: 'sliding',
                    branding: false,
                    automatic_uploads: true,
                    setup: function(editor) {
                        if(!window.tinySettingsCopy) {
                            window.tinySettingsCopy = [];
                        }

                        if (!window.tinySettingsCopy.some(obj => obj.id === editor.settings.id)) {
                            window.tinySettingsCopy.push(editor.settings);
                        }

                        editor.on('blur', function(e) {
                            value = editor.getContent()
                        })

                        editor.on('init', function(e) {
                            if (value != null) {
                                editor.setContent(value)
                            }
                        })

                        editor.on('OpenWindow', function(e) {
                            target = e.target.container.closest('.fi-modal')
                            if (target) target.setAttribute('x-trap.noscroll', 'false')

                            target = e.target.container.closest('.jetstream-modal')
                            if (target) {
                                targetDiv = target.children[1]
                                targetDiv.setAttribute('x-trap.inert.noscroll', 'false')
                            }
                        })

                        editor.on('CloseWindow', function(e) {
                            target = e.target.container.closest('.fi-modal')
                            if (target) target.setAttribute('x-trap.noscroll', 'isOpen')

                            target = e.target.container.closest('.jetstream-modal')
                            if (target) {
                                targetDiv = target.children[1]
                                targetDiv.setAttribute('x-trap.inert.noscroll', 'show')
                            }
                        })

                        function putCursorToEnd() {
                            editor.selection.select(editor.getBody(), true);
                            editor.selection.collapse(false);
                        }

                        $watch('value', function(newstate) {
                            if (editor.container && newstate !== editor.getContent()) {
                                editor.resetContent(newstate || '');
                                putCursorToEnd();
                            }
                        });
                    }
                }).render();
            });
        })()
        "
     x-cloak
     wire:ignore
>
    <label class="form-label" for="content-{{$model}}">{{$label}}</label>
    <textarea  x-ref="tinymce" class="form-control" id="tiny-editor-{{$model}}"  rows="10"></textarea>
</div>
<script>
    function uploadFile(blobInfo,success,failure){
        console.log(blobInfo)
        let formData = new FormData();
        formData.append("file", blobInfo.blob()); // File
        formData.append("directory", "attachments"); // Thư mục lưu trữ
        formData.append("disk", "public"); // Disk lưu trữ (public)
        fetch("{{route('admin.tiny.upload')}}", {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector("meta[name='csrf_token']").getAttribute("content"),
            }
        })
            .then(response => response.text()) // Nhận response dưới dạng text
            .then(url => success(url.trim())) // Trả về URL cho TinyMCE
            .catch(() => failure("Upload failed"));
    }
</script>
