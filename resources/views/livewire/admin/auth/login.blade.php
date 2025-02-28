<form class="login-form validate-form" wire:submit.prevent="login" >
    <span class="login-form-title pb-5">
       Login
    </span>
    <div class="panel panel-primary">

        <div class="panel-body tabs-menu-body p-0 pt-5">
            <div class="tab-content">
                <div class="tab-pane active show" id="tab5" role="tabpanel">
                    <div class="wrap-input validate-input input-group"
                         data-bs-validate="Valid email is required: ex@abc.xyz">
                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                            <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                        </a>
                        <input wire:model="email" class="input100 border-start-0 form-control ms-0" type="email" placeholder="Email">
                    </div>
                    @error('email') <span class="text-danger"> {{ $message }}</span> @enderror
                    <div class="wrap-input validate-input input-group" id="Password-toggle">
                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                            <i class="zmdi zmdi-eye-off text-muted" aria-hidden="true"></i>
                        </a>
                        <input wire:model="password" class="input100 border-start-0 form-control ms-0" type="password" placeholder="Mật khẩu">
                    </div>
                    @error('password') <span class="text-danger"> {{ $message }}</span> @enderror

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn btn-primary">
                            Login
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>

</form>
