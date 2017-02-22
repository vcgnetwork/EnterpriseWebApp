{% extends 'master.html.twig' %}

{% block body %}

    <h1>Welcome to {% include 'partials/system-name.html.twig' %}</h1>
    <p>Developed on Symfony, PHP5.5, MySQL5.7, HTML5, CSS3 and Javascript/J-Query.</p>
    <p><a class="btn btn-primary" href="#">View Demo [userid='user'] [password='demo']</a></p>


    <h3 class="panel-title">CRM WebApp, SalesWebApp</h3>

    <p><img src="/images/icon-saleswebapp.png" alt="saleswebapp logo"/></p>
    <p>CRM WebApp is the base install of the eWeb(tm) family of products by Curtis Consulting Services. It is a CRM, task management and invoicing system with a dashboard.
        It allows you to log every inbound call, schedule and invoice customers, records a log of every conversation with the customer and their current status. Other modules can be added.</p>
    <p><a class="btn btn-primary pull-right" href="#">View Demo &raquo;</a></p>


    <h3 class="panel-title">ServiceWebApp</h3>

    <p><img src="/images/icon-servicewebapp.png" alt="servicewebapp logo"/></p>
    <p>ServiceWeb is a scheduling and task management system. It allows you to log every inbound call, schedule and invoice customers, route mobile technicians to jobs.
        records a log of every visit with the customer and their current status and interfaces with QuickBooks. Modules can be added for any service related industry.</p>
    <p><a class="btn btn-primary pull-right" href="#">View Demo &raquo;</a></p>


    <h3 class="panel-title">MedeWebApp</h3>

    <p><img src="/images/icon-medewebapp.png" alt="medewebapp logo"/></p>
    <p>MedeWeb is an electronic medical and health records management system. It allows you to schedule and bill patients.
        Tracks visits and stores information in an online chart similar to current paper charts, allowing an office to go paperless. The server and software is secured on a state-of-the-art HIPAA compliant infrastructure (saas-hc) or on-site</p>
    <p><a class="btn btn-primary pull-right" href="#">View Demo &raquo;</a></p>

{% endblock %}