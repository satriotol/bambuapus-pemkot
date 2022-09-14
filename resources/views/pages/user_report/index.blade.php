@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('user_report.index') }}">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tabel Laporan</li>
        </ol>
    </nav>
    <div class="row">
        <div class="row">
            <div class="col-12 col-md-6 stretch-card">
                <div class="row flex-grow-1">
                    @unlessrole('USER')
                        @foreach ($statuses as $status)
                            <div class="col-6 col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">{{ $status->name }}</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">{{ $status->user_reports->count() }}</h3>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endunlessrole
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Pencarian</h6>
                        <form action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Status</label>
                                <select name="status_search" class="form-control">
                                    <option value="">Pilih Status</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}"
                                            @if (old('status_search') == $status->id) selected @endif>{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tanggal</label>
                                <input type="date" name="date_search" class="form-control"
                                    value="{{ old('date_search') }}" id="">
                            </div>
                            <div class="text-end">
                                <input class="btn btn-success" type="submit" value="Cari">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card mt-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Laporan</h6>
                    <div class="text-end mb-2">
                        <a class="btn btn-primary" href="{{ route('user_report.create') }}">
                            <i data-feather="plus"></i>
                            Tambah
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Name</th>
                                    <th>Alamat</th>
                                    <th>Umur</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user_reports as $user_report)
                                    <tr>
                                        <td>{{ $user_report->created_at }}</td>
                                        <td>{{ $user_report->name }}</td>
                                        <td>{{ $user_report->address }}</td>
                                        <td>{{ $user_report->age }}</td>
                                        <td>
                                            <span class="badge bg-{{ $user_report->status->color }}">
                                                {{ $user_report->status->name }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('user_report.show', $user_report->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    Detail
                                                </a>
                                                @if ($user_report->status->name == 'PENDING')
                                                    <a href="{{ route('user_report.edit', $user_report->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                    <form action="{{ route('user_report.destroy', $user_report->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure?')">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $user_reports->links() }}
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
