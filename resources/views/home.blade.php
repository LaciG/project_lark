<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

        <!-- App styles -->
        <link rel="stylesheet" href="/css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <main class="main">
                
            @include('layouts.menu')
                    
            <section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>xxx</h1>

                        <div class="actions">
                            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">xxx</h4>
                            <h6 class="card-subtitle">xxx</h6>
                        </div>
                    </div>

                    <footer class="footer hidden-xs-down">
                        @include('layouts.footer')
                    </footer>
                </div>
            </section>
        </main>

        <!-- Older IE warning message -->
        <!--[if IE]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                <div class="ie-warning__downloads">
                    <a href="http://www.google.com/chrome">
                        <img src="/img/browsers/chrome.png" alt="">
                    </a>

                    <a href="https://www.mozilla.org/en-US/firefox/new">
                        <img src="/img/browsers/firefox.png" alt="">
                    </a>

                    <a href="http://www.opera.com">
                        <img src="/img/browsers/opera.png" alt="">
                    </a>

                    <a href="https://support.apple.com/downloads/safari">
                        <img src="/img/browsers/safari.png" alt="">
                    </a>

                    <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                        <img src="/img/browsers/edge.png" alt="">
                    </a>

                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="/img/browsers/ie.png" alt="">
                    </a>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- App functions and actions -->
        <script src="/js/app.min.js"></script>
    </body>

</html>