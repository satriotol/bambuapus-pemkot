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
        <div class="col-md-4">
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
                        {{-- <div class="mb-3">
                            <label for="note" class="form-label">File Pendukung</label>
                            <textarea name="note" class="form-control">{{ isset($user_report) ? $user_report->note : @old('note') }}</textarea>
                        </div> --}}
                        <div class="text-end">
                            <input class="btn btn-success" type="submit" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
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
                                            <a href="" class="btn btn-sm btn-primary">Lihat Dokumen</a>
                                        @endif
                                        <form action="{{ route('user_report_status.destroy', $user_report_status->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                                Hapus
                                            </button>
                                        </form>
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
