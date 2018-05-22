@include('layouts.web_head')               
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
        @include('layouts.web_foot')