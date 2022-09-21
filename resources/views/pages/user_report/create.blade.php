@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('user_report.index') }}">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Laporan</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Laporan</h4>
                @include('partials.errors')
                <form
                    action="@isset($user_report) {{ route('user_report.update', $user_report->id) }} @endisset @empty($user_report) {{ route('user_report.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($user_report)
                        @method('PUT')
                    @endisset
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Anak</label>
                        <input type="text" name="name" required class="form-control" id=""
                            value="{{ isset($user_report) ? $user_report->name : @old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK Anak</label>
                        <input type="text" name="nik" class="form-control" id=""
                            value="{{ isset($user_report) ? $user_report->nik : @old('nik') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">Jenis Kelamin</label>
                        <select name="gender" required class="form-control">
                            <option value="">Pilih Jenis Kelamin</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender }}" @if (@old('gender') === $gender) selected @endif
                                    @isset($user_report)
                                    @if ($gender === $user_report->gender)
                                        selected
                                    @endif
                                @endisset>
                                    {{ $gender }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="parent" class="form-label">Nama Orang Tua</label>
                                <input type="text" name="parent" required class="form-control" id=""
                                    value="{{ isset($user_report) ? $user_report->parent : @old('parent') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor HP</label>
                                <input type="text" name="phone" required class="form-control" id=""
                                    value="{{ isset($user_report) ? $user_report->phone : @old('phone') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="age" class="form-label">Umur Anak</label>
                                <input type="number" name="age" required class="form-control" id=""
                                    value="{{ isset($user_report) ? $user_report->age : @old('age') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="birthplace" class="form-label">Kota Kelahiran</label>
                                <input type="text" name="birthplace" required class="form-control" id=""
                                    value="{{ isset($user_report) ? $user_report->birthplace : @old('birthplace') }}">
                                <small>Contoh : KOTA SEMARANG, KABUPATEN SEMARANG</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="birth" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="birth" required class="form-control" id=""
                                    value="{{ isset($user_report) ? $user_report->birth : @old('birthplace') }}">
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Anak</label>
                        <textarea name="address" required class="form-control">{{ isset($user_report) ? $user_report->address : @old('address') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label">Catatan Laporan</label>
                        <textarea name="note" class="form-control">{{ isset($user_report) ? $user_report->note : @old('note') }}</textarea>
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
