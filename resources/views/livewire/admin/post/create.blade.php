<div>
    <div class="page-header">
        <h1 class="page-title">Thêm bài viết</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.system.users')}}">Bài viết</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm</li>
            </ol>
        </div>
    </div>
    <form class="form-horizontal" wire:submit.prevent="create">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label" for="title">Tiêu đề</label>
                            <input type="text" wire:model.defer="post.title"
                                   class="form-control  @error('post.title') is-invalid @enderror" id="title">
                        </div>

                        <x-tiny-editor label="Nội dung" model="post.content"/>
                        <div class="card border">
                            <div class="card-header p-2">
                                <h5 class="card-title">SEO</h5>
                            </div>
                            <div class="card-body px-0">
                                <div class="form-group">
                                    <label class="form-label" for="metaTitle">Meta Title</label>
                                    <input type="text" wire:model.defer="seo.title" autocomplete="off"
                                           class="form-control" id="metaTitle"
                                           aria-describedby="emailHelp" placeholder="Meta Title">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="metaDes">Meta Description</label>
                                    <textarea class="form-control" wire:model.defer="seo.description" autocomplete="off"
                                              id="metaDes" rows="3" placeholder="Meta Description"></textarea>
                                </div>
                            </div>
                        </div>
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
                                             <img src="{{ $thumbnail->temporaryUrl() }}">
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
                                <x-button-primary label="Thêm" wire:loading.attr="disabled"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
