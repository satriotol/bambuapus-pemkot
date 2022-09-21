@extends('layout.master')

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Laporan {{ $user_report->name }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="text-end mb-2">
            <a class="btn btn-warning" href="{{ route('user_report.index') }}">Kembali</a>
        </div>
        <div class="col-md-5">
            @unlessrole('USER')
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Riwayat</h4>
                        @include('partials.errors')
                        <form action="{{ route('user_report_status.store', $user_report->id) }} " method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Status</label>
                                <select name="status_id" class="form-control" required>
                                    <option value="">Pilih Status</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="note" class="form-label">Catatan Laporan</label>
                                <textarea name="note" class="form-control">{{ @old('note') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="note" class="form-label">File Pendukung</label>
                                <input type="file" class="form-control" name="file">
                                <small>Maksimal ukuran 2mb</small>
                            </div>
                            <div class="text-end">
                                <input class="btn btn-success" type="submit" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            @endunlessrole
            <div class="card mt-2">
                <div class="card-body">
                    <h4 class="card-title">Detail</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-2 fw-bold">Detail Laporan</p>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nama</label>
                                <p>{{ $user_report->name }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Jenis Kelamin</label>
                                <p>{{ $user_report->gender }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">NIK</label>
                                <p>{{ $user_report->nik }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Tempat, Tanggal Lahir</label>
                                <p>{{ $user_report->birthplace }}, {{ $user_report->birth }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nama Orang Tua</label>
                                <p>{{ $user_report->parent }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nomor HP</label>
                                <p>{{ $user_report->phone }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Umur</label>
                                <p>{{ $user_report->age }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Umur</label>
                                <p>{{ $user_report->age }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Alamat</label>
                                <p>{{ $user_report->address }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Catatan</label>
                                <p>{{ $user_report->note ?? '-' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2 fw-bold">Detail Pelapor</p>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nama | Email</label>
                                <p>{{ $user_report->user->name }} | {{ $user_report->user->email }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">NIK</label>
                                <p>{{ $user_report->user->user_detail->nik ?? '-' }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nomor HP</label>
                                <p>{{ $user_report->user->user_detail->phone ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Riwayat</h6>
                    <div id="content">
                        <ul class="timeline">
                            @foreach ($user_report->user_report_statuses as $user_report_status)
                                <li class="event" data-date="{{ $user_report_status->created_at }}">
                                    <h3 class="title">{{ $user_report_status->status->name }}</h3>
                                    <p>{{ $user_report_status->note }}</p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @if ($user_report_status->file)
                                            <a href="{{ asset('uploads/' . $user_report_status->file) }}" target="_blank"
                                                class="btn btn-icon btn-primary">
                                                <i class="btn-icon-prepend" data-feather="file"></i>
                                            </a>
                                        @endif
                                        @unlessrole('USER')
                                            <form action="{{ route('user_report_status.destroy', $user_report_status->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-icon btn-danger"
                                                    onclick="return confirm('Are you sure?')">
                                                    <i class="btn-icon-prepend" data-feather="trash"></i>
                                                </button>
                                            </form>
                                        @endunlessrole
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
