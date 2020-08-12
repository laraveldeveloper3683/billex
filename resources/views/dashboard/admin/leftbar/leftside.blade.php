<div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
        <li class="nav-header">
            <div class="dropdown profile-element">
                <span>
                <img alt="image" class="img-circle" src="{{ asset('billex/img/profile_small.jpg') }}" />
                </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ ucfirst(Auth::user()->name) }}</strong>
                </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="mailbox.html">Mailbox</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <div class="logo-element">
                BX+
            </div>
        </li>
        <li class="active">
            <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                <li><a href="dashboard_5.html">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">All Users</span></a>
        </li>
        <li>
            <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
            </ul>
        </li>
        <li>
            <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="mailbox.html">Inbox</a></li>
            </ul>
        </li>
        <li>
            <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>  </a>
        </li>
        <li>
            <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="form_basic.html">Basic form</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="contacts.html">Contacts</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="search_results.html">Search results</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="toastr_notifications.html">Notification</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="typography.html">Typography</a></li>
            </ul>
        </li>
        <li>
            <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="table_basic.html">Static Tables</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="ecommerce_products_grid.html">Products grid</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li>
                    <a href="#">Third Level <span class="fa arrow"></span></a>
                    <ul class="nav nav-third-level">
                        <li>
                            <a href="#">Third Level Item</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Second Level Item</a></li>
                <li>
                    <a href="#">Second Level Item</a>
                </li>
                <li>
                    <a href="#">Second Level Item</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
        </li>
        <li class="landing_link">
            <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
        </li>
        <li class="special_link">
            <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
        </li>
    </ul>
</div>
