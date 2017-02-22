{% extends 'master.html.twig' %}

{% block body %}

    <h2>OVERVIEW</h2>

    <p>{% include 'partials/system-name.html.twig' %} is an enterprise-class web-based application
        that is your single-source-database of accounting, inventory and sales information.
        With {% include 'partials/system-name.html.twig' %}, you have a real-time view of your company and can display any analytical or intelligence
        information that you need.</p>

    <p>There is no software to install. It is viewed in any modern web browser (ie10, Chrome, Firefox, Safari)
        on desktops, tablets and mobile devices.</p>


    <h4>FEATURES AND BENEFITS</h4>
    <ul class="square">
        <li>Single Database of Information: With one source of data to find everything you need, your employees will be more productive. This will bring in more revenue and profit.</li>
        <li>Intuitive: The design is very simple so you can focus on the important stuff.</li>
        <li>Search: Searching is as simple as Google. You search for a phrase and the results are loaded. Click the link and you’re there.</li>
        <li>Flexible: While {% include 'partials/system-name.html.twig' %} is simple and very intuitive it is also extremely powerful and can be customized to any company’s culture.</li>
        <li>Secure: State of the art technology and built with a modern object oriented MVC framework.</li>
        <li>Costs: Yearly Licensing Fees: None, Per User Fees: None, ROI: Less than 1 year.</li>
        <li>Support contracts are available</li>
    </ul>


    <h4>DETAILS</h4>
    <h5>{% include 'partials/system-name.html.twig' %} is made up of several modules</h5>

    <h6 class="head">Contact Management (CRM)</h6>
    <ul class="square">
        <li>CRM makes it easy to manage your End Users, Contacts, Prospects, Customers, Vendors</li>
        <li>Clean responsive interface that is easy on the eyes no matter what device you use (Phone, Tablet or Desktop)</li>
        <li>Task management: Tasks can be assigned to yourself or assign them to another person on your team</li>
        <li>Live Journal System, an on going history of conversations</li>
        <li>The Live Journal system allows you to log every inbound/outbound call, meetings or anything you want to track with metrics.</li>
        <li>The Invoicing module allows you to use quotes and invoices. You can save them as a pdf and/or email right out of the WebApp.</li>
        <li>Notes System</li>
        <li>Corporate Calendar</li>
    </ul>


    <h6 class="head">Dashboards and Reports (DASHBOARD)</h6>
    <ul class="square">
        <li>Dashboard charts give you a visual representation of your company's performance based on the goals that you set up.</li>
        <li>Sales History Reports</li>
        <li>Product Information Reports</li>
        <li>Vendor Sales History Reports</li>
        <li>Purchase Order History Reports</li>
        <li>Sales Reports by Company, Division, Territory, Manager and Rep</li>
        <li>Key Process Indicator (KPI) Dashboards</li>
        <li>Year over Year comparison</li>
        <li>Product - Standard Costs, Landed Costs Reports</li>
        <li>Inventory / Stock Reports</li>
        <li>5 year sales History with data drill-downs</li>
        <li>No Sales Report (based on a time frame – will show you products that have not been ordered)</li>
        <li>FIFO / Min-Max Reports</li>
        <li>All areas have canned reports that can be viewed and / or downloaded as (xls, jpg, png or pdf)</li>
        <li>Canned Reports (profit and loss, expenses, revenue, backorders, invoicing, customer orders, inventory, etc.)</li>
        <li>Custom Reports (if you can think of it and the data is there we can make a report)</li>
        <li>Group and Individual Dashboards</li>
    </ul>

    <h6 class="head">Accounting</h6>
    <ul class="square">
        <li>Accounting</li>
        <li>AR</li>
        <li>AP</li>
        <li>Chart of Accounts</li>
        <li>Journals</li>
        <li>Collections</li>
        <li>Time-Sheet Tracking System</li>
    </ul>

    <h6 class="head">Human Resources</h6>
    <ul class="square">
        <li>Human Resources</li>
        <li>Policies & Procedures (sop’s)</li>
        <li>In-Out board (PTO / Sick / Vacation)</li>
    </ul>

    <h6 class="head">Purchasing</h6>
    <ul class="square">
        <li>Purchasing</li>
        <li>Purchase Orders</li>
        <li>Purchase Order Receipts</li>
        <li>Back Orders</li>
        <li>New Product Development</li>
    </ul>

    <h6 class="head">Warehouse / Logistics</h6>
    <ul class="square">
        <li>Warehouse Automation</li>
        <li>Logistics</li>
        <li>Manufacturing</li>
        <li>Inventory</li>
        <li>Sample Request System</li>
        <li>Shipment Tracking System</li>
    </ul>

    <h6 class="head">Sales</h6>
    <ul class="square">
        <li>Sales Management</li>
        <li>Able to attach/upload various documents/media to (customers, vendors, etc.)</li>
        <li>Sales Projections, Funnels, Pipeline, Opportunities</li>
        <li>Pricing System (various levels of pricing and multi-dimensional)</li>
        <li>Contracts System</li>
        <li>Rebate Reports System</li>
        <li>Tracing Reports System</li>
        <li>Business Intelligence</li>
        <li>Quoting System</li>
        <li>Orders, Invoicing Systems that allow users easy access to view Orders and Invoices</li>
        <li>Optionally you can allow external Reps and Customers the ability to login and access information related to them. Based on security access and role.</li>
        <li>Limited Microsoft Outlook Integration via the VCARD, VCALENDAR protocol.</li>
        <li>If applicable: e-Commerce, Shopping carts and other tools</li>
    </ul>

    <h6 class="head">Customer Service</h6>
    <ul class="square">
        <li>Customer Service Portal</li>
        <li>Customer Service Ticketing System</li>
        <li>Quality Assurance Survey System</li>
        <li>Un-Confirmed Shipment Report</li>
        <li>Complaint System</li>
    </ul>

    <h6 class="head">IT Support</h6>
    <ul class="square">
        <li>IT Support Ticketing</li>
        <li>Automated Import Order System: Import any file and produce an order for importing into your ERP. Using EDI X12 standards, custom software scripts and other Technology.</li>
        <li>Messaging system, eliminating thousands of emails</li>
        <li>Paperless File Storage</li>
        <li>MSDS Repository</li>
        <li>Online File Server</li>
    </ul>

    <h6 class="head">Security</h6>
    <ul class="square">
        <li>Web traffic secured by Secured Socket Layers (SSL) Encryption</li>
        <li>Extra Pass-Code Authentication during login via Google Authenticator</li>
        <li>Access and visibility controlled by security roles and access levels</li>
    </ul>

    <h6 class="head">Other Modules</h6>
    <ul class="square">
        <li>Other modules can be created and tailored to your culture and industry.</li>
        <li><a href="/page/expansion">More info</a></li>
    </ul>

{% endblock %}
