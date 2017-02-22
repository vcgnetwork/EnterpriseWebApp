{% extends 'master.html.twig' %}

{% block body %}

    <p>&nbsp;</p>

    <h3>// Welcome to the new {% include 'partials/system-name.html.twig' %} //</h3>

    <p>&nbsp;</p>

    <p>Basic Layout and Instructions:</p>

    <ul>
        <li>Side Menu - click the <i class="fa fa-bars sideMainMenuButton"></i> icon in the top-left of the screen or use the escape key.</li>
        <li>To {% include 'partials/login-logout-text.html.twig' %} {% include 'partials/system-name.html.twig' %} - click the {% include 'partials/login-logout.html.twig' %} icon in the top-right of the screen.</li>
    </ul>

    <p>pageText: {{ pageText }}</p>


    <div class="row">
        <div class="col-sm-12">

            <nav id="mainNavigation" role="navigation">

                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Public Pages
                            <ul class="child">
                                <li><span class="fa fa-home"></span> &nbsp; <a href="/">Home</a></li>
                                <li><span class="fa fa-users"></span> &nbsp; <a href="/user/registration">Registration</a></li>
                                <li><span class="fa fa-sign-in"></span> &nbsp; <a href="/login">Login</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">System Users
                            <ul class="child">
                                <li><span class="fa fa-user"></span> &nbsp; <a href="/user">System Users</a></li>
                                <li class="divider"></li>
                                {#@if(Auth::check())#}
                                {#<li><span class="fa fa-sign-out"></span> &nbsp; <a href="/logout">Logout</a></li>#}
                                {#<li>AUTHORIZED</li>#}
                                {#@else#}
                                {#<li><span class="fa fa-sign-in"></span> &nbsp; <a href="/login">Login</a></li>#}
                                {#<li>GUEST</li>#}
                                {#@endif#}
                                <li><span class="fa fa-user"></span> &nbsp; <a href="/user">User Access</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Productivity
                            <ul class="child">
                                <li><span class="fa fa-tasks"></span> &nbsp; <a href="/task">Tasks</a></li>
                                <li><span class="fa fa-line-chart"></span> &nbsp; <a href="/report">Reports</a></li>
                                <li><span class="fa fa-dashboard"></span> &nbsp; <a href="/dashboard">Dashboard</a></li>
                                <li><span class="fa fa-file"></span> &nbsp; <a href="/document">Document File Server</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">EDI
                            <ul class="child">
                                <li><span class="fa fa-files-o"></span> &nbsp; <a href="/edi">EDI</a></li>
                                <li><span class="fa fa-exchange"></span> &nbsp; <a href="/edi/send-and-receive">Send & Receive</a></li>
                                <li><span class="fa fa-inbox"></span> &nbsp; <a href="/edi/inbox">Inbox</a></li>
                                <li><span class="fa fa-send"></span> &nbsp; <a href="/edi/outbox">Outbox</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">General
                            <ul class="child">
                                <li><span class="fa fa-file-text-o"></span> &nbsp; <a href="/page/overview">Overview</a></li>
                                <li><span class="fa fa-file-o"></span> &nbsp; <a href="/page/expansion">Expansion</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Administration
                            <ul class="child">
                                <li><span class="fa fa-file-text-o"></span> &nbsp; <a href="/page/documentation">Documentation</a></li>
                                <li><span class="fa fa-cogs"></span> &nbsp; <a href="/system/settings">Application Settings</a></li>
                                <li><span class="fa fa-bookmark"></span> &nbsp; <a href="/system/menu">Menus</a></li>
                                <li><span class="fa fa-user-secret"></span> &nbsp; <a href="/system/role">Roles</a></li>
                                <li><span class="fa fa-lock"></span> &nbsp; <a href="/system/access-level">Access Levels</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Human Resources
                            <ul class="child">
                                <li><span class="fa fa-toggle-on"></span> &nbsp; <a href="/hr/in-out-board">In/Out Board</a></li>
                                <li><span class="fa fa-book"></span> &nbsp; <a href="/hr/sop">Policy's</a></li>
                                <li><span class="fa fa-table"></span> &nbsp; <a href="/hr/timesheet">Timesheets</a></li>
                                <li><span class="fa fa-money"></span> &nbsp; <a href="/hr/payroll">Payroll</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Marketing
                            <ul class="child">
                                <li><span class="fa fa-bookmark"></span> &nbsp; <a href="/marketing">Marketing</a></li>
                                <li><span class="fa fa-university"></span> &nbsp; <a href="/marketing/university">University</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>


                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Sales
                            <ul class="child">
                                <li><span class="fa fa-tags"></span> &nbsp; <a href="/sales/product">Products</a></li>
                                <li><span class="fa fa-street-view"></span> &nbsp; <a href="/sales/service">Services</a></li>
                                <li><span class="fa fa-bullseye"></span> &nbsp; <a href="/sales/opportunity">Opportunities</a></li>
                                <li><span class="fa fa-usd"></span> &nbsp; <a href="/sales/pricing">Pricing</a></li>
                                <li><span class="fa fa-shopping-cart"></span> &nbsp; <a href="/sales/ecommerce">eCommerce</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">example
                            <ul class="child">
                                <li><span class="fa fa-bullseye"></span> &nbsp; <a href="#">example</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Customer Service
                            <ul class="child">
                                <li><span class="fa fa-user"></span> &nbsp; <a href="/customer-service">Customer Service</a></li>
                                <li><span class="fa fa-copy"></span> &nbsp; <a href="/customer-service/surveys">Surveys</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Service
                            <ul class="child">
                                <li><span class="fa fa-phone"></span> &nbsp; <a href="/service/call">Calls</a></li>
                                <li><span class="fa fa-map-marker"></span> &nbsp; <a href="/service/map">Maps</a></li>
                                <li><span class="fa fa-road"></span> &nbsp; <a href="/service/route">Routes</a></li>
                                <li><span class="fa fa-calendar"></span> &nbsp; <a href="/service/schedule">Schedules</a></li>
                                <li><span class="fa fa-wrench"></span> &nbsp; <a href="/service/technician">Technicians</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Inventory
                            <ul class="child">
                                <li><span class="fa fa-cubes"></span> &nbsp; <a href="/inventory">Inventory</a></li>
                                <li><span class="fa fa-tags"></span> &nbsp; <a href="/inventory/stock-status">Stock Status</a></li>
                                <li><span class="fa fa-tag"></span> &nbsp; <a href="/inventory/inventory-adjustment">Inventory Adjustments</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Quality / Regulatory
                            <ul class="child">
                                <li><span class="fa fa-file"></span> &nbsp; <a href="/qara/msds">MSDS</a></li>
                                <li><span class="fa fa-crosshairs"></span> &nbsp; <a href="/qara/regulatory">Regulatory</a></li>
                                <li><span class="fa fa-diamond"></span> &nbsp; <a href="/qara/quality">Quality</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Purchasing
                            <ul class="child">
                                <li><span class="fa fa-tags"></span> &nbsp; <a href="/purchasing">Purchasing</a></li>
                                <li><span class="fa fa-list-alt"></span> &nbsp; <a href="/purchasing/purchase-order">Purchase Orders</a></li>
                                <li><span class="fa fa-list"></span> &nbsp; <a href="/purchasing/purchase-order-receipt">Purchase Order Receipts</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Accounting
                            <ul class="child">
                                <li><span class="fa fa-credit-card"></span> &nbsp; <a href="/accounting/ap">Accounts Payable</a></li>
                                <li><span class="fa fa-money"></span> &nbsp; <a href="/accounting/ar">Accounts Receivable</a></li>
                                <li><span class="fa fa-table"></span> &nbsp; <a href="/accounting/coa">Chart of Accounts</a></li>
                                <li><span class="fa fa-line-chart"></span> &nbsp; <a href="/accounting/financial">Financials</a></li>
                                <li><span class="fa fa-file-text-o"></span> &nbsp; <a href="accounting/note">Notes</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Logistics / Warehouse
                            <ul class="child">
                                <li><span class="fa fa-plane"></span> &nbsp; <a href="/logistics">Logistics</a></li>
                                <li><span class="fa fa-map-marker"></span> &nbsp; <a href="/logistics/warehouse">Warehouses</a></li>
                                <li><span class="fa fa-road"></span> &nbsp; <a href="/logistics/shipment">Shipments</a></li>
                                <li><span class="fa fa-barcode"></span> &nbsp; <a href="/logistics/wireless">Wireless Warehouse</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Calendar
                            <ul class="child">
                                <li><span class="fa fa-calendar"></span> &nbsp; <a href="/calendar">calendar</a></li>
                                <li><span class="fa fa-calendar"></span> &nbsp; <a href="/calendar">Agenda</a></li>
                                <li><span class="fa fa-calendar"></span> &nbsp; <a href="/calendar/day">Calendar Day</a></li>
                                <li><span class="fa fa-calendar"></span> &nbsp; <a href="/calendar/week5">Calendar 5</a></li>
                                <li><span class="fa fa-calendar"></span> &nbsp; <a href="/calendar/week7">Calendar 7</a></li>
                                <li><span class="fa fa-calendar"></span> &nbsp; <a href="/calendar/month">Calendar 31</a></li>
                                <li><span class="fa fa-calendar"></span> &nbsp; <a href="/calendar/year">Calendar 365</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Sales
                            <ul class="child">
                                <li><span class="fa fa-file-text-o"></span> &nbsp; <a href="/sales/quote">Quotes</a></li>
                                <li><span class="fa fa-file-text-o"></span> &nbsp; <a href="/sales/order">Orders</a></li>
                                <li><span class="fa fa-file-text-o"></span> &nbsp; <a href="/sales/invoice">Invoices</a></li>
                                <li><span class="fa fa-book"></span> &nbsp; <a href="/sales/pricing">Pricing</a></li>
                                <li><span class="fa fa-book"></span> &nbsp; <a href="/sales/contract">Contracts</a></li>
                                <li><span class="fa fa-book"></span> &nbsp; <a href="/sales/rebate">Rebates</a></li>
                                <li><span class="fa fa-book"></span> &nbsp; <a href="/sales/tracing">Tracings</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->
                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">CRM
                            <ul class="child">
                                <li><span class="fa fa-user"></span> &nbsp; <a href="/users"pa>System Users</a></li>
                                <li><span class="fa fa-list"></span> &nbsp; <a href="/blog">Blog/Posts</a></li>
                                <li><span class="fa fa-sitemap"></span> &nbsp; <a href="/page/site-map">Site Map</a></li>
                                <li><span class="fa fa-users"></span> &nbsp; <a href="/record">Records</a></li>
                                <li><span class="fa fa-file-text-o"></span> &nbsp; <a href="/live-journal">Live Journals</a></li>
                                <li><span class="fa fa-file-text-o"></span> &nbsp; <a href="/page/typography">Typography</a></li>
                                <li><span class="fa fa-file-text-o"></span> &nbsp; <a href="/page/elements">Elements</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->

                <div class="col-md-4">

                    <ul class="parent">
                        <li class="leader">Medical
                            <ul class="child">
                                <li><span class="fa fa-hospital-o"></span> &nbsp; <a href="/medical">Medical</a></li>
                                <li><span class="fa fa-money"></span> &nbsp; <a href="/medical/billing">Billing</a></li>
                                <li><span class="fa fa-folder-open"></span> &nbsp; <a href="/medical/chart">Charts</a></li>
                                <li><span class="fa fa-stethoscope"></span> &nbsp; <a href="/medical/coding">Coding</a></li>
                                <li><span class="fa fa-clipboard"></span> &nbsp; <a href="/medical/form">Forms</a></li>
                                <li><span class="fa fa-medkit"></span> &nbsp; <a href="/medical/rx">Scripts (Rx)</a></li>
                                <li><span class="fa fa-heartbeat"></span> &nbsp; <a href="/medical/soap">S.O.A.P.</a></li>
                                <li><span class="fa fa-calendar"></span> &nbsp; <a href="/medical/schedule">Schedules</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                    </ul>

                </div><!-- .col -->

            </nav>

        </div><!-- /col -->
    </div><!-- /row -->

{% endblock %}