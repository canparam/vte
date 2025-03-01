<div>
    <div class="page-header">
        <h1 class="page-title">Thêm tài khoản</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.system.users')}}">Thành viên</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" wire:submit.prevent="create">
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Tên</label>
                            <div class="col-md-9">
                                <input type="text" wire:model.defer="data.name"
                                       placeholder="Tên" class="form-control @error('data.name') is-invalid @enderror" value="">
                                @error('data.name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label" for="example-email">Email</label>
                            <div class="col-md-9">
                                <input type="email" wire:model.defer="data.email"  name="example-email"
                                       class="form-control @error('data.email') is-invalid @enderror"
                                       placeholder="Email" >
                                @error('data.email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label" for="example-email">Mật khẩu</label>
                            <div class="col-md-9">
                                <input type="password" wire:model.defer="data.password" placeholder="Mật khẩu"
                                       name="password" class="form-control @error('data.password') is-invalid @enderror">
                                @error('data.password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label" for="Role">Role</label>
                            <div class="col-md-9">
                                <select class="form-select @error('data.role') is-invalid @enderror" wire:model.defer="data.role" id="Role">
                                    @foreach(\App\Models\User::ROLES as $k => $v)
                                        <option value="{{$k}}">{{$v}}</option>
                                    @endforeach
                                </select>
                                @error('data.role')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label" for="Role"></label>
                            <div class="col-md-9 text-end">
                                <x-button-primary label="Thêm" wire:loading.attr="disabled"/>
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
