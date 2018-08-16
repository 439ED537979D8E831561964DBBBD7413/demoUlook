<div class="container-fluid">
    <a href="#" class="site-logo">
        <img class="hidden-md-down" src="{{ asset('assets/img/taxi.png') }}" alt="">
        <img class="hidden-lg-down" src="{{ asset('assets/img/taxi.png') }}" alt="">
    </a>

    {{--<button id="show-hide-sidebar-toggle" class="show-hide-sidebar">--}}
    {{--<span>toggle menu</span>--}}
    {{--</button>--}}

    <button class="hamburger hamburger--htla">
        <span>toggle menu</span>
    </button>

    <div class="site-header-content">
        <div class="site-header-content-in">
            <div class="site-header-shown">
                <div class="dropdown user-menu show">
                    <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                        <img src="{{ asset('assets/img/avatar-2-64.png') }}" alt="">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu"
                         x-placement="bottom-end"
                         style="position: absolute; transform: translate3d(-113px, 30px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
                        <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>
                </div>

            </div><!--.site-header-shown-->

            <div class="mobile-menu-right-overlay"></div>

        </div><!--site-header-content-in-->
    </div><!--.site-header-content-->
</div>