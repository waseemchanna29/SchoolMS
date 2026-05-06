@extends('layouts.app')

@section('content')
<div class="px-4 container-fluid">
    <div class="d-flex align-items-center justify-content-between my-3">
        <h4 class="mb-0">Campuses</h4>
        <a href="{{ route('superadmin.campuses.create') }}" class="btn btn-primary">+ Add Campus</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">{{ session('error') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
    @endif

    <div class="row g-3">
        @forelse($campuses as $campus)
        <div class="col-md-4">
            <div class="shadow-sm h-100 card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        @if($campus->logo)
                            <img src="{{ asset('storage/'.$campus->logo) }}" width="48" height="48" class="me-3 rounded object-fit-cover">
                        @else
                            <div class="d-flex align-items-center justify-content-center bg-primary me-3 rounded text-white fw-bold"
                                 style="width:48px;height:48px;font-size:1.2rem">
                                {{ strtoupper(substr($campus->name, 0, 1)) }}
                            </div>
                        @endif
                        <div>
                            <h6 class="mb-0">{{ $campus->name }}</h6>
                            <small class="text-muted">{{ $campus->city ?? 'No city' }}</small>
                        </div>
                    </div>
                    <p class="mb-2 text-muted small">{{ $campus->email ?? 'No email' }}</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="badge bg-{{ $campus->status === 'active' ? 'success' : 'secondary' }}">
                            {{ ucfirst($campus->status) }}
                        </span>
                        <span class="text-muted small">{{ $campus->users_count }} user(s)</span>
                    </div>
                </div>
                <div class="d-flex gap-2 bg-transparent card-footer">
                    <a href="{{ route('superadmin.campuses.show', $campus) }}" class="flex-fill btn-outline-primary btn btn-sm">View</a>
                    <a href="{{ route('superadmin.campuses.edit', $campus) }}" class="flex-fill btn-outline-warning btn btn-sm">Edit</a>
                    <form action="{{ route('superadmin.campuses.destroy', $campus) }}" method="POST"
                          onsubmit="return confirm('Delete this campus?')">
                        @csrf @method('DELETE')
                        <button class="btn-outline-danger btn btn-sm">Del</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12"><div class="alert alert-info">No campuses yet. <a href="{{ route('superadmin.campuses.create') }}">Create the first one</a>.</div></div>
        @endforelse
    </div>

    <div class="mt-3">{{ $campuses->links() }}</div>
</div>
@endsection