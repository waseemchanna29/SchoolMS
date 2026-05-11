@extends('shared.base', ['title' => 'Edit Campus'])

@section('styles')
@endsection

@section('content')
    <div class="wrapper">
        @include('shared.partials.topbar', ['subtitle' => 'Campuses', 'title' => 'Edit Campus'])
        @include('shared.partials.sidenav')

        <div class="content-page">
            <div class="container-fluid">
                @include('shared.partials.page-title', ['title' => 'Edit Campus', 'subtitle' => 'Campuses'])

                <h4 class="my-3">Edit Campus: {{ $campus->name }}</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="shadow-sm card">
                    <div class="card-body">
                        <form action="{{ route('superadmin.campuses.update', $campus) }}"
                              method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- Campus Name --}}
                            <div class="mb-3">
                                <label class="form-label">Campus Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control"
                                       value="{{ old('name', $campus->name) }}" required>
                            </div>

                            {{-- Email & Phone --}}
                            <div class="mb-3 row g-3">
                                <div class="col">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control"
                                           value="{{ old('email', $campus->email) }}">
                                </div>
                                <div class="col">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control"
                                           value="{{ old('phone', $campus->phone) }}">
                                </div>
                            </div>

                            {{-- City & Status --}}
                            <div class="mb-3 row g-3">
                                <div class="col">
                                    <label class="form-label">City</label>
                                    <input type="text" name="city" class="form-control"
                                           value="{{ old('city', $campus->city) }}">
                                </div>
                                <div class="col">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="active"
                                            {{ old('status', $campus->status) === 'active' ? 'selected' : '' }}>
                                            Active
                                        </option>
                                        <option value="inactive"
                                            {{ old('status', $campus->status) === 'inactive' ? 'selected' : '' }}>
                                            Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>

                            {{-- Address --}}
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control"
                                          rows="2">{{ old('address', $campus->address) }}</textarea>
                            </div>

                            {{-- Logo --}}
                            <div class="mb-4">
                                <label class="form-label">Campus Logo</label>

                                {{-- Show current logo if exists --}}
                                @if ($campus->logo)
                                    <div class="d-flex align-items-center gap-3 mb-2">
                                        <img src="{{ asset('storage/' . $campus->logo) }}"
                                             width="64" height="64"
                                             class="border rounded object-fit-cover"
                                             alt="Current Logo">
                                        <div>
                                            <p class="mb-1 text-muted small">Current logo</p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                       name="remove_logo" id="remove_logo" value="1"
                                                       {{ old('remove_logo') ? 'checked' : '' }}>
                                                <label class="text-danger form-check-label small" for="remove_logo">
                                                    Remove current logo
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <input type="file" name="logo" class="form-control" accept="image/*">
                                <small class="text-muted">Leave empty to keep the current logo.</small>
                            </div>

                            {{-- Actions --}}
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-success">Save Changes</button>
                                <a href="{{ route('superadmin.campuses.show', $campus) }}"
                                   class="btn btn-secondary">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection