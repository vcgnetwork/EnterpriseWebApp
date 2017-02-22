{% extends 'login.html.twig' %}

{% block body %}

    <div class="login-top-space"></div>

    <h1 class="header">Log In</h1>

    <div class="row">
        <div class="col-sm-6">
            <h3>
                <small>Welcome to</small>
                {% include 'partials/system-name.html.twig' %}
            </h3>
            <p>
                <small>To sign in, please use your email address and password, then click on "Login". Follow the links below if you have any trouble.</small>
            </p>
            <p><a href="/"><i class="fa fa-long-arrow-left"></i> Back to website</a> | <a href="/page/support">Help</a></p>
        </div><!-- .col -->
        <div class="col-sm-6">
            <div class="ibox-content">

                {#@if($errors)#}
                {#<br/>#}
                {#<div class="alert alert-danger">{{ $errors }}</div>#}
                {#@endif#}

                {#{{ Form::open(['route' => 'session.store']) }}#}
                <form>

                    <div class="form-group">
                        {#{{ Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) }}#}
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email"/>
                    </div>

                    <div class="form-group">
                        {#{{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}#}
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter Password"/>
                    </div>

                    <div class="form-group">
                        {#{{ Form::submit('Login', ['class' => 'btn btn-primary btn-block']) }}#}
                        <a href="#" class="btn btn-primary btn-group">
                            <small>Login</small>
                        </a>
                    </div>

                    <div class="form-group text-center">
                        <a href="/user/forgot-password" class="btn btn-danger btn-group">
                            <small>Forgot password?</small>
                        </a>
                        <a href="/user/registration" class="btn btn-success btn-group">
                            <small>Create account</small>
                        </a>
                    </div>

                    {#{{ Form::close() }}#}
                </form>

            </div><!-- .ibox -->
        </div><!-- .col -->
    </div><!-- .row -->

{% endblock %}