<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {!! SEO::generate() !!}
    <link rel="shortcut icon" type="image/x-icon" href="https://dev.techneinfosys.com/html/dashsage/assets/images/brand/favicon.ico">
    <link id="style" href="{{asset('assets/css/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet">
    <link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet">
    @livewireStyles
</head>

<body class="app sidebar-mini ltr light-mode">
<div class="page">
    <div class="page-main">
        @include('livewire.admin.layout.header')
        <div class="sticky" style="margin-bottom: -74.1875px;">
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            @include('livewire.admin.layout.siderbar_menu')
        </div>
        <div class="main-content app-content mt-0">
            <div class="side-app">
                <div class="main-container container-fluid">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                <div>Copyright © <span id="year"></span> All rights reserved.</div>
            </div>
        </div>
    </div>
</footer>
<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--{ JQUERY JS }-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!--{ BOOTSTRAP JS }-->
<script src="{{asset('assets/js/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--{ SPARKLINE JS }-->
<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
<!--{ Sticky js }-->
<script src="{{asset('assets/js/sticky.js')}}"></script>
<!--{ CHART-CIRCLE JS }-->
<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
<!--{ PIETY CHART JS }-->
<script src="{{asset('assets/js/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/peitychart/peitychart.init.js')}}"></script>
<!--{ SIDEBAR JS }-->
<script src="{{asset('assets/js/plugins/sidebar/sidebar.js')}}"></script>
<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('assets/js/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/plugins/p-scroll/pscroll.js')}}"></script>
<script src="{{asset('assets/js/plugins/p-scroll/pscroll-1.js')}}"></script>
<!--{ INTERNAL CHARTJS CHART JS }-->
<script src="{{asset('assets/js/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/js/plugins/chart/utils.js')}}"></script>
<!--{ Select2 js }-->
{{--<script src="{{asset('assets/js/plugins/select2/select2.full.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/select2/select2.init.js')}}"></script>--}}
<!--{  INTERNAL Data tables js }-->

<!--{ INTERNAL Vector js }-->
<script src="{{asset('assets/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!--{ SIDE-MENU JS }-->
<script src="{{asset('assets/js/plugins/sidemenu/sidemenu.js')}}"></script>
<!--{ INTERNAL INDEX JS }-->
{{--<script src="{{asset('assets/js/index1.js')}}"></script>--}}
<!--{ Color Theme js }-->
<script src="{{asset('assets/js/themeColors.js')}}"></script>
<!--{ CUSTOM JS }-->
<script src="{{asset('assets/js/custom.js')}}"></script>
<!--{ Custom-switcher }-->
<!--{ Switcher js }-->
<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>
@livewireScripts
</body>
</html>
