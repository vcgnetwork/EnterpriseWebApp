<!-- side menu navigation -->
<div id="sidr" style="position: absolute; top: 50px; z-index: 1;">
    <i class="fa fa-close sideMainMenuButton pull-left" style="padding: 15px 5px 15px 20px"></i><span style="font-size: 12px; height: 46px; line-height: 46px;">(or click ESC key)</span>
    <div class="clear"></div>

    <form role="search" class="navbar-form" action="/page/search" style="margin: 0 auto">
        <input type="text" name="searchString" placeholder="Find something.." class="form-control" style="float: left; width: 160px;">
        <button type="submit" class="btn btn-success btn-block" style="float: left; width: 60px;">Find</button>
        <div class="clear"></div>
    </form>

    <p>&nbsp;</p>

    <ul class="parent">
        <li class="leader">Home
            <ul class="child">
                <li><span class="fa fa-fw fa-home"></span> &nbsp; <a href="/">Home</a></li>
                <li><span class="fa fa-fw fa-question"></span> &nbsp; <a href="/page/about">About</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Accounting
            <ul class="child">
                <li><span class="fa fa-fw fa-credit-card"></span> &nbsp; <a href="/accounting/ap">Accounts Payable</a></li>
                <li><span class="fa fa-fw fa-money"></span> &nbsp; <a href="/accounting/ar">Accounts Receivable</a></li>
                <li><span class="fa fa-fw fa-table"></span> &nbsp; <a href="/accounting/coa">Chart of Accounts</a></li>
                <li><span class="fa fa-fw fa-line-chart"></span> &nbsp; <a href="/accounting/financials">Financials</a></li>
                <li><span class="fa fa-fw fa-file-text-o"></span> &nbsp; <a href="/accounting/journal-entries">Journal Entries</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">System Settings
            <ul class="child">
                <li><span class="fa fa-fw fa-cogs"></span> &nbsp; <a href="/system/application-settings">Application Settings</a></li>
                <li><span class="fa fa-fw fa-users"></span> &nbsp; <a href="/user/registration">Registration</a></li>
                <li><span class="fa fa-fw fa-user"></span> &nbsp; <a href="/user/users">Users</a></li>
                <li><span class="fa fa-fw fa-lock"></span> &nbsp; <a href="/system/acl">Access Levels</a></li>
                @if(Auth::check())
                    <li><span class="fa fa-fw fa-sign-out"></span> &nbsp; <a href="/session/logout">Logout</a> <small>AUTHORIZED</small></li>
                @else
                    <li><span class="fa fa-fw fa-sign-in"></span> &nbsp; <a href="/session/login">Login</a> <small>GUEST</small></li>
                @endif
                {{--<li><span class="fa fa-fw fa-sign-in"></span> &nbsp; <a href="/session/login">Login</a></li>--}}
                {{--<li><span class="fa fa-fw fa-sign-out"></span> &nbsp; <a href="/session/logout">Logout</a></li>--}}
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">System Information
            <ul class="child">
                <li><span class="fa fa-fw fa-bookmark"></span> &nbsp; <a href="/system/menu">Menus</a></li>
                <li><span class="fa fa-fw fa-user-secret"></span> &nbsp; <a href="/system/role">Roles</a></li>
                <li><span class="fa fa-fw fa-file-text-o"></span> &nbsp; <a href="/system/documentation">Documentation</a></li>
                <li><span class="fa fa-fw fa-sitemap"></span> &nbsp; <a href="/system/site-map">Site Map</a></li>
                <li><span class="fa fa-fw fa-file-text-o"></span> &nbsp; <a href="/system/typography">Typography</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Calendar
            <ul class="child">
                <li><span class="fa fa-fw fa-calendar"></span> &nbsp; <a href="/calendar/index">Calendar</a></li>
                <li><span class="fa fa-fw fa-calendar"></span> &nbsp; <a href="/calendar/agenda">Agenda</a></li>
                <li><span class="fa fa-fw fa-calendar"></span> &nbsp; <a href="/calendar/day">Calendar Day</a></li>
                <li><span class="fa fa-fw fa-calendar"></span> &nbsp; <a href="/calendar/week5">Calendar 5</a></li>
                <li><span class="fa fa-fw fa-calendar"></span> &nbsp; <a href="/calendar/week7">Calendar 7</a></li>
                <li><span class="fa fa-fw fa-calendar"></span> &nbsp; <a href="/calendar/month">Calendar 31</a></li>
                <li><span class="fa fa-fw fa-calendar"></span> &nbsp; <a href="/calendar/year">Calendar 365</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">CRM
            <ul class="child">
                <li><span class="fa fa-fw fa-users"></span> &nbsp; <a href="/crm/record">Records</a></li>
                <li><span class="fa fa-fw fa-file-text-o"></span> &nbsp; <a href="/crm/interactions">Interactions</a></li>
                <li><span class="fa fa-fw fa-list"></span> &nbsp; <a href="/crm/blog">Blog/Posts</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Customer Service
            <ul class="child">
                <li><span class="fa fa-fw fa-user"></span> &nbsp; <a href="/customer-service">Customer Service</a></li>
                <li><span class="fa fa-fw fa-copy"></span> &nbsp; <a href="/customer-service/surveys">Surveys</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Mail
            <ul class="child">
                <li><span class="fa fa-fw fa-exchange"></span> &nbsp; <a href="/mail/send-and-receive">Send & Receive</a></li>
                <li><span class="fa fa-fw fa-inbox"></span> &nbsp; <a href="/mail/inbox">Inbox</a></li>
                <li><span class="fa fa-fw fa-file-o"></span> &nbsp; <a href="/mail/compose">Compose</a></li>
                <li><span class="fa fa-fw fa-send"></span> &nbsp; <a href="/mail/outbox">Outbox</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">EDI
            <ul class="child">
                <li><span class="fa fa-fw fa-exchange"></span> &nbsp; <a href="/edi/send-and-receive">Send & Receive</a></li>
                <li><span class="fa fa-fw fa-inbox"></span> &nbsp; <a href="/edi/inbox">Inbox</a></li>
                <li><span class="fa fa-fw fa-send"></span> &nbsp; <a href="/edi/outbox">Outbox</a></li>
                <li><span class="fa fa-fw fa-files-o"></span> &nbsp; <a href="/edi/templates">X12 Templates</a></li>
                <li><span class="fa fa-fw fa-files-o"></span> &nbsp; <a href="/edi/transaction-sets">Transaction Sets</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Human Resources
            <ul class="child">
                <li><span class="fa fa-fw fa-toggle-on"></span> &nbsp; <a href="/hr/in-out-board">In/Out Board</a></li>
                <li><span class="fa fa-fw fa-book"></span> &nbsp; <a href="/hr/sop">Policy's</a></li>
                <li><span class="fa fa-fw fa-table"></span> &nbsp; <a href="/hr/timesheet">Timesheets</a></li>
                <li><span class="fa fa-fw fa-money"></span> &nbsp; <a href="/hr/payroll">Payroll</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Inventory
            <ul class="child">
                <li><span class="fa fa-fw fa-cubes"></span> &nbsp; <a href="/inventory">Inventory</a></li>
                <li><span class="fa fa-fw fa-tags"></span> &nbsp; <a href="/inventory/stock-status">Stock Status</a></li>
                <li><span class="fa fa-fw fa-tag"></span> &nbsp; <a href="/inventory/inventory-adjustment">Inventory Adjustments</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Logistics / Warehouse
            <ul class="child">
                <li><span class="fa fa-fw fa-plane"></span> &nbsp; <a href="/logistics">Logistics</a></li>
                <li><span class="fa fa-fw fa-map-marker"></span> &nbsp; <a href="/logistics/warehouse">Warehouses</a></li>
                <li><span class="fa fa-fw fa-road"></span> &nbsp; <a href="/logistics/shipment">Shipments</a></li>
                <li><span class="fa fa-fw fa-barcode"></span> &nbsp; <a href="/logistics/wireless">Wireless Warehouse</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Marketing
            <ul class="child">
                <li><span class="fa fa-fw fa-file-o"></span> &nbsp; <a href="/page/expansion">Expansion</a></li>
                <li><span class="fa fa-fw fa-bookmark"></span> &nbsp; <a href="/marketing">Marketing</a></li>
                <li><span class="fa fa-fw fa-file-text-o"></span> &nbsp; <a href="/page/overview">Overview</a></li>
                <li><span class="fa fa-fw fa-university"></span> &nbsp; <a href="/marketing/university">University</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Medical
            <ul class="child">
                <li><span class="fa fa-fw fa-hospital-o"></span> &nbsp; <a href="/medical">Medical</a></li>
                <li><span class="fa fa-fw fa-money"></span> &nbsp; <a href="/medical/billing">Billing</a></li>
                <li><span class="fa fa-fw fa-folder-open"></span> &nbsp; <a href="/medical/chart">Charts</a></li>
                <li><span class="fa fa-fw fa-stethoscope"></span> &nbsp; <a href="/medical/coding">Coding</a></li>
                <li><span class="fa fa-fw fa-clipboard"></span> &nbsp; <a href="/medical/form">Forms</a></li>
                <li><span class="fa fa-fw fa-medkit"></span> &nbsp; <a href="/medical/rx">Scripts (Rx)</a></li>
                <li><span class="fa fa-fw fa-heartbeat"></span> &nbsp; <a href="/medical/soap">S.O.A.P.</a></li>
                <li><span class="fa fa-fw fa-calendar"></span> &nbsp; <a href="/medical/schedule">Schedules</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Productivity
            <ul class="child">
                <li><span class="fa fa-fw fa-tasks"></span> &nbsp; <a href="/tasks">Tasks</a></li>
                <li><span class="fa fa-fw fa-line-chart"></span> &nbsp; <a href="/reports">Reports</a></li>
                <li><span class="fa fa-fw fa-dashboard"></span> &nbsp; <a href="/dashboard">Dashboard</a></li>
                <li><span class="fa fa-fw fa-file"></span> &nbsp; <a href="/documents">Documents</a></li>
                <li><span class="fa fa-fw fa-upload"></span> &nbsp; <a href="/upload">Upload</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Page Controller (public)
            <ul class="child">
                <li><span class="fa fa-fw fa-ellipsis-h"></span> &nbsp; <a href="/page/about">About</a></li>
                <li><span class="fa fa-fw fa-ellipsis-h"></span> &nbsp; <a href="/page/contact">Contact</a></li>
                <li><span class="fa fa-fw fa-ellipsis-h"></span> &nbsp; <a href="/page/typography">Typography</a></li>
                <li><span class="fa fa-fw fa-ellipsis-h"></span> &nbsp; <a href="/page/json">json</a></li>
                <li><span class="fa fa-fw fa-search"></span> &nbsp; <a href="/page/search">search</a></li>
                <li><span class="fa fa-fw fa-bars"></span> &nbsp; <a href="/page/overview">overview</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Purchasing
            <ul class="child">
                <li><span class="fa fa-fw fa-tags"></span> &nbsp; <a href="/purchasing">Purchasing</a></li>
                <li><span class="fa fa-fw fa-list-alt"></span> &nbsp; <a href="/purchasing/purchase-order">Purchase Orders</a></li>
                <li><span class="fa fa-fw fa-list"></span> &nbsp; <a href="/purchasing/purchase-order-receipt">Purchase Order Receipts</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Quality / Regulatory
            <ul class="child">
                <li><span class="fa fa-fw fa-file"></span> &nbsp; <a href="/qara/msds">MSDS</a></li>
                <li><span class="fa fa-fw fa-crosshairs"></span> &nbsp; <a href="/qara/regulatory">Regulatory</a></li>
                <li><span class="fa fa-fw fa-diamond"></span> &nbsp; <a href="/qara/quality">Quality</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Sales
            <ul class="child">
                <li><span class="fa fa-fw fa-tags"></span> &nbsp; <a href="/sales/product">Products</a></li>
                <li><span class="fa fa-fw fa-street-view"></span> &nbsp; <a href="/sales/service">Services</a></li>
                <li><span class="fa fa-fw fa-bullseye"></span> &nbsp; <a href="/sales/opportunity">Opportunities</a></li>
                <li><span class="fa fa-fw fa-usd"></span> &nbsp; <a href="/sales/pricing">Pricing</a></li>
                <li><span class="fa fa-fw fa-shopping-cart"></span> &nbsp; <a href="/sales/ecommerce">eCommerce</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Sales
            <ul class="child">
                <li><span class="fa fa-fw fa-file-text-o"></span> &nbsp; <a href="/sales/quote">Quotes</a></li>
                <li><span class="fa fa-fw fa-file-text-o"></span> &nbsp; <a href="/sales/order">Orders</a></li>
                <li><span class="fa fa-fw fa-file-text-o"></span> &nbsp; <a href="/sales/invoice">Invoices</a></li>
                <li><span class="fa fa-fw fa-book"></span> &nbsp; <a href="/sales/pricing">Pricing</a></li>
                <li><span class="fa fa-fw fa-book"></span> &nbsp; <a href="/sales/contract">Contracts</a></li>
                <li><span class="fa fa-fw fa-book"></span> &nbsp; <a href="/sales/rebate">Rebates</a></li>
                <li><span class="fa fa-fw fa-book"></span> &nbsp; <a href="/sales/tracing">Tracings</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

    <ul class="parent">
        <li class="leader">Service
            <ul class="child">
                <li><span class="fa fa-fw fa-phone"></span> &nbsp; <a href="/service/call">Calls</a></li>
                <li><span class="fa fa-fw fa-map-marker"></span> &nbsp; <a href="/service/map">Maps</a></li>
                <li><span class="fa fa-fw fa-road"></span> &nbsp; <a href="/service/route">Routes</a></li>
                <li><span class="fa fa-fw fa-calendar"></span> &nbsp; <a href="/service/schedule">Schedules</a></li>
                <li><span class="fa fa-fw fa-wrench"></span> &nbsp; <a href="/service/technician">Technicians</a></li>
            </ul>
        </li>
        <li class="divider"></li>
    </ul>

</div>
<!-- .side menu navigation -->
