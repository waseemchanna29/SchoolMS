@extends('shared.base', ['title' => 'Users'])

@section('styles')
@endsection

@section('content')
    <div class="wrapper">
        @include('shared.partials.topbar', ['subtitle' => 'Campuses', 'title' => 'Users'])
        @include('shared.partials.sidenav')
        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="container-fluid">
                @include('shared.partials.page-title', ['title' => 'Users', 'subtitle' => 'Apps'])
                <div class="d-flex align-items-center justify-content-between my-3">
                    <h4 class="mb-0">Users</h4>
                    <a href="{{ route('superadmin.users.create') }}" class="btn btn-primary">+ Add User</a>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}<button
                            type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show">{{ session('error') }}<button type="button"
                            class="btn-close" data-bs-dismiss="alert"></button></div>
                @endif

                {{-- Users table --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card" data-table="" data-table-rows-per-page="8">
                            <div class="justify-content-between border-light card-header">
                                <h4 class="card-title">
                                    Recent Transactions
                                    <span class="text-muted fw-normal fs-14">(95.6k+ Transactions)</span>
                                </h4>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="me-2 fw-semibold">Filter By:</span>
                                    <!-- Transaction Status Filter -->
                                    <div class="app-search">
                                        <select class="my-1 my-md-0 form-select form-control"
                                            data-table-filter="transaction-status">
                                            <option value="All">All Status</option>
                                            <option value="Success">Success</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Failed">Failed</option>
                                            <option value="Processing">Processing</option>
                                            <option value="Onhold">On Hold</option>
                                        </select>
                                        <i class="ti-filter-2 text-muted ti app-search-icon"></i>
                                    </div>
                                    <!-- Search Transactions -->
                                    <div class="app-search">
                                        <input class="form-control" data-table-search=""
                                            placeholder="Search transactions..." type="search" />
                                        <i class="text-muted ti ti-search app-search-icon"></i>
                                    </div>
                                    <!-- Records Per Page -->
                                    <div>
                                        <select class="my-1 my-md-0 form-select form-control"
                                            data-table-set-rows-per-page="">
                                            <option value="5">5</option>
                                            <option selected="" value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-centered table-custom table-hover table-nowrap table-select mb-0 w-100">
                                <thead class="bg-light bg-opacity-25 align-middle thead-sm">
                                     <tr class="text-uppercase fs-xxs">
                                        <th class="text-muted" data-table-sort="">Name / Business</th>
                                        <th class="text-muted" data-table-sort="">Role</th>
                                        <th class="text-muted" data-table-sort="">Auth</th>
                                        <th class="text-muted" data-table-sort="">Joined</th>
                                        <th class="text-muted" data-table-sort="">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>
                                                <div style="display:flex;align-items:center;gap:10px">
                                                    @if ($user->avatar)
                                                        <img src="{{ $user->avatar }}"
                                                            style="width:32px;height:32px;border-radius:50%;object-fit:cover">
                                                    @else
                                                        <div
                                                            style="width:32px;height:32px;border-radius:50%;background:var(--brand-light);color:var(--brand);display:flex;align-items:center;justify-content:center;font-weight:600;font-size:13px">
                                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                                        </div>
                                                    @endif
                                                    <div>
                                                        <div style="font-weight:500">{{ $user->name }}</div>
                                                        <div class="text-muted text-sm">{{ $user->email }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                               {{ $user->roleLabel}}
                                            </td>
                                            <td class="text-muted text-sm">
                                                {{ $user->google_id ? 'Google' : 'Password' }}</td>
                                            <td class="text-muted text-sm">{{ $user->created_at->format('M d, Y') }}
                                            </td>
                                            <td style="width: 30px">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-default btn-icon" data-bs-toggle="dropdown" href="#">
                                                        <i class="ti ti-dots-vertical fs-lg"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">View User</a>
                                                        <a class="dropdown-item" href="#">Edit User</a>
                                                        {{-- <a class="dropdown-item" href="#">Mark as Completed</a> --}}
                                                           @if ($user->id !== auth()->id())
                                                        <form method="POST"
                                                            action="{{ route('superadmin.users.destroy', $user) }}"
                                                            onsubmit="return confirm('Delete {{ $user->name }}?')">
                                                            @csrf @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    @else
                                                        <span class="text-muted text-sm" style="padding:5px 0">You</span>
                                                    @endif
                                                    </div>
                                                </div>
                                            </td>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-muted" style="text-align:center;padding:32px">No
                                                users
                                                yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            </div>

                        </div>
                    </div>
                    <div class="pagination-wrap">
                        <div class="text-muted text-sm">{{ $users->total() }} users</div>
                        {{ $users->links('pagination') }}
                    </div>
                </div>


            </div>
        </div>
    @endsection
