<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title>Find Key</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('adminto/assets/images/favicon.ico')}}">



    <link href="{{asset('adminto/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminto/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />



</head>
<body>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    {{--<div class="text-center">--}}
        {{--<a href="/" class="logo"><span>Admin<span>to</span></span></a>--}}
        {{--<h5 class="text-muted m-t-0 font-600">Responsive Admin Dashboard</h5>--}}
    {{--</div>--}}
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
        </div>
        @if(session()->has('message'))
            <br><br>
            <div class="text-danger" style="margin-left: 6%">
                <p>{!! session()->get('message') !!}</p>
            </div>
        @endif
        @if(session()->has('authentication_fail'))
            <br><br>
            <div class="text-danger" style="margin-left: 11%">
                <p>{!! session()->get('authentication_fail') !!}</p>
            </div>
        @endif
        <div class="panel-body">
                <form action="{{route('login')}}" method="post" class="form-horizontal m-t-20" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input  value="{{ old('username') }}" class="form-control" type="text" name="username"  placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control"  name="password" type="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-custom">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-center m-t-30">
                    <div class="col-xs-12">
                        <button type="submit"  class="btn btn-custom btn-bordred btn-block waves-effect waves-light">Log In</button>
                    </div>
                </div>


            </form>

        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
            </div>
        </div>
    </div>
    <!-- end card-box-->



</div>

</body>


<!-- jQuery  -->
<script src="{{asset('adminto/assets/js/jquery.min.js')}}"></script>



</html>
