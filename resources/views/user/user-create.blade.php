{% extends 'master.html.twig' %}

{% block body %}

    {% if status is defined and message is defined %}
        <div class="bs-component">
            <div class="alert alert-dismissible alert-{{ status|lower }}">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <div><b>{{ status }}</b>, {{ message }}</div>
            </div>
        </div>
    {% endif %}

    <h3 class="header">Create User <span class="pull-right">{% include 'partials/menu-user.html.twig' %}</span></h3>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

    <form id="user-create" name="user-create" method="post" action="#" class="form-horizontal">

        <div class="form-group">
            <label for="username" class="col-md-2 control-label">Email</label>
            <div class="col-md-10">
                <input type="email" class="form-control" name="username" id="username" placeholder="Email Address">
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-md-2 control-label">Password</label>
            <div class="col-md-10">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

{% endblock %}
