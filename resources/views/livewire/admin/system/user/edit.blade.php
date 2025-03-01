<div>
    <div class="page-header">
        <h1 class="page-title">Sửa tài khoản</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.system.users')}}">Thành viên</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sửa</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" wire:submit.prevent="save">
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Tên</label>
                            <div class="col-md-9">
                                <input type="text" wire:model.defer="data.name" class="form-control"
                                       value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label" for="example-email">Email</label>
                            <div class="col-md-9">
                                <input type="email" name="example-email" class="form-control"
                                       placeholder="Email" value="{{$user->email}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label" for="Role">Role</label>
                            <div class="col-md-9">
                                <select class="form-select" wire:model.defer="data.role" id="Role">
                                    @foreach(\App\Models\User::ROLES as $k => $v)
                                        <option value="{{$k}}" {{$user->role == $v ? 'selected' : ''}}>{{$v}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label" for="Role"></label>
                            <div class="col-md-9 text-end">
                                <x-button-primary type="submit" label="Lưu" wire:loading.attr="disabled"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">

        </div>
    </div>
</div>
