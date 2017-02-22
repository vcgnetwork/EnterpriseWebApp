{% extends 'master.html.twig' %}

{% block body %}

    <p>&nbsp;</p>

    <h3>// Welcome to the new {% include 'partials/system-name.html.twig' %} //</h3>

    <p>Basic Layout and Instructions:</p>

    <ul>
        <li>Side Menu - click the <i class="fa fa-bars sideMainMenuButton"></i> icon in the top-left of the screen or use the escape key.</li>
        <li>To {% include 'partials/login-logout-text.html.twig' %} {% include 'partials/system-name.html.twig' %} - click the {% include 'partials/login-logout.html.twig' %} icon in the top-right of the screen.</li>
    </ul>

    <p>pageText: {{ pageText }}</p>


    <div class="row">
        <div class="col-sm-12">
            Agenda Index
        </div><!-- /col -->
    </div><!-- /row -->

{% endblock %}