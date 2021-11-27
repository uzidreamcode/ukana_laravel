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

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg" style="background: url('{{ asset('baru/logo.png') }}');background-size: contain; background-repeat: no-repeat;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="{{ asset('baru/images/logo.png') }}" alt="" height="26"></span>
                                </a>
                            </h2>

                             @yield('content')

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Highdmin. - Coderthemes.com</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="{{ asset('baru/js/jquery.min.js') }}"></script>
        <script src="{{ asset('baru/js/popper.min.js') }}"></script>
        <script src="{{ asset('baru/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('baru/js/waves.js') }}"></script>
        <script src="{{ asset('baru/js/jquery.slimscroll.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('baru/js/jquery.core.js') }}"></script>
        <script src="{{ asset('baru/js/jquery.app.js') }}"></script>

    </body>
</html>