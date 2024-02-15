<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">

                </div>
                <ul class="navbar-nav header-right">

                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dz-fullscreen" href="javascript:void(0);">
                            <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="css-i6dzq1">
                                <path
                                    d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"
                                    style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                            </svg>
                            <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="A098AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-minimize">
                                <path
                                    d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"
                                    style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                            </svg>
                        </a>
                    </li>

                    <li class="nav-item ps-3">
                        <div class="dropdown header-profile2">
                            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="header-info2 d-flex align-items-center">
                                    <div class="header-media">
                                        <img src="{{ asset('uploads/user') }}/{{ Auth::user()->image }}" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6>{{ Auth::user()->name }}</h6>
                                        <p>{{ Auth::user()->email }}</p>
                                    </div>

                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                <div class="card border-0 mb-0">
                                    <div class="card-header py-2">
                                        <div class="products">
                                            <img src="{{ asset('uploads/user') }}/{{ Auth::user()->image }}"
                                                class="avatar avatar-md" alt="">
                                            <div>
                                                <h6>{{ Auth::user()->name }}</h6>
                                                <span>Admin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 py-2">
                                        <a href="{{ route('admin.profilePage') }}" class="dropdown-item ai-icon ">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z"
                                                    stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z"
                                                    stroke="var(--primary)" stroke-width="1.42857"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <span class="ms-2">My Profile </span>
                                        </a>
                                        <a href="{{ route('admin.logout') }}" class="dropdown-item ai-icon">
                                            <svg class="profle-logout" xmlns="http://www.w3.org/2000/svg" width="18"
                                                height="18" viewBox="0 0 24 24" fill="none" stroke="#ff7979"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg>
                                            <span class="ms-2 text-danger">Logout </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
