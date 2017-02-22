{% extends 'base.html.twig' %}

{% block body %}
    <h1>Task</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ task.id }}</td>
            </tr>
            <tr>
                <th>Customerid</th>
                <td>{{ task.customerId }}</td>
            </tr>
            <tr>
                <th>Assignedtoid</th>
                <td>{{ task.assignedToId }}</td>
            </tr>
            <tr>
                <th>Groupid</th>
                <td>{{ task.groupId }}</td>
            </tr>
            <tr>
                <th>Entrytypeid</th>
                <td>{{ task.entryTypeId }}</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>{{ task.subject }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ task.content }}</td>
            </tr>
            <tr>
                <th>Priority</th>
                <td>{{ task.priority }}</td>
            </tr>
            <tr>
                <th>Completed</th>
                <td>{{ task.completed }}</td>
            </tr>
            <tr>
                <th>Duedate</th>
                <td>{% if task.dueDate %}{{ task.dueDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Reminderindays</th>
                <td>{{ task.reminderInDays }}</td>
            </tr>
            <tr>
                <th>Isdeleted</th>
                <td>{% if task.isDeleted %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if task.createdAt %}{{ task.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Modifiedat</th>
                <td>{% if task.modifiedAt %}{{ task.modifiedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href="{{ path('task_index') }}">Back to the list</a>
        </li>
        <li>
            <a href="{{ path('task_edit', { 'id': task.id }) }}">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type="submit" value="Delete">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
