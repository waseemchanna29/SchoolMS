@extends('layouts.app')

@section('content')
<div class="container" style="max-width:640px">
    <h4 class="my-3">Create User & Assign to Campus</h4>

    @if($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif

    <div class="shadow-sm card">
        <div class="card-body">
            <form action="{{ route('superadmin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="py-2 alert alert-info small">
                    Assign a user to a campus and give them a role. Super Admin accounts are managed separately.
                </div>

                <div class="mb-3">
                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                </div>
                <div class="mb-3 row g-3">
                    <div class="col">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3 row g-3">
                    <div class="col">
                        <label class="form-label">Campus <span class="text-danger">*</span></label>
                        <select name="campus_id" class="form-select" required>
                            <option value="">-- Select Campus --</option>
                            @foreach($campuses as $campus)
                                <option value="{{ $campus->id }}"
                                    {{ (old('campus_id', request('campus_id')) == $campus->id) ? 'selected' : '' }}>
                                    {{ $campus->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label class="form-label">Role <span class="text-danger">*</span></label>
                        <select name="role" class="form-select" required>
                            <option value="">-- Select Role --</option>
                            @foreach($roles as $role)
                                <option value="{{ $role }}" {{ old('role') == $role ? 'selected' : '' }}>
                                    {{ ucfirst($role) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label">Avatar (optional)</label>
                    <input type="file" name="avatar" class="form-control" accept="image/*">
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">Create & Assign</button>
                    <a href="{{ route('superadmin.users.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection