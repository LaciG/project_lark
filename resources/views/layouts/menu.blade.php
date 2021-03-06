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
                        <img src="/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                        <div class="listview__content">
                            <div class="listview__heading">
                                David Belle <small>12:01 PM</small>
                            </div>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                        </div>
                    </a>

                    <a href="#" class="listview__item">
                        <img src="/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

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
                            <img src="/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">David Belle</div>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                            </div>
                        </a>

                        <a href="#" class="listview__item">
                            <img src="/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

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
                <img class="user__img" src="/demo/img/profile-pics/8.jpg" alt="">
                <div>
                    <div class="user__name"> {{ Auth::user()->name }} </div>
                    <div class="user__email"> {{ Auth::user()->email }} </div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href=' {{ url("/profile/view") }} '>{{__('text.profile')}}</a>
                <a class="dropdown-item" href=" {{ url('/profile/edit') }} ">{{__('text.settings')}}</a>

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('text.logout') }} </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <ul class="navigation">
            <li><a href=" {{ url('/home') }} "><i class="zmdi zmdi-home"></i> {{__('text.home')}}</a></li>

            <li><a href=" {{ url('/notes') }} "><i class="zmdi zmdi-view-list"></i> {{__('text.notes')}}</a></li>

            <li><a href=" {{ url('/todo') }} "><i class="zmdi zmdi-collection-text"></i> {{__('text.todo')}}</a></li>

            <li><a href=" {{ url('/result') }} "><i class="zmdi zmdi-search"></i> {{__('text.searchResult')}}</a></li>

            <li><a href=" {{ url('/calendar') }}"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

            {{-- <li><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>
            
            <li><a href="#"><i class="zmdi zmdi-image"></i> Files</a></li>
            --}}

        </ul>
    </div>
</aside>

<div class="themes">
    <div class="scrollbar-inner">
        <a href="#" class="themes__item" data-sa-value="1"><img src="/img/bg/1.jpg" alt=""></a>
        <a href="#" class="themes__item active" data-sa-value="2"><img src="/img/bg/2.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="3"><img src="/img/bg/3.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="4"><img src="/img/bg/4.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="5"><img src="/img/bg/5.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="6"><img src="/img/bg/6.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="7"><img src="/img/bg/7.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="8"><img src="/img/bg/8.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="9"><img src="/img/bg/9.jpg" alt=""></a>
        <a href="#" class="themes__item" data-sa-value="10"><img src="/img/bg/10.jpg" alt=""></a>
    </div> 
</div>