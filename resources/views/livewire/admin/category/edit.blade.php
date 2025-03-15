<div>
    <div class="page-header">
        <h1 class="page-title">Sửa danh mục</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.system.users')}}">Danh mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sửa</li>
            </ol>
        </div>
    </div>
    <form class="form-horizontal" wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <x-form.form model="form_create" :fields="$form" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col-12">
                                <label class="form-label">Ảnh thumbnail</label>
                                <div class="dropify-wrapper">
                                    <div class="dropify-message">
                                    <span class="file-icon">
                                        <p>Drag and drop a file here or click</p>
                                    </span>
                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                    </div>
                                    <div class="dropify-loader"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div>
                                    <input type="file" wire:model="thumbnail" class="dropify" data-bs-height="180">
                                    @if($thumbnail)
                                        <button type="button" class="dropify-clear">Remove</button>
                                        <div class="dropify-preview" style="display: block;">
                                        <span class="dropify-render">
                                            @if(is_string($thumbnail))
                                                <img src="{{ Storage::url($thumbnail) }}">
                                            @else
                                                <img src="{{ $thumbnail->temporaryUrl() }}">
                                            @endif
                                        </span>
                                            <div class="dropify-infos">
                                                <div class="dropify-infos-inner">
                                                    <p class="dropify-filename">
                                                        <span class="dropify-filename-inner"></span></p>
                                                    <p class="dropify-infos-message">Kéo và thả hoặc nhấp để thay
                                                        thế</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <x-button-primary label="Sửa" wire:loading.attr="disabled"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
