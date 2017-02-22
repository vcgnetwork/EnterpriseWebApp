{% extends 'master.html.twig' %}

{% block body %}
    {#{{ dump(user) }}#}

    <h3 class="header">
        <span>
            {% if user.isActive is defined and user.isActive == 1 %}
                <span class="text-success">Active User:</span>
            {% else %}
                <span class="text-danger">Inactive User:</span>
            {% endif %}
        </span>{{ user.username }}
        <span class="pull-right">{% include 'partials/menu-user.html.twig' %}</span>
    </h3>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

{% endblock %}
