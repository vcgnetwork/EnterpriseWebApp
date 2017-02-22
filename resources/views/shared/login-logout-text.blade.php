@if(Auth::check())
    <span class="auth">
        Log Out of
    </span>
@else
    <span class="guest">
        Log In to
    </span>
@endif
{{--<span class="guest">Log In to</span>--}}
