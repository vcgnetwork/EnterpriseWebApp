{% extends 'base.html.twig' %}

{% block body %}
    <h1>Task list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Customerid</th>
                <th>Assignedtoid</th>
                <th>Groupid</th>
                <th>Entrytypeid</th>
                <th>Subject</th>
                <th>Content</th>
                <th>Priority</th>
                <th>Completed</th>
                <th>Duedate</th>
                <th>Reminderindays</th>
                <th>Isdeleted</th>
                <th>Createdat</th>
                <th>Modifiedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for task in tasks %}
            <tr>
                <td><a href="{{ path('task_show', { 'id': task.id }) }}">{{ task.id }}</a></td>
                <td>{{ task.customerId }}</td>
                <td>{{ task.assignedToId }}</td>
                <td>{{ task.groupId }}</td>
                <td>{{ task.entryTypeId }}</td>
                <td>{{ task.subject }}</td>
                <td>{{ task.content }}</td>
                <td>{{ task.priority }}</td>
                <td>{{ task.completed }}</td>
                <td>{% if task.dueDate %}{{ task.dueDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ task.reminderInDays }}</td>
                <td>{% if task.isDeleted %}Yes{% else %}No{% endif %}</td>
                <td>{% if task.createdAt %}{{ task.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if task.modifiedAt %}{{ task.modifiedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href="{{ path('task_show', { 'id': task.id }) }}">show</a>
                        </li>
                        <li>
                            <a href="{{ path('task_edit', { 'id': task.id }) }}">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href="{{ path('task_new') }}">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
