@extends('layouts.app')

@section('content')
<div class="px-4 container-fluid">
    <div class="d-flex align-items-center justify-content-between my-3">
        <h4 class="mb-0">{{ $campus->name }}</h4>
        <div class="d-flex gap-2">
            <a href="{{ route('superadmin.users.create') }}?campus_id={{ $campus->id }}" class="btn btn-primary btn-sm">+ Add User</a>
            <a href="{{ route('superadmin.campuses.edit', $campus) }}" class="btn btn-warning btn-sm">Edit Campus</a>
        </div>
    </div>

    <!-- Stats -->
    <div class="mb-4 row g-3">
        @foreach([['Admins','admins','primary'],['Teachers','teachers','success'],['Accountants','accountants','warning'],['Total Users','total_users','info']] as [$label,$key,$color])
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

    <!-- Users Table -->
    <div class="shadow-sm card">
        <div class="card-header"><strong>Users in this campus</strong></div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr><th>Name</th><th>Email</th><th>Role</th><th>Status</th><th>Actions</th></tr>
                </thead>
                <tbody>
                    @forelse($campus->users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="bg-primary badge">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            <span class="badge bg-{{ $user->status === 'active' ? 'success' : 'secondary' }}">
                                {{ ucfirst($user->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('superadmin.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="py-3 text-muted text-center">No users in this campus yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection