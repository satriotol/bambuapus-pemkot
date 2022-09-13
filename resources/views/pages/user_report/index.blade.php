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
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Laporan</h6>
                    <div class="text-end mb-2">
                        <a class="btn btn-primary" href="{{ route('user_report.create') }}">
                            <i data-feather="plus"></i>
                            Create
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
                                        <td>{{ $user_report->user->name }}</td>
                                        <td>{{ $user_report->address }}</td>
                                        <td>{{ $user_report->age }}</td>
                                        <td>
                                            @foreach ($user_report->user_report_statuses as $user_report_status)
                                                @if ($loop->last)
                                                    {{ $user_report_status->status }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            
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
