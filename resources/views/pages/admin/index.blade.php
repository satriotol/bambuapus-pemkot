@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tabel Admin</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Admin</h6>
                    <div class="text-end mb-2">
                        <a class="btn btn-primary" href="{{ route('admin.create') }}">
                            <i data-feather="plus"></i>
                            Tambah
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{ $admin->name }}</td>
                                        <td>
                                            {{ $admin->email }}
                                        </td>
                                        <td>
                                            @if (!empty($admin->getRoleNames()))
                                                @foreach ($admin->getRoleNames() as $v)
                                                    <label class="badge bg-success">{{ $v }}</label>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            {{ $admin->created_at }}
                                        </td>
                                        <td>
                                            <div class="btn-group" admin="group" aria-label="Basic example">
                                                <a href="{{ route('admin.edit', $admin->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('admin.reset_password', $admin->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-info"
                                                        onclick="return confirm('Are you sure?')">
                                                        Reset Password
                                                    </button>
                                                </form>
                                                <form action="{{ route('admin.destroy', $admin->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
