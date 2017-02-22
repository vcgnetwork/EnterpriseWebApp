{% extends 'login.html.twig' %}

{% block body %}

    <div class="login-top-space"></div>

    <h1 class="header">Registration</h1>

    <div class="row">
        <div class="col-sm-6">
            <h3>
                <small>Welcome to</small>
                {% include 'partials/system-name.html.twig' %}
            </h3>
            <p>
                <small>To register, please fil out the fields and then click on "Register". Follow the links below if you have any trouble.</small>
            </p>
            <p><a href="/"><i class="fa fa-long-arrow-left"></i> Back to website</a> | <a href="/page/support">Help</a></p>
        </div><!-- .col -->
        <div class="col-sm-6">
            <div class="ibox-content">
                {#@if($errors)#}
                {#<br/>#}
                {#<div class="alert alert-danger">{{ $errors }}</div>#}
                {#@endif#}

                <form name="registration" action="/user/registration" method="post">

                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="First Name"/>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name"/>
                    </div>

                    <div class="form-group">
                        {#{{ Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) }}#}
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email Address"/>
                    </div>

                    <div class="form-group">
                        {#{{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}#}
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter Password"/>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Register" class="btn btn-success btn-group" />
                    </div>

                    {#{{ Form::close() }}#}
                </form>

            </div><!-- .ibox -->
        </div><!-- .col -->
    </div><!-- .row -->

{% endblock %}