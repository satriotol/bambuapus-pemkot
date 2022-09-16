@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('link.index') }}">Link</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Link</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Link</h4>
                @include('partials.errors')
                <form
                    action="@isset($link) {{ route('link.update', $link->id) }} @endisset @empty($link) {{ route('link.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($link)
                        @method('PUT')
                    @endisset
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Url</label>
                        <input id="name" class="form-control" name="name" type="text" required
                            value="{{ isset($link) ? $link->name : @old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Url</label>
                        <input id="url" class="form-control" name="url" type="text" required
                            value="{{ isset($link) ? $link->url : @old('url') }}">
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
