<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('adminto/assets/images/favicon.ico')}}">

    <!--Morris Chart CSS -->
{{--    <link rel="stylesheet" href="{{asset('adminto/assets/plugins/morris/morris.css')}}">--}}

    {{--<!-- App css -->--}}
    {{--<link href="{{asset('adminto/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{asset('adminto/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{asset('adminto/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{asset('adminto/assets/css/mystyle.css')}}" rel="stylesheet" type="text/css"/>--}}
    {{--<script src="{{asset('adminto/assets/js/modernizr.min.js')}}"></script>--}}

    <link href="{{asset('adminto/assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')}}" rel="stylesheet" type="text/css" media="screen">

    <link href="{{asset('adminto/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <!-- Table css -->
    <script src="{{asset('adminto/assets/js/modernizr.min.js')}}"></script>
    <meta name="user" content="@if(\Illuminate\Support\Facades\Auth::check()) {{ \Illuminate\Support\Facades\Auth::user()}} @endif">

</head>
<body>

<div id="app_vue">


</div>
</body>

<!-- jQuery  -->
<script src="{{asset('adminto/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('adminto/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('adminto/assets/js/detect.js')}}"></script>
<script src="{{asset('adminto/assets/js/fastclick.js')}}"></script>

<script src="{{asset('adminto/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('adminto/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('adminto/assets/js/waves.js')}}"></script>
<script src="{{asset('adminto/assets/js/wow.min.js')}}"></script>
<script src="{{asset('adminto/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('adminto/assets/js/jquery.scrollTo.min.js')}}"></script>


<script src="{{asset('adminto/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('adminto/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('adminto/assets/plugins/raphael/raphael-min.js')}}"></script>

<!-- Dashboard init -->
<script src="{{asset('adminto/assets/pages/jquery.dashboard.js')}}"></script>

<script src="{{asset('js/app.js')}}"></script>
<!-- App js -->
<script src="{{asset('adminto/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('adminto/assets/js/jquery.app.js')}}"></script>


<!-- responsive-table-->
<script src="{{asset('adminto/assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js')}}" type="text/javascript"></script>





</html>
