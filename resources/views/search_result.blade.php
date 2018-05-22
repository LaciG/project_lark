@include('layouts.web_head')               
@include('layouts.menu')

<section class="content">
        <div class="content__inner">
            <header class="content__title">
                <h1>Search results</h1>
                <small>871 results found for 'Lorem Ipsum' at request time 0.51 seconds</small>
            </header>

            <div class="card results">
                <div class="results__header">
                    <div class="results__search">
                        <input type="text" placeholder="Search again...">
                    </div>

                    <header class="header">
        <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
            <i class="zmdi zmdi-menu"></i>
        </div>

        <div class="logo hidden-sm-down">
            <h1><a href="index-2.html">Super Admin 2.0</a></h1>
        </div>

        <form class="search">
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
            </div>
        </form>

        <ul class="top-nav">
            <li class="hidden-xl-up"><a href="#" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="dropdown-header">
                        Messages

                        <div class="actions">
                            <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                        </div>
                    </div>

                    <div class="listview listview--hover">
                        <a href="#" class="listview__item">
                            <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    David Belle <small>12:01 PM</small>
                                </div>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    Jonathan Morris
                                    <small>02:45 PM</small>
                                </div>
                                <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    Fredric Mitchell Jr.
                                    <small>08:21 PM</small>
                                </div>
                                <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    Glenn Jecobs
                                    <small>08:43 PM</small>
                                </div>
                                <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    Bill Phillips
                                    <small>11:32 PM</small>
                                </div>
                                <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                            </div>
                        </a>

                        <a href="#" class="view-more">View all messages</a>
                    </div>
                </div>
            </li>

            <li class="dropdown top-nav__notifications">
                <a href="#" data-toggle="dropdown" class="top-nav__notify">
                    <i class="zmdi zmdi-notifications"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="dropdown-header">
                        Notifications

                        <div class="actions">
                            <a href="#" class="actions__item zmdi zmdi-check-all" data-sa-action="notifications-clear"></a>
                        </div>
                    </div>

                    <div class="listview listview--hover">
                        <div class="listview__scroll scrollbar-inner">
                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">David Belle</div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Jonathan Morris</div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Fredric Mitchell Jr.</div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Glenn Jecobs</div>
                                    <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Bill Phillips</div>
                                    <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">David Belle</div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Jonathan Morris</div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Fredric Mitchell Jr.</div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                </div>
                            </a>
                        </div>

                        <div class="p-1"></div>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="dropdown-header">Tasks</div>

                    <div class="listview listview--hover">
                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">HTML5 Validation Report</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">Google Chrome Extension</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">Social Intranet Projects</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">Bootstrap Admin Template</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">Youtube Client App</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="view-more">View all Tasks</a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="row app-shortcuts">
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-calendar"></i>
                            <small class="">Calendar</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-file-text"></i>
                            <small class="">Files</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-email"></i>
                            <small class="">Email</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-trending-up"></i>
                            <small class="">Reports</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-view-headline"></i>
                            <small class="">News</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="#">
                            <i class="zmdi zmdi-image"></i>
                            <small class="">Gallery</small>
                        </a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                    <a href="#" class="dropdown-item">Clear Local Storage</a>
                    <a href="#" class="dropdown-item">Settings</a>
                </div>
            </li>

            <li class="hidden-xs-down">
                <a href="#" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zmdi zmdi-palette"></i></a>
            </li>
        </ul>

        <div class="clock hidden-md-down">
            <div class="time">
                <span class="time__hours"></span>
                <span class="time__min"></span>
                <span class="time__sec"></span>
            </div>
        </div>
    </header>

                    <nav class="nav nav-tabs results__nav">
                        <a class="nav-link active" href="#">Everything</a>
                        <a class="nav-link" href="#">Documents</a>
                        <a class="nav-link" href="#">Files</a>
                        <a class="nav-link" href="#">Contacts</a>
                        <a class="nav-link" href="#">Groups</a>
                        <a class="nav-link disabled" href="#">Photos</a>
                        <a class="nav-link disabled" href="#">Videos</a>
                    </nav>
                </div>

                <div class="listview listview--bordered listview--hover">
                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                            <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Finibus consectetur mauris, eget laoreet turpis malesuada eredeu lectus sed enim suscipit euismod</div>
                            <p>Aliquam fringilla neque sit amet libero convallis ac consequat nulla iaculis urabitur placerat mi sed massa euismod, a tincidunt enim tinciduntam porttitor lorem ac pharetra semper</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Vestibulum cursus eros id ipsum finibus a pretium justo aliquam</div>
                            <p>Etiam cursus lorem eget sapien euismod, ac elementum urna tempusonec dapibus</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Nunc erat nunc ullamcorper sit amet odio vel accumsan viverra velit aliquam fringilla neque sit amet libero convallis, ac consequat nulla iaculis.</div>
                            <p>Suspendisse aliquam sapien vitae elit ornare accumsan in dictum eratraesent pulvinar eros</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Pellentesque vitae leo vestibulum odio mollis porta blandit eget nunc</div>
                            <p>Suspendisse ullamcorper purus efficitur lorem hendrerit, rhoncus dignissim lorem vehicula</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Integer pharetra ligula fermentum condimentum</div>
                            <p>Vestibulum faucibus lacus vitae neque scelerisque, eu congue neque bibendum</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Nulla placerat tortor at quam ullamcorper, ut tincidunt purus lacinia</div>
                            <p>In et risus at enim vulputate finibus</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Duis vel purus vel tellus</div>
                            <p>Vestibulum pulvinar metus vel nunc gravida elementum Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Nullam at lacus et odio molestie accumsan eu sit amet est</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Suspendisse scelerisque neque vitae dapibus facilisis</div>
                            <p>Integer consequat nisl vel velit euismod, ultricies tempus magna tempus</p>
                        </div>
                    </a>
                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Aliquam lobortis ex nec efficitur luctus Quisque ullamcorper tortor ut lorem blandit, vitae mollis sem ornare</div>
                            <p>Sed ultrices erat vel eros finibus</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Nam nec ante mattis</div>
                            <p>Donec molestie lorem at lacus pretium, quis interdum ligula fringilla</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Praesent auctor orci et ornare ultricies</div>
                            <p>Fusce porttitor libero fermentum sapien interdum, eu scelerisque purus sagittis. Fusce porttitor libero fermentum sapien interdum, eu scelerisque purus sagittis</p>
                        </div>
                    </a>

                    <a class="listview__item" href="#">
                        <div class="listview__content">
                            <div class="listview__heading">Etiam in sapien quis magna consequat mollis</div>
                            <p>Vestibulum eu enim rhoncus, bibendum neque non, commodo lorem Donec varius ipsum quis fermentum malesuada. Ut gravida nulla non est accumsan, ut ultrices turpis pellentesque</p>
                        </div>
                    </a>

                    <div class="clearfix mb-3"></div>
                </div>
            </div>

            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item pagination-first"><a class="page-link" href="#"></a></li>
                    <li class="page-item pagination-prev"><a class="page-link" href="#"></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item pagination-next"><a class="page-link" href="#"></a></li>
                    <li class="page-item pagination-last"><a class="page-link" href="#"></a></li>
                </ul>
            </nav>

            <footer class="footer hidden-xs-down">
                @include('layouts.footer')
            </footer>
        </div>
    </section

@include('layouts.web_foot')