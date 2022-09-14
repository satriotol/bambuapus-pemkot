@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('status.index') }}">Status Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Status Laporan</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Status Laporan</h4>
                @include('partials.errors')
                <form
                    action="@isset($status) {{ route('status.update', $status->id) }} @endisset @empty($status) {{ route('status.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($status)
                        @method('PUT')
                    @endisset
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" required class="form-control" id=""
                            value="{{ isset($status) ? $status->name : @old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Warna</label>
                        <input type="text" name="color" required class="form-control" id=""
                            value="{{ isset($status) ? $status->color : @old('color') }}">
                    </div>
                    <div class="text-end">
                        <a class="btn btn-warning" href="{{ url()->previous() }}">Kembali</a>
                        <input class="btn btn-success" type="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
