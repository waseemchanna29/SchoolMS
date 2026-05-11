@extends('shared.base', ['title' => 'Admin Dashboard'])

@section('styles')
@endsection

@section('content')
    <div class="wrapper">
        @include('shared.partials.topbar', ['subtitle' => 'Dashboard', 'title' => 'Admin Dashboard'])
        @include('shared.partials.sidenav')

        <div class="content-page">
            <div class="container-fluid">
                @include('shared.partials.page-title', ['title' => 'Campus Detail', 'subtitle' => 'Campuses'])

                <div class="d-flex align-items-center justify-content-between my-3">
                    <h4 class="mb-0">{{ $campus->name }}</h4>
                    <div class="d-flex gap-2">
                        <a href="{{ route('superadmin.users.create') }}?campus_id={{ $campus->id }}"
                            class="btn btn-primary btn-sm">+ Add User</a>
                        <a href="{{ route('superadmin.campuses.edit', $campus) }}" class="btn btn-warning btn-sm">Edit
                            Campus</a>
                    </div>
                </div>

                {{-- ─── Campus Info Card ─────────────────────────────── --}}
                <div class="shadow-sm mb-4 card">
                    <div class="card-header"><strong>Campus Information</strong></div>
                    <div class="card-body">
                        <div class="align-items-center row g-3">

                            {{-- Logo --}}
                            <div class="col-auto">
                                @if($campus->logo)
                                    <img src="{{ asset('storage/' . $campus->logo) }}"
                                         width="80" height="80"
                                         class="border rounded object-fit-cover">
                                @else
                                    <div class="d-flex align-items-center justify-content-center bg-light border rounded"
                                         style="width:80px;height:80px;">
                                        <i class="text-muted ti ti-building-estate fs-2"></i>
                                    </div>
                                @endif
                            </div>

                            {{-- Details --}}
                            <div class="col">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <small class="d-block text-muted">Campus Name</small>
                                        <span class="fw-semibold">{{ $campus->name }}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <small class="d-block text-muted">Campus Code</small>
                                        <span class="fw-semibold">
                                            <code>{{ $campus->code ?? '—' }}</code>
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <small class="d-block text-muted">Status</small>
                                        <span class="badge bg-{{ $campus->is_active ? 'success' : 'secondary' }}">
                                            {{ $campus->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <small class="d-block text-muted">Email</small>
                                        <span>{{ $campus->email ?? '—' }}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <small class="d-block text-muted">Phone</small>
                                        <span>{{ $campus->phone ?? '—' }}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <small class="d-block text-muted">City</small>
                                        <span>{{ $campus->city ?? '—' }}</span>
                                    </div>
                                    <div class="col-md-8">
                                        <small class="d-block text-muted">Address</small>
                                        <span>{{ $campus->address ?? '—' }}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <small class="d-block text-muted">Created</small>
                                        <span>{{ $campus->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- ─── Stats ────────────────────────────────────────── --}}
                <div class="mb-4 row g-3">
                    @foreach ([['Admins', 'admins', 'primary'], ['Teachers', 'teachers', 'success'], ['Accountants', 'accountants', 'warning'], ['Total Users', 'total_users', 'info']] as [$label, $key, $color])
                        <div class="col-md-3">
                            <div class="shadow-sm border-0 card">
                                <div class="text-center card-body">
                                    <h3 class="text-{{ $color }}">{{ $stats[$key] }}</h3>
                                    <p class="mb-0 text-muted">{{ $label }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- ─── Users Table ──────────────────────────────────── --}}
                <div class="shadow-sm card">
                    <div class="card-header"><strong>Users in this campus</strong></div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($campus->users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @foreach ($user->roles as $role)
                                                <span class="bg-primary badge">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $user->is_active ? 'success' : 'secondary' }}">
                                                {{ $user->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('superadmin.users.edit', $user) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-3 text-muted text-center">No users in this campus
                                            yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection