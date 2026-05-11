@extends('shared.base', ['title' => 'Admin Dashboard'])

@section('styles')
@endsection


@section('content')
    <div class="wrapper">
        @include('shared.partials.topbar', ['subtitle' => 'Apps', 'title' => 'Email']) @include('shared.partials.sidenav')

        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="container-fluid">
                @include('shared.partials.page-title', ['title' => 'Email', 'subtitle' => 'Apps'])
                <h4 class="my-3">Create Campus</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="shadow-sm card">
                    <div class="card-body">
                        <form action="{{ route('superadmin.campuses.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Campus Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                    required>
                            </div>
                            <div class="mb-3 row g-3">
                                <div class="col">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                </div>
                                <div class="col">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="mb-3 row g-3">
                                <div class="col">
                                    <label class="form-label">City</label>
                                    <input type="text" name="city" class="form-control" value="{{ old('city') }}">
                                </div>
                                <div class="col">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control" rows="2">{{ old('address') }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Campus Logo</label>
                                <input type="file" name="logo" class="form-control" accept="image/*">
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-success">Create Campus</button>
                                <a href="{{ route('superadmin.campuses.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
