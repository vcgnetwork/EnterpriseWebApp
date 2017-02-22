{% extends 'master.html.twig' %}

{% block body %}
    <h3 class="header">Users <span class="pull-right">{% include 'partials/menu-user.html.twig' %}</span></h3>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

    <ul class="none">
        {% if users is defined and users is not empty %}
            {% for user in users %}
                <li><a href="/user/user-delete/{{ user.username }}"><i class="fa fa-remove text-danger"></i></a> &nbsp;&nbsp; {{ user.isactive }} : <a href="/user/user-view/{{ user.username }}">{{ user.username }}</a></li>
            {% endfor %}
        {% else %}
            <li>No Users found.
        {% endif %}
    </ul>

{% endblock %}
