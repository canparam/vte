
<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from dev.techneinfosys.com/html/dashsage/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 16:44:27 GMT -->
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {!! SEO::generate() !!}
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="https://dev.techneinfosys.com/html/dashsage/assets/images/brand/favicon.ico">

    <!-- TITLE -->

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('assets/css/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet">
    <link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet">
    @livewireStyles
</head>

<body class="app sidebar-mini ltr light-mode login-img">

<!--{ Switcher Start }-->
<!--{ Switcher End }-->

<div class="">
    <!-- PAGE -->
    <div class="page auth-page">
        <div class="">
            <!-- Theme-Layout -->

            <!-- CONTAINER OPEN -->
            <div class="login-container">
                <div class="card login-wrap-main  p-6">
                    <div class="text-center mb-5 auth-logo">
                        <a href="index.html">
                            <img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img light-logo" alt="">
                            <img src="{{asset('assets/images/brand/logo-dark.png')}}" class="header-brand-img dark-logo" alt="">
                        </a>
                    </div>
                    {{$slot}}
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->

</div>


<!--{ JQUERY JS }-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!--{ BOOTSTRAP JS }-->
<script src="{{asset('assets/js/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('assets/js/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<!--{ Color Theme js }-->
<script src="{{asset('assets/js/themeColors.js')}}"></script>
<!-- { Show Password js } -->
<script src="{{asset('assets/js/show-password.min.js')}}"></script>
<!--{ Custom-switcher }-->
<script src="{{asset('assets/js/custom-swicher.js')}}"></script>
<!--{ Switcher js }-->
<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>
@livewireScripts
</body>
</html>
