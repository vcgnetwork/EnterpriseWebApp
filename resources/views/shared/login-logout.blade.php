@if(Auth::check())
    <span class="auth">
        <a href="/logout">Log Out <i class="fa fa-sign-out"></i></a>
    </span>
@else
    <span class="guest">
        <a href="/login">Log In <i class="fa fa-sign-in"></i></a>
    </span>
@endif
{{--<span class="guest"><a href="/login">Log In <i class="fa fa-sign-in"></i></a></span>--}}
