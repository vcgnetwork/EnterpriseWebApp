{% extends 'master.html.twig' %}

{% block body %}

    <h1>Search Results</h1>
    <br />
    <h4><i class="fa fa-search"></i> <span class="small">You searched for:</span> {{ searchString|default('Nothing') }}</h4>

{% endblock %}
