@extends("admins.layouts.index")
@section("content")

<div class="row">
    <div class="card-box bg-info" >
            <a href="/{{$prefix_dashboard}}/main/doAction?action=login-zalo">
            <!-- <a href="https://oauth.zaloapp.com/v3/auth?app_id=1458440198570780125&redirect_uri=http://laravel.test/dashboard/main&state=1"> -->
                <h4 style="color:white;text-align:center" class="header-title m-t-0">Login Zalo</h4>
            </a>
    </div>
</div>
@stop


