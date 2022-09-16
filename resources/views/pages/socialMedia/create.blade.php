@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('socialMedia.index') }}">Sosial Media</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Sosial Media</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Sosial Media</h4>
                @include('partials.errors')
                <form
                    action="@isset($socialMedia) {{ route('socialMedia.update', $socialMedia->id) }} @endisset @empty($socialMedia) {{ route('socialMedia.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($socialMedia)
                        @method('PUT')
                    @endisset
                    <div class="mb-3">
                        <label for="url" class="form-label">Url</label>
                        <input id="url" class="form-control" name="url" type="text" required
                            value="{{ isset($socialMedia) ? $socialMedia->url : @old('url') }}">
                    </div>
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input id="icon" class="form-control" name="icon" type="text" required
                            value="{{ isset($socialMedia) ? $socialMedia->icon : @old('icon') }}">
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
    <script type="text/javascript">
        var i = 0;
        $("#add-btn").click(function() {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" required name="name[' + i +
                ']" placeholder="Name" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });
    </script>
@endpush
