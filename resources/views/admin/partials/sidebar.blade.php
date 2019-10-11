<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">MENU NAVIGATION</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="/dashboard" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">DASHBOARD</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Setup</span>
                        <span class="pcoded-badge label label-warning">sub-menus</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <!-- <li class=" pcoded-hasmenu">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pages</span>
                            </a>
                        </li> -->
                        <li class=" pcoded-hasmenu">
                            <a href="{{ route('permissions.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Permission</span>
                            </a>
                        </li>
                        <li class=" pcoded-hasmenu">
                            <a href="{{ route('roles.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Roles</span>
                            </a>
                        </li>
                        <li class=" pcoded-hasmenu">
                            <a href="{{ route('newsCategory.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Category</span>
                            </a>
                            <!-- <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="menu-horizontal-static.html" target="_blank"
                                        class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Static Layout</span>
                                    </a>
                                </li>
                            </ul> -->
                        </li>
                        <!-- <li class="">
                            <a href="menu-bottom.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Bottom Menu</span>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">News</span>
                        <span class="pcoded-badge label label-success">sub-menus</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="{{ route('news.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Create News</span>
                            </a>
                        </li>
                    
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Sliders</span>
                        <span class="pcoded-badge label label-info">sub-menus</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="{{ route('slider.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Slide</span>
                            </a>
                        </li>
                    
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Posts</span>
                        <span class="pcoded-badge label label-danger">sub-menus</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="{{ route('posts.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Create Post</span>
                            </a>
                        </li>
                    
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Users</span>
                        <span class="pcoded-badge label label-primary">sub-menus</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="{{ route('users.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Users</span>
                            </a>
                        </li>
                    
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>