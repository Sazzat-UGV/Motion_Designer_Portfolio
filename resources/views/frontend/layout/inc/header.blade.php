<div class="full-width-header header-style2">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-2">
                        <div class="logo-cat-wrap">
                            <div class="logo-part">
                                <a class="dark-logo" href="{{ route('user.homePage') }}">
                                    <div id="bm-dark"></div>
                                </a>
                                <a class="light-logo" href="{{ route('user.homePage') }}">
                                    <div id="bm-light"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 text-center">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu">
                                    <a class="rs-menu-toggle rs-menu-toggle-close">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                                <nav class="rs-menu rs-menu-close" style="height: 0px;">
                                    <ul class="nav-menu">
                                        <li class="rs-mega-menu mega-rs "> <a href="{{ route('user.homePage') }}">Work</a>
                                            {{-- <span class="rs-menu-parent"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></span> --}}
                                        </li>
                                        <li class="menu ">
                                            <a href="{{ route('user.reelPage') }}">Reel</a>
                                        </li>
                                        <li class="menu ">
                                            <a href="{{ route('user.aboutPage') }}">About / Contact</a>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->
</div>
