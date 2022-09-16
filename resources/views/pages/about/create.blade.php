@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('about.index') }}">Tentang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Tentang</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Tentang</h4>
                @include('partials.errors')
                <form
                    action="@isset($about) {{ route('about.update', $about->id) }} @endisset @empty($about) {{ route('about.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($about)
                        @method('PUT')
                    @endisset
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" required name="title" class="form-control" id=""
                            value="{{ isset($about) ? $about->title : @old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description">Deskripsi</label>
                        <textarea required name="description" class="form-control" id="" cols="30" rows="10">{{ isset($about) ? $about->description : @old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar 1</label>
                        <input type="file" @empty($about) required @endempty accept="image/*"
                            class="form-control" name="image_1">
                        <small>Untuk Ukuran Maksimal 401px x 570px</small>
                    </div>
                    @isset($about)
                        <img src="{{ asset('uploads/' . $about->image_1) }}" height="100px" alt="">
                    @endisset
                    <hr>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar 2</label>
                        <input type="file" accept="image/*" class="form-control" name="image_2">
                        <small>Untuk Ukuran Maksimal 241px x 280px</small>
                    </div>
                    @isset($about)
                        <img src="{{ asset('uploads/' . $about->image_2) }}" height="100px" alt="">
                    @endisset
                    <hr>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar 3</label>
                        <input type="file" accept="image/*" class="form-control" name="image_3">
                        <small>Untuk Ukuran Maksimal 241px x 150px</small>
                    </div>
                    @isset($about)
                        <img src="{{ asset('uploads/' . $about->image_3) }}" height="100px" alt="">
                    @endisset
                    <hr>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" @empty($about) required @endempty accept="image/*"
                            class="form-control" name="icon">
                    </div>
                    @isset($about)
                        <img src="{{ asset('uploads/' . $about->icon) }}" height="100px" alt="">
                    @endisset
                    <hr>
                    <div class="text-end">
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
