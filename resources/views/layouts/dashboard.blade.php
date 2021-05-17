
<!DOCTYPE html>
<html lang="en">
    <head> 
    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title') - Best Shopping Experience </title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">
                        
                        <a href="index.html" class="logo"><img src="assets/images/logo-dark.png" height="20" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard <span class="badge badge-success badge-pill float-right">3</span></span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> Elements </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-broadcast"></i> <span> Advanced UI </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="advanced-alertify.html">Alertify</a></li>
                                    <li><a href="advanced-rating.html">Rating</a></li>
                                    <li><a href="advanced-nestable.html">Nestable</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Forms </span> <span class="badge badge-warning badge-pill float-right">8</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-pie"></i><span> Charts </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-c3.html">C3 Chart</a></li>
                                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-list"></i><span> Tables </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extra</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span> Maps </span> <span class="badge badge-danger badge-pill float-right">2</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-brightness-max"></i> <span> Icons </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="dripicons-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span> Pages </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-jewel"></i><span> Extras </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-faqs.html">FAQs</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming Soon</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">
                                
                                <a href="index.html" class="logo"><img src="assets/images/logo.png" height="20" alt="logo"></a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                                    <form role="search" class="app-search">
                                        <div class="form-group mb-0"> 
                                            <input type="text" class="form-control" placeholder="Search..">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form> 
                                </li>
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-email-outline noti-icon"></i>
                                        <span class="badge badge-danger badge-pill noti-icon-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <span class="badge badge-danger float-right">367</span>
                                            <h5>Messages</h5>
                                        </div>
                                        <div class="slimscroll" style="max-height: 230px;">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon"><img src="assets/images/users/user-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                                <p class="notify-details"><b>Charles M. Jones</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon"><img src="assets/images/users/user-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                                <p class="notify-details"><b>Thomas J. Mimms</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon"><img src="assets/images/users/user-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                                <p class="notify-details">Luis M. Konrad<span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon"><img src="assets/images/users/user-5.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                                <p class="notify-details"><b>Kendall E. Walker</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon"><img src="assets/images/users/user-6.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                                <p class="notify-details"><b>David M. Ryan</b><span class="text-muted">You have 87 unread messages</span></p>
                                            </a>
                                        </div>
                                        

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                        <span class="badge badge-success badge-pill noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <span class="badge badge-danger float-right">84</span>
                                            <h5>Notification</h5>
                                        </div>

                                        <div class="slimscroll" style="max-height: 230px;">

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                                <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                                <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                            </a>
    
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                                <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                            </a>
                                        </div>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success mt-1 float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Drixo</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Dashboard</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-cube-outline float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">New Orders</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="border-bottom pb-4">
                                                <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 1325</p>
                                                </div>
                                                <h5 class="m-0">1456<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-account-network float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">New Users</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="border-bottom pb-4">
                                                    <span class="badge badge-success"> +22% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 3426</p>
                                                </div>
                                                <h5 class="m-0">3567<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">Average Price</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="border-bottom pb-4">
                                                <span class="badge badge-danger"> -02% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 15.8</p>
                                                </div>
                                                <h5 class="m-0">14.5<i class="mdi mdi-arrow-down text-danger ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-cart-outline float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">Total Sales</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="border-bottom pb-4">
                                                <span class="badge badge-success"> +10% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 14256</p>
                                                </div>
                                                <h5 class="m-0">15234<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
    
                            <!-- end row -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Email Sent</h4>

                                            <ul class="list-inline widget-chart m-t-20 text-center">
                                                <li>
                                                    <h4 class=""><b>3652</b></h4>
                                                    <p class="text-muted m-b-0">Marketplace</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>5421</b></h4>
                                                    <p class="text-muted m-b-0">Last week</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>9652</b></h4>
                                                    <p class="text-muted m-b-0">Last Month</p>
                                                </li>
                                            </ul>

                                            <div id="morris-area-example" style="height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Revenue</h4>

                                            <ul class="list-inline widget-chart m-t-20 text-center">
                                                <li>
                                                    <h4 class=""><b>5248</b></h4>
                                                    <p class="text-muted m-b-0">Marketplace</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>321</b></h4>
                                                    <p class="text-muted m-b-0">Last week</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>964</b></h4>
                                                    <p class="text-muted m-b-0">Last Month</p>
                                                </li>
                                            </ul>
                                            <div id="morris-bar-example" style="height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Monthly Earning</h4>
                                            <div class="">
                                                
                                                <div class="row align-items-center mb-5">
                                                    <div class="col-md-6">
                                                        <div class="pl-3">
                                                            <h3>$6451</h3>
                                                            <h6>Monthly Earning</h6>
                                                            <p class="text-muted">Sed ut perspiciatis unde omnis</p>
                                                            <a href="#" class="text-primary">Learn more...</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <span class="peity-pie" data-peity='{ "fill": ["#508aeb", "#f2f2f2"]}' data-width="84" data-height="84">6/8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <div class="col-6">
                                                        <div>
                                                            <div class="mb-4">
                                                                <span class="peity-donut" data-peity='{ "fill": ["#508aeb", "#f2f2f2"], "innerRadius": 22, "radius": 32 }' data-width="60" data-height="60">2,4</span>
                                                            </div>
                                                            <h4>42%</h4>
                                                            <p class="mb-0 text-muted">Online Earning</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <div class="mb-4">
                                                                <span class="peity-donut" data-peity='{ "fill": ["#508aeb", "#f2f2f2"], "innerRadius": 22, "radius": 32 }' data-width="60" data-height="60">8,4</span>
                                                            </div>
                                                            <h4>58%</h4>
                                                            <p class="text-muted mb-0">Offline Earning</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-30 blog-wid">
                                        <div class="card-body">
                                            <div class="float-left p-1 mr-3">
                                                <div class="text-center bg-primary rounded p-3">
                                                    <p class="text-white-50 mb-4">October</p>
                                                    <h2 class="text-white mb-0">24</h2>
                                                </div>
                                            </div>
                                            <div class="post-details p-2">
                                                <h6 class="mt-0"><a href="#" class="text-dark">It will be as simple as Occidental</a></h6>
                                                <p class="text-muted">Everyone realizes why a new common language would be desirable.</p>
                                                <p class="mb-0">By <a href="#" class="text-primary">Daniel Sons</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Recent Activity Feed</h4>
                                            <ul class="list-unstyled activity-list">
                                                <li class="activity-item">
                                                    <span class="activity-date">12 Oct</span>
                                                    <span class="activity-text">Responded to need “Volunteer Activities”</span>
                                                    <p class="text-muted mt-2">Everyone realizes why a new common language would be desirable common words.</p>
                                                </li>
                                                <li class="activity-item">
                                                    <span class="activity-date">13 Oct</span>
                                                    <span class="activity-text">Uploaded this Images</span>
                                                    <p class="text-muted mt-2">Their separate existence is a myth</p>
                                                    <div>
                                                        <a href="#" class="activity-item-img"><img src="assets/images/small/img-1.jpg" alt="" class="rounded mb-2"></a>
                                                        <a href="#" class="activity-item-img"><img src="assets/images/small/img-2.jpg" alt="" class="rounded mb-2"></a>
                                                    </div>
                                                </li>
                                                <li class="activity-item">
                                                    <span class="activity-date">14 Oct</span>
                                                    <span class="activity-text">Uploaded this File</span>
                                                    <p class="text-muted mt-2 mb-4">The new common language will be more simple and regular their pronunciation.</p>
                                                    <div>
                                                        <a href="#" class="text-muted">
                                                            <i class="ion-ios7-folder h1 p-3 bg-light rounded"></i>
                                                            <p class="mt-2 mb-0">background.psd</p>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card bg-primary m-b-30 text-white weather-box">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <div>
                                                            <canvas id="rain" width="56" height="56"></canvas>
                                                        </div>
                                                        <div>
                                                            <h3>28° c</h3>
                                                            <h6>Heavy rain</h6>
                                                            <h4 class="mt-4">New York</h4>
                                                        </div>
                                                    </div>
                                                    <div class="weather-icon">
                                                        <i class="mdi mdi-weather-pouring"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card bg-warning m-b-30 text-white weather-box">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <div>
                                                            <canvas id="partly-cloudy-day" width="56" height="56"></canvas>
                                                        </div>
                                                        <div>
                                                            <h3>32° c</h3>
                                                            <h6>Partly cloudy</h6>
                                                            <h4 class="mt-4">California</h4>
                                                        </div>
                                                    </div>
                                                    <div class="weather-icon">
                                                        <i class="mdi mdi-weather-partlycloudy"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                                                    <div id="morris-donut-example" class="morris-charts" style="height: 265px"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Recent Candidates</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2017/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2017/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2015/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2018/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2014/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2018/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2018/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                     © 2018 - 2020 <b>Drixo</b> <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- skycons -->
        <script src="{{ asset('assets/plugins/skycons/skycons.min.js') }}"></script>

        <!-- skycons -->
        <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>

        <!-- dashboard -->
        <script src="{{ asset('assets/pages/dashboard.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>