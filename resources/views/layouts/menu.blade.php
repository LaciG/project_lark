<div class="page-loader">
    <div class="page-loader__spinner">
        <svg viewBox="25 25 50 50">
            <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
    </div>
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
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                    @endif
                @endforeach
                {{--  <a href="#" class="dropdown-item">Clear Local Storage</a>  --}}
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

<aside class="sidebar">
    <div class="scrollbar-inner">

        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                <div>
                    <div class="user__name"> {{ Auth::user()->name }} </div>
                    <div class="user__email"> {{ Auth::user()->email }} </div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">View Profile</a>
                <a class="dropdown-item" href="#">Settings</a>

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <ul class="navigation">
            <li><a href="index-2.html"><i class="zmdi zmdi-home"></i> Home</a></li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-view-week"></i> Variants</a>

                <ul>
                    <li><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                    <li><a href="boxed-layout.html">Boxed Layout</a></li>
                    <li><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                </ul>
            </li>

            <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>

            <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-view-list"></i> Tables</a>

                <ul>
                    <li><a href="html-table.html">HTML Table</a></li>
                    <li><a href="data-table.html">Data Table</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                <ul>
                    <li><a href="form-elements.html">Basic Form Elements</a></li>
                    <li><a href="form-components.html">Form Components</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                <ul>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="css-animations.html">CSS Animations</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="listview.html">Listview</a></li>
                    <li><a href="toolbars.html">Toolbars</a></li>
                    <li><a href="cards.html">Cards</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="badges.html">Badges</a></li>
                    <li><a href="breadcrumbs.html">Bredcrumbs</a></li>
                    <li><a href="jumbotron.html">Jumbotron</a></li>
                    <li><a href="navs.html">Navs</a></li>
                    <li><a href="pagination.html">Pagination</a></li>
                    <li><a href="progress.html">Progress</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                <ul class="navigation__sub">
                    <li><a href="carousel.html">Carousel</a></li>
                    <li><a href="collapse.html">Collapse</a></li>
                    <li><a href="dropdowns.html">Dropdowns</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="popover.html">Popover</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="tooltips.html">Tooltips</a></li>
                    <li><a href="notifications-alerts.html">Notifications & Alerts</a></li>
                    <li><a href="treeview.html">Tree View</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-trending-up"></i> Charts</a>

                <ul>
                    <li><a href="flot-charts.html">Flot</a></li>
                    <li><a href="other-charts.html">Other Charts</a></li>
                </ul>
            </li>

            <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

            <li><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

            <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                <a href="#"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                <ul>
                    <li><a href="profile-about.html">Profile</a></li>
                    <li><a href="messages.html">Messages</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="new-contact.html">New Contact</a></li>
                    <li><a href="groups.html">Groups</a></li>
                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="todo-lists.html">Todo Lists</a></li>
                    <li><a href="notes.html">Notes</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                    <li><a href="issue-tracker.html">Issues Tracker</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-detail.html">Blog Detail</a></li>
                    <li><a href="questions-answers.html">Questions & Answers</a></li>
                    <li><a href="questions-answers-details.html">Questions & Answers Details</a></li>
                    <li><a href="login.html">Login & SignUp</a></li>
                    <li><a href="lockscreen.html">Lockscreen</a></li>
                    <li><a href="404.html">404</a></li>
                    <li class="navigation__active"><a href="empty.html">Empty Page</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

<div class="themes">
    <div class="scrollbar-inner">
        <a href="#" class="themes__item active" data-sa-value="1"><img src="img/bg/1.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="2"><img src="img/bg/2.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="3"><img src="img/bg/3.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="4"><img src="img/bg/4.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="5"><img src="img/bg/5.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="6"><img src="img/bg/6.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="7"><img src="img/bg/7.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="8"><img src="img/bg/8.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="9"><img src="img/bg/9.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="10"><img src="img/bg/10.jpg" alt=""></a>
    </div>
</div>