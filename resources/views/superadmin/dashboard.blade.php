@extends('shared.base', ['title' => 'Admin Dashboard'])

@section('styles')
@endsection

@section('content')
<div class="px-4 container-fluid">
    <h4 class="mt-3 mb-4">Super Admin Dashboard</h4>

    <div class="mb-4 row g-3">
        <div class="col-md-3">
            <div class="bg-primary shadow-sm border-0 text-white card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="opacity-75 mb-1">Total Campuses</p>
                            <h3 class="mb-0">{{ $stats['total_campuses'] }}</h3>
                        </div>
                        <span style="font-size:2rem">🏫</span>
                    </div>
                    <a href="{{ route('superadmin.campuses.index') }}" class="text-white-50 small">Manage campuses →</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-success shadow-sm border-0 text-white card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="opacity-75 mb-1">Active Campuses</p>
                            <h3 class="mb-0">{{ $stats['active_campuses'] }}</h3>
                        </div>
                        <span style="font-size:2rem">✅</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-warning shadow-sm border-0 text-white card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="opacity-75 mb-1">Total Users</p>
                            <h3 class="mb-0">{{ $stats['total_users'] }}</h3>
                        </div>
                        <span style="font-size:2rem">👥</span>
                    </div>
                    <a href="{{ route('superadmin.users.index') }}" class="text-white-50 small">Manage users →</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-info shadow-sm border-0 text-white card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="opacity-75 mb-1">Campus Admins</p>
                            <h3 class="mb-0">{{ $stats['total_admins'] }}</h3>
                        </div>
                        <span style="font-size:2rem">👤</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow-sm card">
        <div class="d-flex align-items-center justify-content-between card-header">
            <strong>Campuses Overview</strong>
            <a href="{{ route('superadmin.campuses.create') }}" class="btn btn-sm btn-primary">+ New Campus</a>
        </div>
        <div class="p-0 card-body">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr><th>Campus</th><th>City</th><th>Users</th><th>Status</th><th></th></tr>
                </thead>
                <tbody>
                    @foreach($campuses as $campus)
                    <tr>
                        <td>{{ $campus->name }}</td>
                        <td>{{ $campus->city ?? '—' }}</td>
                        <td>{{ $campus->users_count }}</td>
                        <td>
                            <span class="badge bg-{{ $campus->status === 'active' ? 'success' : 'secondary' }}">
                                {{ ucfirst($campus->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('superadmin.campuses.show', $campus) }}" class="btn-outline-primary btn btn-sm">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection