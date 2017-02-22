<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="SWA2015">
    <meta name="author" content="vcgnetwork">

    <link rel="icon" type="image/x-icon" href="http://www.billcurtisconsultingservices.com/ccs-logo-light.png"/>
    <title>{% block title %}Enterprise Web Enabled Business Application{% endblock %}</title>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abel:400|Open+Sans:400,700|Open+Sans+Condensed:300,700|Abel:400">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bs-theme-slate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body>
<div class="container-fluid">

    <!-- content -->
    <div class="animated fadeInDown">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                {% block body %}{% endblock %}
            </div>
        </div>
    </div>
    <!-- .content -->

</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.sidr.min.js') }}"></script>
<script src="{{ asset('js/nicescroll.min.js') }}"></script>

<script>

    $(document).ready(function() {
        //
    });

</script>

</body>
</html>