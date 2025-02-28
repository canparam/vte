<div class="app-sidebar ps ps--active-y">
    <div class="side-header">
        <a class="header-brand1" href="{{route('admin.index')}}">
            <img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img desktop-logo" alt="logo">
            <img src="{{asset('assets/images/brand/icon-dark.png')}}" class="header-brand-img toggle-logo" alt="logo">
            <img src="{{asset('assets/images/brand/icon-dark.png')}}" class="header-brand-img light-logo" alt="logo">
            <img src="{{asset('assets/images/brand/logo-dark.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a>
        <!-- LOGO -->
    </div>
    <div class="main-sidemenu">
        <div class="slide-left disabled d-none" id="slide-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
            </svg>
        </div>
        <ul class="side-menu" style="margin-right: 0px; margin-left: 0px;">
            @foreach(app()->get('cnv.menu.factory')->getAllMenu() as $k => $v)
                <li class="sub-category">
                    <h3>{{$k}}</h3>
                </li>
                @foreach($v->getItems() as $label => $value)
                    <li>
                        <a class="sidenav-menu-item {{request()->route()->getName() == $value['route'] ? 'active' : ''}}"
                           data-bs-toggle="slide" href="{{route($value['route'])}}">
                            <i class="side-menu__icon {{@$value['icon']}}"></i>
                            <span class="side-menu__label">{{$label}}</span>
                        </a>
                    </li>
                @endforeach
            @endforeach


        </ul>

        <div class="slide-right" id="slide-right">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
            </svg>
        </div>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 953px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 758px;"></div>
    </div>
</div>
