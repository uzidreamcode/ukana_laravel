<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('baru/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('baru/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('baru/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('baru/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('baru/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">

    @yield('plugin')

</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Text Logo -->
                        <!-- <a href="index.html" class="logo">
                            <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                            <span class="logo-large"><i class="mdi mdi-radar"></i> Highdmin</span>
                        </a> -->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('baru/images/logo_sm.png') }}" alt="" height="26" class="logo-small">
                            <img src="{{ asset('baru/images/logo.png') }}" alt="" height="22" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <li class="dropdown notification-list hide-phone">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-earth"></i> English  <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    Spanish
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    Italian
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    French
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    Russian
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="fi-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="fi-speech-bubble noti-icon"></i>
                        <span class="badge badge-dark badge-pill noti-icon-badge">6</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h6>
                        </div>

                        <div class="slimscroll" style="max-height: 230px;">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="{{ asset('baru/images/users/avatar-2.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="{{ asset('baru/images/users/avatar-3.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Sam Garret</p>
                                <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="{{ asset('baru/images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="{{ asset('baru/images/users/avatar-5.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Sherry Marshall</p>
                                <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="{{ asset('baru/images/users/avatar-6.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                <p class="notify-details">Shawn Millard</p>
                                <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('baru/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Admin <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    

                    <!-- item-->
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                    <i class="fi-power"></i> <span>Logout</span>

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form> 

            </div>
        </li>
    </ul>
</div>
<!-- end menu-extras -->

<div class="clearfix"></div>

</div> <!-- end container -->
</div>
<!-- end topbar-main -->

<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
               <li class="has-submenu">
                <a href="{{ url('/dashboard/siswa/histori') }}"><i class="icon-speedometer"></i>Beranda</a>
            </li>
        </ul>
        <!-- End navigation menu -->
    </div> <!-- end #navigation -->
</div> <!-- end container -->
</div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div style="margin-top: 50px" class="container-fluid">





        @yield('content')




    </div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                2018 © Highdmin. - Coderthemes.com
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- jQuery  -->
<script src="{{ asset('baru/js/jquery.min.js') }}"></script>
<script src="{{ asset('baru/js/popper.min.js') }}"></script>
<script src="{{ asset('baru/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('baru/js/waves.js') }}"></script>
<script src="{{ asset('baru/js/jquery.slimscroll.js') }}"></script>

<!-- Flot chart -->
<script src="{{ asset('baru/plugins/flot-chart/jquery.flot.min.js') }}"></script>
<script src="{{ asset('baru/plugins/flot-chart/jquery.flot.time.js') }}"></script>
<script src="{{ asset('baru/plugins/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('baru/plugins/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('baru/plugins/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('baru/plugins/flot-chart/jquery.flot.crosshair.js') }}"></script>
<script src="{{ asset('baru/plugins/flot-chart/curvedLines.js') }}"></script>
<script src="{{ asset('baru/plugins/flot-chart/jquery.flot.axislabels.js') }}"></script>

<!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <script src="plugins/jquery-knob/jquery.knob.js"></script>

    <!-- Dashboard Init -->
    <script src="pages/jquery.dashboard.init.js"></script>

    <!-- App js -->
    <script src="js/jquery.core.js"></script>
    <script src="js/jquery.app.js"></script>
    <script>
        @yield('sweet')

        @yield('js')
    </script>

    <!-- Bootstrap tether Core JavaScript -->


    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script>
    <script src="{{ asset('baru/js/plugins-init/datamap-usa-init.js') }}"></script>

</body>
</html>