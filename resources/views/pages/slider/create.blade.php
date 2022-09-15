@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('slider.index') }}">Slider</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Slider</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Slider</h4>
                @include('partials.errors')
                <form
                    action="@isset($slider) {{ route('slider.update', $slider->id) }} @endisset @empty($slider) {{ route('slider.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($slider)
                        @method('PUT')
                    @endisset
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id=""
                            value="{{ isset($slider) ? $slider->name : @old('name') }}">
                    </div>
                    <div class="mb-2">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ isset($slider) ? $slider->description : @old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Gambar</label>
                        <input type="file" required accept="image/*" class="form-control" name="image">
                    </div>
                    @isset($slider)
                        <img src="{{ asset('uploads/' . $slider->image) }}" height="100px" alt="">
                    @endisset
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
