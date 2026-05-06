@extends('shared.base', ['title' => 'Admin Dashboard'])

@section('styles')
@endsection


@section('content')
    <div class="wrapper">
        @include('shared.partials.topbar', ['subtitle' => 'Dashboard', 'title' => 'Admin Dashboard'])
        <!-- navigation -->
        @include('shared.partials.sidenav')
        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="bg-dark bg-opacity-10 p-2 text-dark">
                                <div class="justify-content-between border-dashed card-header">
                                    <h4 class="card-title">Welcome back, {{ $user->name }}!</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="justify-content-between border-dashed card-header">
                                        <h4 class="card-title">Account Details</h4>
                                    </div>
                                    <!-- end card-header-->
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="me-2">
                                                @if ($user->avatar)
                                                    <img src="{{ $user->avatar }}" alt="avatar"
                                                        style="width:48px; height:48px; border-radius:50%; object-fit:cover; flex-shrink:0;">
                                                @else
                                                    <div
                                                        style="width:48px; height:48px; border-radius:50%; background:var(--brand-light); color:var(--brand); display:flex; align-items:center; justify-content:center; font-weight:600; font-size:18px; flex-shrink:0;">
                                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div>
                                                <h5 class="d-flex align-items-center mb-1">
                                                    <a class="link-reset" href="#!">{{ $user->name }}</a>
                                                    <img alt="UK" class="ms-2 rounded-circle" height="16"
                                                        src="/images/flags/gb.svg" />
                                                </h5>
                                                <p class="mb-0 text-muted">Since {{ $user->created_at->format('Y') }}</p>
                                            </div>
                                            {{-- <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="text-muted btn btn-icon btn-ghost-light"
                                                        data-bs-toggle="dropdown" href="#">
                                                        <i class="ti ti-dots-vertical fs-xl"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="me-2 ti ti-share"></i> Share</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="me-2 ti ti-edit"></i> Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="me-2 ti ti-ban"></i> Block</a>
                                                        </li>
                                                        <li>
                                                            <a class="text-danger dropdown-item" href="#"><i
                                                                    class="me-2 ti ti-trash"></i> Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div>
                                            <div class="d-flex gap-3 mb-1">

                                                <div>
                                                    <span class="text-muted">Email</span>
                                                    <h5 class="my-2">{{ $user->email }}</h5>
                                                </div>
                                            </div>

                                            <div class="d-flex gap-3 mb-1">
                                                <div>
                                                    <span class="text-muted">Google Account</span>

                                                    <h5 class="my-2">
                                                        @if ($user->google_id)
                                                            <span class="text-bg-success badge badge-label">
                                                                <svg width="10" height="10" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="3" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                                Linked
                                                            </span>
                                                        @else
                                                            <span class="text-bg-secondary badge badge-label">Not
                                                                linked</span>
                                                        @endif
                                                    </h5>
                                                </div>
                                            </div>

                                            <div class="d-flex gap-3">
                                                <div>
                                                    <span class="text-muted">Google Calendar</span>
                                                    <h5 class="my-1 lh-lg">
                                                        
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card-->


                            </div>
                        </div>
                    </div>
                </div>
                <div class="align-items-center row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-1">
                    <div class="col">
                        <div class="mb-1 card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text-muted">Account Status</span>

                                </div>
                                <p class="mb-0 text-uppercase fs-xs fw-bold">
                                    Active

                                </p>
                                <p class="card-text">
                                    <small class="text-muted">Member since {{ $user->created_at->format('M Y') }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-1 card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text-muted">Google Calendar</span>

                                </div>
                              

                                </p>
                            </div>
                        </div>
                    </div>
                      <div class="col">
                        <div class="mb-1 card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <span class="text-muted">Signed Up</span>

                                </div>
                                <p class="mb-0 text-uppercase fs-xs fw-bold">
                                   {{ $user->created_at->diffForHumans() }}

                                </p>
                                <p class="card-text">
                                    <small class="text-muted">{{ $user->created_at->format('d M Y') }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
        </div>
    </div>
@endsection
