<header class="app-topbar">
    <div class="container-fluid topbar-menu">
        <div class="d-flex align-items-center gap-2">
            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a class="logo-light" href="{{ url("/") }}">
                    <span class="logo-lg">
                        <img alt="logo" src="/images/logo.png" />
                    </span>
                    <span class="logo-sm">
                        <img alt="small logo" src="/images/logo-sm.png" />
                    </span>
                </a>
                <!-- Logo Dark -->
                <a class="logo-dark" href="{{ url("/") }}">
                    <span class="logo-lg">
                        <img alt="dark logo" src="/images/logo-black.png" />
                    </span>
                    <span class="logo-sm">
                        <img alt="small logo" src="/images/logo-sm.png" />
                    </span>
                </a>
            </div>
            <!-- Sidebar Menu Toggle Button -->
            <button class="sidenav-toggle-button btn btn-primary btn-icon">
                <i class="ti ti-menu-4"></i>
            </button>
            <!-- Horizontal Menu Toggle Button -->
            <button class="px-2 topnav-toggle-button" data-bs-target="#topnav-menu" data-bs-toggle="collapse">
                <i class="ti ti-menu-4"></i>
            </button>
            {{-- <div class="d-xl-flex app-search d-none" id="search-box-rounded">
                <input class="rounded-pill form-control topbar-search" name="search" placeholder="Quick Search..." type="search" />
                <i class="text-muted ti ti-search app-search-icon"></i>
            </div> --}}
            {{-- <div class="d-md-flex topbar-item d-none" id="megamenu-columns">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false" class="px-2 topbar-link btn fw-medium btn-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" type="button">
                        Mega Menu
                        <i class="ms-1 ti ti-chevron-down"></i>
                    </button>
                    <div class="p-0 dropdown-menu dropdown-menu-xxl">
                        <div class="h-100" data-simplebar="" style="max-height: 380px">
                            <div class="row g-0">
                                <!-- Dashboard & Analytics -->
                                <div class="col-md-4">
                                    <div class="p-2">
                                        <h5 class="mb-1 fw-semibold fs-sm dropdown-header">Dashboard &amp; Analytics</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    Sales Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    Marketing Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    Finance Overview
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    User Analytics
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    Traffic Insights
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Project Management -->
                                <div class="col-md-4">
                                    <div class="p-2">
                                        <h5 class="mb-1 fw-semibold fs-sm dropdown-header">Project Management</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="me-1 text-muted align-middle ti ti-minus"></i>
                                                    Kanban Workflow
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="me-1 text-muted align-middle ti ti-minus"></i>
                                                    Project Timeline
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="me-1 text-muted align-middle ti ti-minus"></i>
                                                    Task Management
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="me-1 text-muted align-middle ti ti-minus"></i>
                                                    Team Members
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="me-1 text-muted align-middle ti ti-minus"></i>
                                                    Assignments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- User Management -->
                                <div class="col-md-4">
                                    <div class="bg-light bg-opacity-50 p-2">
                                        <h5 class="mb-1 fw-semibold fs-sm dropdown-header">User Management</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    User Profiles
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    Access Control
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    Security Settings
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    User Groups
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti-chevron-right me-1 text-muted align-middle ti"></i>
                                                    Authentication
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end .h-100-->
                    </div>
                    <!-- .dropdown-menu-->
                </div>
                <!-- .dropdown-->
            </div> --}}
            {{-- <div class="d-md-flex topbar-item d-none" id="megamenu-apps">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false" class="px-2 topbar-link btn fw-medium btn-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" type="button">
                        Apps
                        <i class="ms-1 ti ti-chevron-down"></i>
                    </button>
                    <div class="p-0 dropdown-menu dropdown-menu-xxl">
                        <div class="h-100" data-simplebar="" style="max-height: 380px">
                            <div class="row g-0">
                                <div class="col-sm-8">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="p-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="me-2 avatar-md">
                                                            <span class="bg-light bg-opacity-50 border border-light rounded text-primary avatar-title">
                                                                <i class="ti ti-basket fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="mb-0 fs-base lh-base">eCommerce</h5>
                                                            <span class="text-muted fs-12">Products, orders &amp; etc.</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a class="my-2 dropdown-item" href="#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="me-2 avatar-md">
                                                            <span class="bg-light bg-opacity-50 border border-light rounded text-success avatar-title">
                                                                <i class="ti ti-message fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="mb-0 fs-base lh-base">Chat</h5>
                                                            <span class="text-muted fs-12">Team conversations</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a class="my-2 dropdown-item" href="#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="me-2 avatar-md">
                                                            <span class="bg-light bg-opacity-50 border border-light rounded text-danger avatar-title">
                                                                <i class="ti-list-check ti fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="mb-0 fs-base lh-base">Task</h5>
                                                            <span class="text-muted fs-12">Plan and track work</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a class="mt-2 dropdown-item" href="#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="me-2 avatar-md">
                                                            <span class="bg-light bg-opacity-50 border border-light rounded text-info avatar-title">
                                                                <i class="ti ti-mailbox fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="mb-0 fs-base lh-base">Email</h5>
                                                            <span class="text-muted fs-12">Messages and inbox</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="p-2">
                                                <a class="dropdown-item" href="#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="me-2 avatar-md">
                                                            <span class="bg-light bg-opacity-50 border border-light rounded text-secondary avatar-title">
                                                                <i class="ti ti-building fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="mb-0 fs-base lh-base">Companies</h5>
                                                            <span class="text-muted fs-12">Business profiles</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a class="my-2 dropdown-item" href="#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="me-2 avatar-md">
                                                            <span class="bg-light bg-opacity-50 border border-light rounded text-dark avatar-title">
                                                                <i class="ti ti-id fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="mb-0 fs-base lh-base">Contacts Diary</h5>
                                                            <span class="text-muted fs-12">People and connections</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a class="my-2 dropdown-item" href="#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="me-2 avatar-md">
                                                            <span class="bg-light bg-opacity-50 border border-light rounded text-warning avatar-title">
                                                                <i class="ti ti-calendar fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="mb-0 fs-base lh-base">Calendar</h5>
                                                            <span class="text-muted fs-12">Events and reminders</span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <a class="mt-2 dropdown-item" href="#!">
                                                    <span class="d-flex align-items-center">
                                                        <span class="me-2 avatar-md">
                                                            <span class="bg-light bg-opacity-50 border border-light rounded text-success avatar-title">
                                                                <i class="ti ti-lifebuoy fs-22"></i>
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <h5 class="mb-0 fs-base lh-base">Support</h5>
                                                            <span class="text-muted fs-12">Help and assistance</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row-->
                                    <div class="border-light border-top border-dashed text-center row g-0">
                                        <div class="col">
                                            <div class="p-3">
                                                <p class="mb-2 text-muted text-uppercase fw-medium fs-11 lh-1">-:   Support  :-</p>
                                                <h5 class="mb-0 fs-15">help@mydomain.com</h5>
                                            </div>
                                        </div>
                                        <!-- end col-->
                                        <div class="col">
                                            <div class="p-3">
                                                <p class="mb-2 text-muted text-uppercase fw-medium fs-11 lh-1">-:   Help:  :-</p>
                                                <h5 class="mb-0 fs-15">+(12) 3456 7890</h5>
                                            </div>
                                        </div>
                                        <!-- end col-->
                                    </div>
                                    <!-- end row-->
                                </div>
                                <!-- end col-->
                                <div class="col-sm-4">
                                    <div class="position-relative rounded-0 rounded-end h-100 overflow-hidden" style="background: url(/images/stock/small-8.jpg); background-size: cover">
                                        <div class="d-flex align-items-center justify-content-center bg-secondary bg-gradient bg-opacity-90 p-3 card-img-overlay">
                                            <div class="text-white text-center">
                                                <i class="ti ti-atom fs-36"></i>
                                                <p class="mb-3 text-white text-opacity-75 text-uppercase">Limited Offer</p>
                                                <h3 class="mb-2 text-white fw-semibold fs-20">Unlock Exclusive Savings</h3>
                                                <h4 class="mb-1 fw-medium fs-16">
                                                    <del class="text-white text-opacity-75">$49.00</del>
                                                    /
                                                    <span class="text-white fw-bold">$25 USD</span>
                                                </h4>
                                                <button class="mt-3 btn btn-danger btn-sm" type="button">
                                                    <i class="me-1 ti ti-shopping-cart"></i>
                                                    Grab Deal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end .bg-light-->
                                </div>
                                <!-- end col-->
                            </div>
                            <!-- end row-->
                        </div>
                        <!-- end .h-100-->
                    </div>
                    <!-- .dropdown-menu-->
                </div>
                <!-- .dropdown-->
            </div> --}}
        </div>
        <div class="d-flex align-items-center gap-2">
            {{-- <div class="topbar-item" id="theme-dropdown">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false" class="topbar-link" data-bs-toggle="dropdown" type="button">
                        <i class="ti ti-sun topbar-link-icon"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" data-thememode="dropdown">
                        <label class="dropdown-item">
                            <input class="form-check-input" name="data-bs-theme" style="display: none" type="radio" value="light" />
                            <i class="me-1 align-middle ti ti-sun fs-16"></i>
                            <span class="align-middle">Light</span>
                        </label>
                        <label class="dropdown-item">
                            <input class="form-check-input" name="data-bs-theme" style="display: none" type="radio" value="dark" />
                            <i class="me-1 align-middle ti ti-moon fs-16"></i>
                            <span class="align-middle">Dark</span>
                        </label>
                        <label class="dropdown-item">
                            <input class="form-check-input" name="data-bs-theme" style="display: none" type="radio" value="system" />
                            <i class="me-1 align-middle ti ti-sun-moon fs-16"></i>
                            <span class="align-middle">System</span>
                        </label>
                    </div>
                    <!-- end dropdown-menu-->
                </div>
                <!-- end dropdown-->
            </div> --}}
            {{-- <div class="topbar-item" id="apps-dropdown-grid">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false" class="topbar-link dropdown-toggle drop-arrow-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" type="button">
                        <i class="ti ti-apps topbar-link-icon"></i>
                    </button>
                    <div class="p-2 dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <div class="align-items-center row g-1">
                            <div class="col-4">
                                <a class="py-2 border border-dashed rounded text-center dropdown-item" href="javascript:void(0);">
                                    <span class="d-block mx-auto mb-1 avatar-sm">
                                        <span class="rounded-circle text-bg-light avatar-title">
                                            <img alt="Google Logo" height="18" src="/images/logos/google.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Google</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="py-2 border border-dashed rounded text-center dropdown-item" href="javascript:void(0);">
                                    <span class="d-block mx-auto mb-1 avatar-sm">
                                        <span class="rounded-circle text-bg-light avatar-title">
                                            <img alt="Figma Logo" height="18" src="/images/logos/figma.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Figma</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="py-2 border border-dashed rounded text-center dropdown-item" href="javascript:void(0);">
                                    <span class="d-block mx-auto mb-1 avatar-sm">
                                        <span class="rounded-circle text-bg-light avatar-title">
                                            <img alt="Slack Logo" height="18" src="/images/logos/slack.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Slack</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="py-2 border border-dashed rounded text-center dropdown-item" href="javascript:void(0);">
                                    <span class="d-block mx-auto mb-1 avatar-sm">
                                        <span class="rounded-circle text-bg-light avatar-title">
                                            <img alt="Dropbox Logo" height="18" src="/images/logos/dropbox.svg" />
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Dropbox</span>
                                </a>
                            </div>
                            <div class="text-center col-4">
                                <a class="rounded-circle btn btn-sm btn-icon btn-danger" href="javascript:void(0);">
                                    <i class="ti ti-circle-dashed-plus fs-18"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="py-2 border border-dashed rounded text-center dropdown-item" href="javascript:void(0);">
                                    <span class="d-block mx-auto mb-1 avatar-sm">
                                        <span class="bg-primary-subtle rounded-circle text-primary avatar-title">
                                            <i class="ti ti-calendar fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Calendar</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="py-2 border border-dashed rounded text-center dropdown-item" href="javascript:void(0);">
                                    <span class="d-block mx-auto mb-1 avatar-sm">
                                        <span class="bg-primary-subtle rounded-circle text-primary avatar-title">
                                            <i class="ti ti-message-circle fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Chat</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="py-2 border border-dashed rounded text-center dropdown-item" href="javascript:void(0);">
                                    <span class="d-block mx-auto mb-1 avatar-sm">
                                        <span class="bg-primary-subtle rounded-circle text-primary avatar-title">
                                            <i class="ti ti-folder fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Files</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="py-2 border border-dashed rounded text-center dropdown-item" href="javascript:void(0);">
                                    <span class="d-block mx-auto mb-1 avatar-sm">
                                        <span class="bg-primary-subtle rounded-circle text-primary avatar-title">
                                            <i class="ti ti-users fs-18"></i>
                                        </span>
                                    </span>
                                    <span class="align-middle fw-medium">Team</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End dropdown-menu -->
                </div>
                <!-- end dropdown-->
            </div> --}}
            <div class="topbar-item" id="notification-dropdown-people">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false" class="topbar-link dropdown-toggle drop-arrow-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" type="button">
                        <i class="animate-ring ti ti-bell topbar-link-icon"></i>
                        <span class="text-bg-danger badge badge-circle topbar-badge">5</span>
                    </button>
                    <div class="p-0 dropdown-menu dropdown-menu-end dropdown-menu-lg">
                        <div class="px-3 py-2 border-bottom">
                            <div class="align-items-center row">
                                <div class="col">
                                    <h6 class="m-0 fs-md fw-semibold">Notifications</h6>
                                </div>
                                <div class="text-end col">
                                    <a class="py-1 badge badge-soft-success badge-label" href="#!">07 Notifications</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar="" style="max-height: 300px">
                            <!-- Notification 1 -->
                            <div class="py-2 text-wrap dropdown-item notification-item" id="message-1">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="position-relative flex-shrink-0">
                                        <img alt="User Avatar" class="rounded-circle avatar-md" src="/images/users/user-4.jpg" />
                                        <span class="position-absolute bg-success rounded-pill notification-badge">
                                            <i class="align-middle ti ti-bell"></i>
                                            <span class="visually-hidden">unread notification</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="text-body fw-medium">Emily Johnson</span>
                                        commented on a task in
                                        <span class="text-body fw-medium">Design Sprint</span>
                                        <br />
                                        <span class="fs-xs">12 minutes ago</span>
                                    </span>
                                    <button class="position-absolute flex-shrink-0 me-2 p-0 text-muted btn btn-link end-0 d-none noti-close-btn" data-dismissible="#message-1" type="button">
                                        <i class="ti-square-rounded-x ti fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 2 -->
                            <div class="py-2 text-wrap dropdown-item notification-item" id="message-2">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="position-relative flex-shrink-0">
                                        <img alt="User Avatar" class="rounded-circle avatar-md" src="/images/users/user-5.jpg" />
                                        <span class="position-absolute bg-info rounded-pill notification-badge">
                                            <i class="align-middle ti ti-cloud-upload"></i>
                                            <span class="visually-hidden">upload notification</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="text-body fw-medium">Michael Lee</span>
                                        uploaded files to
                                        <span class="text-body fw-medium">Marketing </span>
                                        <br />
                                        <span class="fs-xs">25 minutes ago</span>
                                    </span>
                                    <button class="position-absolute flex-shrink-0 me-2 p-0 text-muted btn btn-link end-0 d-none noti-close-btn" data-dismissible="#message-2" type="button">
                                        <i class="ti-square-rounded-x ti fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 3 - Server CPU Alert -->
                            <div class="py-2 text-wrap dropdown-item notification-item" id="message-6">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="position-relative flex-shrink-0">
                                        <span class="d-flex align-items-center justify-content-center bg-light rounded-circle avatar-md">
                                            <i class="ti ti-database fs-4"></i>
                                        </span>
                                        <span class="position-absolute bg-danger rounded-pill notification-badge">
                                            <i class="align-middle ti ti-alert-circle"></i>
                                            <span class="visually-hidden">server alert</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="text-body fw-medium">Server #3</span>
                                        CPU usage exceeded 90%
                                        <br />
                                        <span class="fs-xs">Just now</span>
                                    </span>
                                    <button class="position-absolute flex-shrink-0 me-2 p-0 text-muted btn btn-link end-0 d-none noti-close-btn" data-dismissible="#message-6" type="button">
                                        <i class="ti-square-rounded-x ti fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 4 -->
                            <div class="py-2 text-wrap dropdown-item notification-item" id="message-3">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="position-relative flex-shrink-0">
                                        <img alt="User Avatar" class="rounded-circle avatar-md" src="/images/users/user-6.jpg" />
                                        <span class="position-absolute bg-warning rounded-pill notification-badge">
                                            <i class="align-middle ti ti-alert-triangle"></i>
                                            <span class="visually-hidden">alert</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="text-body fw-medium">Sophia Ray</span>
                                        flagged an issue in
                                        <span class="text-body fw-medium">Bug Tracker</span>
                                        <br />
                                        <span class="fs-xs">40 minutes ago</span>
                                    </span>
                                    <button class="position-absolute flex-shrink-0 me-2 p-0 text-muted btn btn-link end-0 d-none noti-close-btn" data-dismissible="#message-3" type="button">
                                        <i class="ti-square-rounded-x ti fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 5 -->
                            <div class="py-2 text-wrap dropdown-item notification-item" id="message-4">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="position-relative flex-shrink-0">
                                        <img alt="User Avatar" class="rounded-circle avatar-md" src="/images/users/user-7.jpg" />
                                        <span class="position-absolute bg-primary rounded-pill notification-badge">
                                            <i class="align-middle ti ti-calendar-event"></i>
                                            <span class="visually-hidden">event notification</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="text-body fw-medium">David Kim</span>
                                        scheduled a meeting for
                                        <span class="text-body fw-medium">UX Review</span>
                                        <br />
                                        <span class="fs-xs">1 hour ago</span>
                                    </span>
                                    <button class="position-absolute flex-shrink-0 me-2 p-0 text-muted btn btn-link end-0 d-none noti-close-btn" data-dismissible="#message-4" type="button">
                                        <i class="ti-square-rounded-x ti fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 6 -->
                            <div class="py-2 text-wrap dropdown-item notification-item" id="message-5">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="position-relative flex-shrink-0">
                                        <img alt="User Avatar" class="rounded-circle avatar-md" src="/images/users/user-8.jpg" />
                                        <span class="position-absolute bg-secondary rounded-pill notification-badge">
                                            <i class="align-middle ti ti-edit"></i>
                                            <span class="visually-hidden">edit</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="text-body fw-medium">Isabella White</span>
                                        updated the document in
                                        <span class="text-body fw-medium">Product Specs</span>
                                        <br />
                                        <span class="fs-xs">2 hours ago</span>
                                    </span>
                                    <button class="position-absolute flex-shrink-0 me-2 p-0 text-muted btn btn-link end-0 d-none noti-close-btn" data-dismissible="#message-5" type="button">
                                        <i class="ti-square-rounded-x ti fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- Notification 7 - Deployment Success -->
                            <div class="py-2 text-wrap dropdown-item notification-item" id="message-7">
                                <span class="d-flex align-items-center gap-3">
                                    <span class="position-relative flex-shrink-0">
                                        <span class="d-flex align-items-center justify-content-center bg-light rounded-circle avatar-md">
                                            <i class="ti ti-rocket fs-4"></i>
                                        </span>
                                        <span class="position-absolute bg-success rounded-pill notification-badge">
                                            <i class="align-middle ti ti-check"></i>
                                            <span class="visually-hidden">deployment</span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1 text-muted">
                                        <span class="text-body fw-medium">Production Server</span>
                                        deployment completed successfully
                                        <br />
                                        <span class="fs-xs">30 minutes ago</span>
                                    </span>
                                    <button class="position-absolute flex-shrink-0 me-2 p-0 text-muted btn btn-link end-0 d-none noti-close-btn" data-dismissible="#message-7" type="button">
                                        <i class="ti-square-rounded-x ti fs-xxl"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- All-->
                        <a class="py-2 border-light border-top text-reset text-center text-decoration-underline dropdown-item link-offset-2 fw-bold notify-item" href="javascript:void(0);">Read All Messages</a>
                    </div>
                    <!-- End dropdown-menu -->
                </div>
                <!-- end dropdown-->
            </div>
            <div class="d-sm-flex topbar-item d-none" id="fullscreen-toggler">
                <button class="topbar-link" data-toggle="fullscreen" type="button">
                    <i class="ti ti-maximize topbar-link-icon"></i>
                    <i class="ti ti-minimize topbar-link-icon d-none"></i>
                </button>
            </div>
            {{-- <div class="d-sm-flex topbar-item d-none" id="monochrome-toggler">
                <button class="topbar-link" data-toggle="monochrome" id="monochrome-mode" type="button">
                    <i class="ti ti-palette topbar-link-icon"></i>
                </button>
            </div> --}}
            {{-- <div class="d-sm-flex topbar-item d-none">
                <button class="topbar-link btn-theme-setting" data-bs-target="#theme-settings-offcanvas" data-bs-toggle="offcanvas" type="button">
                    <i class="ti ti-settings topbar-link-icon"></i>
                </button>
            </div> --}}
            {{-- <div class="topbar-item" id="language-selector-rounded">
                <div class="dropdown">
                    <button aria-expanded="false" aria-haspopup="false" class="topbar-link fw-bold" data-bs-toggle="dropdown" type="button">
                        <img alt="user-image" class="me-2 rounded-circle" height="18" id="selected-language-image" src="/images/flags/us.svg" />
                        <span id="selected-language-code">EN</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" data-translator-lang="en" href="javascript:void(0);" title="English">
                            <img alt="English" class="me-1 rounded-circle" data-translator-image="" height="18" src="/images/flags/us.svg" />
                            <span class="align-middle">English</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="de" href="javascript:void(0);" title="German">
                            <img alt="German" class="me-1 rounded-circle" data-translator-image="" height="18" src="/images/flags/de.svg" />
                            <span class="align-middle">Deutsch</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="it" href="javascript:void(0);" title="Italian">
                            <img alt="Italian" class="me-1 rounded-circle" data-translator-image="" height="18" src="/images/flags/it.svg" />
                            <span class="align-middle">Italiano</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="es" href="javascript:void(0);" title="Spanish">
                            <img alt="Spanish" class="me-1 rounded-circle" data-translator-image="" height="18" src="/images/flags/es.svg" />
                            <span class="align-middle">Español</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="ru" href="javascript:void(0);" title="Russian">
                            <img alt="Russian" class="me-1 rounded-circle" data-translator-image="" height="18" src="/images/flags/ru.svg" />
                            <span class="align-middle">Русский</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="hi" href="javascript:void(0);" title="Hindi">
                            <img alt="Hindi" class="me-1 rounded-circle" data-translator-image="" height="18" src="/images/flags/in.svg" />
                            <span class="align-middle">हिन्दी</span>
                        </a>
                        <a class="dropdown-item" data-translator-lang="ar" href="javascript:void(0);" title="Arabic">
                            <img alt="Arabic" class="me-1 rounded-circle" data-translator-image="" height="18" src="/images/flags/sa.svg" />
                            <span class="align-middle">عربي</span>
                        </a>
                    </div>
                    <!-- end dropdown-menu-->
                </div>
                <!-- end dropdown-->
            </div> --}}
            <div class="topbar-item nav-user" id="user-dropdown-detailed">
                <div class="dropdown">
                    <a aria-expanded="false" aria-haspopup="false" class="px-2 topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" href="#!">
                        <img alt="user-image" class="d-flex me-lg-2 rounded-circle" src="{{ auth()->user()->avatar ?? '/images/users/user-1.jpg' }}" width="32" />
                        <div class="d-lg-flex align-items-center gap-1 d-none">
                            <span>
                                <h5 class="my-0 lh-1 pro-username">{{auth()->user()->name}}</h5>
                                <span class="fs-xs lh-1">{{auth()->user()->is_super_admin? 'Super Admin':""}}</span>
                            </span>
                            <i class="align-middle ti ti-chevron-down"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- Header -->
                        <div class="dropdown-header noti-title">
                            <h6 class="m-0 text-overflow">Welcome back 👋!</h6>
                        </div>
                        <!-- My Profile -->
                        <a class="dropdown-item" href="#!">
                            <i class="me-1 align-middle ti ti-user-circle fs-lg"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                        <!-- Notifications -->
                        {{-- <a class="dropdown-item" href="javascript:void(0);">
                            <i class="me-1 align-middle ti ti-bell-ringing fs-lg"></i>
                            <span class="align-middle">Notifications</span>
                        </a> --}}
                        <!-- Settings -->
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="me-1 align-middle ti ti-settings-2 fs-lg"></i>
                            <span class="align-middle">Account Settings</span>
                        </a>
                        <!-- Support -->
                        {{-- <a class="dropdown-item" href="javascript:void(0);">
                            <i class="me-1 align-middle ti ti-headset fs-lg"></i>
                            <span class="align-middle">Support Center</span>
                        </a> --}}
                        <!-- Divider -->
                        <div class="dropdown-divider"></div>
                        <!-- Lock -->
                        {{-- <a class="dropdown-item" href="{{ url("/auth/lock-screen") }}">
                            <i class="me-1 align-middle ti ti-lock fs-lg"></i>
                            <span class="align-middle">Lock Screen</span>
                        </a> --}}
                        <!-- Logout -->
                        <a class="dropdown-item fw-semibold" href="{{ route('logout') }}">
                            <i class="me-1 align-middle ti ti-logout fs-lg"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Topbar End -->
