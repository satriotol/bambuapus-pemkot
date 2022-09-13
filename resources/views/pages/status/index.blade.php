@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('status.index') }}">Status Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tabel Status Laporan</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Status Laporan</h6>
                    <div class="text-end mb-2">
                        <a class="btn btn-primary" href="{{ route('status.create') }}">
                            <i data-feather="plus"></i>
                            Tambah
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Warna</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($statuses as $status)
                                    <tr>
                                        <td>{{ $status->name }}</td>
                                        <td>{{ $status->color }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('status.edit', $status->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('status.destroy', $status->id) }}"
                                                    method="POST">
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
