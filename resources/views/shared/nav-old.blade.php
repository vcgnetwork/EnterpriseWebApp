<nav class="navbar navbar-default">

    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavMenu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><i class="fa fa-home"></i> SalesWebApp</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="mainNavMenu">

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li class="dropdown-header"><i class="fa fa-file-text-o" aria-hidden="true"></i> PAGES</li>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/typography">Typography</a></li>
                        <li><a href="/json">json Dump</a></li>

                        <li role="separator" class="divider"></li>

                        <li class="dropdown-header"><i class="fa fa-briefcase" aria-hidden="true"></i> USERS</li>
                        <li><a href="/users">List all users</a></li>
                        <li><a href="/user/create">Create user</a></li>

                        <li role="separator" class="divider"></li>

                        <li class="dropdown-header"><i class="fa fa-tasks" aria-hidden="true"></i> TASKS</li>
                        <li><a href="#">Open</a></li>
                        <li><a href="#">Closed</a></li>

                        <li role="separator" class="divider"></li>

                        <li class="dropdown-header"><i class="fa fa-dashboard" aria-hidden="true"></i> DASHBOARD</li>
                        <li><a href="#">Open</a></li>
                        <li><a href="#">Closed</a></li>

                        <li role="separator" class="divider"></li>

                        <li class="dropdown-header"><i class="fa fa-briefcase" aria-hidden="true"></i> CRM</li>
                        <li><a href="#">Open</a></li>
                        <li><a href="#">Closed</a></li>

                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/"><i class="fa fa-sign-in"></i> Login</a></li>
                        <li><a href="/"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>

        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->

</nav>