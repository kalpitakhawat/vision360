<header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav">
            <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a style="width:100%;" href=".\" class="waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Dashboard</a>
                        </li>
                        <li><a style="width:100%;" class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Members<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a style="width:100%;" href="{{route('admin.users.pending')}}" class="waves-effect">Pending Applications</a>
                                    </li>
                                    <li><a style="width:100%;" href="{{route('admin.users.show')}}" class="waves-effect">Approved Members</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a style="width:100%;" class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> Blogs<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a style="width:100%;" href="{{route('admin.blogs.pending')}} " class="waves-effect">Submited Blogs</a>
                                    </li>
                                    <li><a style="width:100%;" href="{{route('admin.blogs.show')}} " class="waves-effect">Publihed Blogs</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a style="width:100%;" href="./circulars" class=" waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Circulars</a></li>
                        <li><a style="width:100%;" href="./events" class="waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Events</a></li>
                        <li><a style="width:100%;" class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Advertisements</a></li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Material Design for Bootstrap</p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <form action="/logout" method="post">
                        {{csrf_field()}}
                        <button type="submit" class="nav-link waves-effect waves-light"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Logout</span></button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
