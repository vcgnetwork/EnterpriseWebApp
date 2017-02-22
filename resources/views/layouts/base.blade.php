<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>

    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel="icon" type="image/x-icon" href="http://www.billcurtisconsultingservices.com/ccs-logo-light.png"/>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bs-theme-slate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="animated fadeIn">

{% include 'partials/nav-old.html.twig' %}

<div class="container">

    <header>

    </header>

    <div class="row">

        <div class="col-lg-12">
            <section id="topSection">
                {% include 'partials/top-section.html.twig' %}
            </section>
        </div>

    </div><!-- .row -->
    <div class="row">

        <div class="col-lg-2">
            <section id="leftSection">
                {% include 'partials/left-section.html.twig' %}
            </section>
        </div>

        <div class="col-lg-8">
            <section id="centerSection">
                <h3>Content Section</h3>
                {% block body %}{% endblock %}
            </section>
        </div>

        <div class="col-lg-2">
            <section id="rightSection">
                {% include 'partials/right-section.html.twig' %}
            </section>
        </div>

    </div><!-- .row -->
    <div class="row">

        <div class="col-lg-12">
            <section id="bottomSection">
                {% include 'partials/bottom-section.html.twig' %}
            </section>
        </div>

    </div><!-- .row -->

    <footer>

    </footer>

</div><!-- .container -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
