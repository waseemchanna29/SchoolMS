<div class="sidenav-menu">
    <!-- Brand Logo -->
    <a class="logo" href="{{ url('/') }}">
        <span class="logo logo-light">
            <span class="logo-lg"><img alt="logo" src="/images/logo.png" /></span>
            <span class="logo-sm"><img alt="small logo" src="/images/logo-sm.png" /></span>
        </span>
        <span class="logo logo-dark">
            <span class="logo-lg"><img alt="dark logo" src="/images/logo-black.png" /></span>
            <span class="logo-sm"><img alt="small logo" src="/images/logo-sm.png" /></span>
        </span>
    </a>

    <button class="button-on-hover">
        <span class="btn-on-hover-icon"></span>
    </button>
    <button class="button-close-offcanvas">
        <i class="align-middle ti ti-menu-4"></i>
    </button>

    <div class="scrollbar" data-simplebar="">

        <!-- User Profile Section -->
        <div class="sidenav-user" id="user-profile-settings" style="background: url(/images/user-bg-pattern.svg)">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <a class="link-reset" href="#!">
                        <img alt="user-image" class="mb-2 rounded-circle avatar-md"
                             src="{{ auth()->user()->avatar_url }}" />
                        <span class="sidenav-user-name fw-bold">{{ auth()->user()->name }}</span>
                        <span class="fs-12 fw-semibold">{{ auth()->user()->roles->first()?->name; }}</span>
                    </a>
                </div>
                <div>
                    <a aria-expanded="false" aria-haspopup="false"
                       class="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon"
                       data-bs-offset="0,12" data-bs-toggle="dropdown" href="#!">
                        <i class="ms-1 align-middle ti ti-settings fs-24"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-header noti-title">
                            <h6 class="m-0 text-overflow">Welcome back!</h6>
                        </div>
                        <a class="dropdown-item" href="#!">
                            <i class="me-1 align-middle ti ti-user-circle fs-lg"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-transparent border-0 w-100 text-danger text-start dropdown-item fw-semibold">
                                <i class="me-1 align-middle ti ti-logout fs-lg"></i>
                                <span class="align-middle">Log Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidenav Menu -->
        <div id="sidenav-menu">
            <ul class="side-nav">

                {{-- ════════════════════════════════
                     SUPER ADMIN MENU
                ════════════════════════════════ --}}
                @if(auth()->user()->isSuperAdmin())

                    <li class="mt-2 side-nav-title">Overview</li>

                    {{-- Dashboard --}}
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{ route('dashboard') }}">
                            <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="mt-2 side-nav-title">Campus Management</li>

                    {{-- Campuses --}}
                    <li class="side-nav-item">
                        <a aria-controls="campuses-menu" aria-expanded="false"
                           class="side-nav-link" data-bs-toggle="collapse" href="#campuses-menu">
                            <span class="menu-icon"><i class="ti ti-building-estate"></i></span>
                            <span class="menu-text">Campuses</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="campuses-menu">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="{{ route('superadmin.campuses.index') }}">
                                        <span class="menu-text">All Campuses</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="{{ route('superadmin.campuses.create') }}">
                                        <span class="menu-text">Add Campus</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="mt-2 side-nav-title">User Management</li>

                    {{-- Users --}}
                    <li class="side-nav-item">
                        <a aria-controls="users-menu" aria-expanded="false"
                           class="side-nav-link" data-bs-toggle="collapse" href="#users-menu">
                            <span class="menu-icon"><i class="ti ti-users"></i></span>
                            <span class="menu-text">Users</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="users-menu">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="{{ route('superadmin.users.index') }}">
                                        <span class="menu-text">All Users</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-link" href="{{ route('superadmin.users.create') }}">
                                        <span class="menu-text">Add User</span>
                                    </a>
                                </li>
                                {{-- Filter shortcuts --}}
                                <li class="side-nav-item">
                                    <a class="side-nav-link"
                                       href="{{ route('superadmin.users.index', ['role' => 'admin']) }}">
                                        <span class="menu-text">Admins</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-link"
                                       href="{{ route('superadmin.users.index', ['role' => 'teacher']) }}">
                                        <span class="menu-text">Teachers</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-link"
                                       href="{{ route('superadmin.users.index', ['role' => 'accounts']) }}">
                                        <span class="menu-text">Accounts Staff</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- Coming Soon: Phase 2+ --}}
                    <li class="mt-2 side-nav-title">Coming in Phase 2</li>

                    <li class="side-nav-item">
                        <a class="side-nav-link disabled" href="#">
                            <span class="menu-icon"><i class="ti ti-school"></i></span>
                            <span class="menu-text">Students</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link disabled" href="#">
                            <span class="menu-icon"><i class="ti ti-layout-rows"></i></span>
                            <span class="menu-text">Classes & Sections</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link disabled" href="#">
                            <span class="menu-icon"><i class="ti ti-wallet"></i></span>
                            <span class="menu-text">Fee Management</span>
                        </a>
                    </li>

                {{-- ════════════════════════════════
                     CAMPUS ADMIN MENU
                ════════════════════════════════ --}}
                @elseif(auth()->user()->isAdmin())

                    <li class="mt-2 side-nav-title">
                        {{ auth()->user()->campus->name ?? 'Campus' }}
                    </li>

                    {{-- Dashboard --}}
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{ route('admin.dashboard') }}">
                            <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="mt-2 side-nav-title">Coming in Phase 2</li>

                    <li class="side-nav-item">
                        <a class="side-nav-link disabled" href="#">
                            <span class="menu-icon"><i class="ti ti-school"></i></span>
                            <span class="menu-text">Students</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link disabled" href="#">
                            <span class="menu-icon"><i class="ti ti-layout-rows"></i></span>
                            <span class="menu-text">Classes & Sections</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link disabled" href="#">
                            <span class="menu-icon"><i class="ti ti-wallet"></i></span>
                            <span class="menu-text">Fee Management</span>
                        </a>
                    </li>

                @endif

            </ul>
        </div>
        <!-- End Sidenav Menu -->

    </div>
</div>
<!-- Sidenav Menu End -->