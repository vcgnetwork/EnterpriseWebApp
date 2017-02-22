{% extends 'master.html.twig' %}

{% block body %}

    <h1 class="header">SALESWEBAPP.COM</h1>

    <div>
        <p class="pull-left text-left">(CRM) Customer Relations Management, Task Management, Live Journal and Invoicing System with a Dashboard.</p>
        <p class="pull-right text-right">Status: <span class="text-yellow">Development</span></p>
    </div>

    <hr/>

    <h3 class="header">Database Information</h3>
    <p>All id columns are: <span class="text-warning">id(int)->(primary)->(increment)->unsigned()</span>.</p>
    <p>system_settings: <span class="text-warning">id, sys_category, sys_key, sys_value, sys_description, sys_order, sys_display</span></p>
    <p>Everything is driven by a “<b>system_settings</b>” table that holds the key bootstrap information. key:value pairs with other options. When the system first starts it checks for the existence of a cookie / session data that is called “appName” which is equal to “saleswebapp.com” and acts like name-spacing. If the cookie / session data exists then a require_once(‘config-system-settings.php’) is bypassed. Examples: server, domainName, saleswebapp.com .</p>

    <ul>
        <li>sysCategory
            <ul>
                <li>server</li>
                <li>company</li>
                <li>datetime</li>
                <li>design</li>
                <li>layout</li>
                <li>documents</li>
                <li>folder</li>
                <li>limiter</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li>sysKey
            <ul>
                <li>version</li>
                <li>title</li>
                <li>domainName</li>
                <li>domainRt</li>
                <li>domainRtSSL</li>
            </ul>
        </li>
    </ul>


    <h6 class="header">utilities</h6>
    <p>id, utility_type(string), utility_value(string), utility_description(string), utility_order(int)</p>
    <p>This table is for managing small option value lists and other items that have some type of repetition to them:</p>
    <ul class="square">
        <li>Record Type (utility_type)
            <ul class="square">
                <li>Customer (utility_value)</li>
                <li>Contact (utility_value)</li>
                <li>Vendor (utility_value)</li>
            </ul>
        </li>
        <li>Record Category (utility_type)
            <ul class="square">
                <li>Family (utility_value)</li>
                <li>Employee (utility_value)</li>
            </ul>
        </li>
        <li>Entry Type (utility_type)
            <ul class="square">
                <li>Outbound Call (utility_value)</li>
                <li>Inbound Call (utility_value)</li>
                <li>Email (utility_value)</li>
                <li>Meeting (utility_value)</li>
            </ul>
        </li>
        <li>Credit Status (utility_type)
            <ul class="square">
                <li>Outbound Call (utility_value)</li>
                <li>Inbound Call (utility_value)</li>
                <li>Email (utility_value)</li>
                <li>Meeting (utility_value)</li>
            </ul>
        </li>
        <li>Terms (utility_type)
            <ul class="square">
                <li>Net 15 (utility_value)</li>
                <li>Due Upon Receipt (utility_value)</li>
            </ul>
        </li>
    </ul>


    <h6 class="header">migrations</h6>
    <p>migration(string), batch(int)</p>
    <p>This table is for managing laravel database changes and is handled by laravel artisan.</p>

    <h6 class="header">dashboards</h6>
    <p>id, [dashboard_name(string), owner_id(int)]UNIQUE</p>
    <p>This table is for managing all dashboards </p>


    <h6 class="header">records: id, record_type_id(int), first_name(string), last_name(string)</h6>
    <p>The “records” table holds all of the contacts, customers, vendors or whatever you call them. It holds all of the
        people and then they are classified by an record_type_id column that would reflect either “contact – lead – vendor – etc.. that is from</p>


    <h6 class="header">users: id, record_id(int), password(string), is_active(bool)</h6>
    <p>This table contains rows from the records table that are the people who can log in to the system.</p>


    <h6 class="header">schedules</h6>
    <p>id, start_date_time(datetime), end_date_time(datetime), multiple_days(bool), length(int), owner(int), assigned_to(int)</p>
    <p>This table is for managing </p>


    <h6 class="header">documents</h6>
    <p>id, document_name, document_number, folder, sub_folder, custom_folder, filename, system_filename, keywords</p>
    <p>This table is for information related to document management.</p>


    <h6 class="header">chart_of_accounts</h6>
    <p>id, account_number(string), description(string), chart_of_account_type_id(int)</p>
    <p>This table is for managing the accounting chart of accounts. i.e. expense, assets, liability, etc..</p>


    <h6 class="header">ap_expenses</h6>
    <p>id, transaction_id(int), transaction_type(string), invoice_number(string), subject(string), emphasis(string), amount(decimal 10,2), account_number(string), complete(bool), date_expensed(datetime)</p>
    <p>This table is for managing account payables</p>


    <h6 class="header">ar_receipts</h6>
    <p>id, transaction_id(int), transaction_type(string), invoice_number(string), subject(string), emphasis(string), amount(decimal 10,2), account_number(string), complete(bool), date_received(datetime)</p>
    <p>This table is for account receivables</p>


    <h6 class="header">invoice_headers</h6>
    <p>id, record_id(int), terms_id(int), invoice_number(string), invoice_date(datetime), due_date(datetime), complete(bool), document_type(string), salesrep_id(int), discount(decimal 10,2)</p>
    <p>This table is for managing invoice headers</p>


    <h6 class="header">invoice_lines</h6>
    <p>id, invoice_number(string), product(string), order_quantity(int), ship_quantity(int), invoice_quantity(int), unit_price(decimal 10,2), description(string), date_added(datetime), discount(decimal 10,2)</p>
    <p>This table is for managing invoice lines</p>


    <h6 class="header">order_headers</h6>
    <p>id, record_id(int), order_number(string), complete(bool), document_type(string), order_date(datetime), salesrep_id(int), discount(decimal 10,2), ticket_printed_date(datetime)</p>
    <p>This table is for managing order headers</p>


    <h6 class="header">order_lines</h6>***
    <p>id, order_number(string), product(string), order_quantity(int), unit_price(decimal 10,2), description(string), date_added(datetime), discount(decimal 10,2)</p>
    <p>This table is for managing order lines</p>


    <h6 class="header">purchase_order_headers</h6>
    <p>id, record_id(int), purchase_order_number(string), complete(bool), document_type(string), purchase_order_date(datetime), salesrep_id(int), discount(decimal 10,2), ticket_printed_date(datetime)</p>
    <p>This table is for managing purchase order headers</p>


    <h6 class="header">purchase_order_lines</h6>
    <p>id, purchase_order_number(string), product(string), purchase_order_quantity(int), unit_price(decimal 10,2), description(string), date_added(datetime), discount(decimal 10,2)</p>
    <p>This table is for managing purchase order lines</p>


    <h6 class="header">purchase_order_line_receipts</h6>
    <p>id, purchase_order_line_id(string), quantity_received(int), date_received(datetime)</p>
    <p>This table is for managing purchase order line receipts</p>


    <h6 class="header">logins</h6>
    <p>id, user_id(int), login_date(datetime), session_info(string)</p>
    <p>This table is for managing logins</p>


    <h6 class="header">journals</h6>
    <p>id, entry_type_id(int), user_id(int), record_id(int), subject(string), emphasis(string)</p>
    <p>This table is for managing journals</p>


    <h6 class="header">tasks</h6>
    <p>id, entry_type_id(int), user_id(int), record_id(int), subject(string), emphasis(string), is_complete(bool), priority(int)</p>
    <p>This table is for managing tasks</p>


    <h6 class="header">locations</h6>
    <p>id</p>
    <p>This table is for managing locations</p>


    <h6 class="header">catalogs</h6>
    <p>id</p>
    <p>This table is for managing catalogs</p>


    <h6 class="header">products</h6>
    <p>id</p>
    <p>This table is for managing products</p>


    <h6 class="header">products_by_locations</h6>
    <p>id</p>
    <p>This table is for managing products by locations</p>


    <h6 class="header">payroll_headers</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">payroll_lines</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">timesheet_hours</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">price_books</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">price_pages</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">menus</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">sub_menus</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">modules</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">syncs</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">prescriptions</h6>
    <p>id</p>
    <p>This table is for managing </p>


    <h6 class="header">soaps</h6>
    <p>id</p>
    <p>This table is for managing </p>

{% endblock %}
