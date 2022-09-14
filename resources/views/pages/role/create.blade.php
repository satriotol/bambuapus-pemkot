@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('role.index') }}">Role</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Role</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Role</h4>
                @include('partials.errors')
                <form
                    action="@isset($role) {{ route('role.update', $role->id) }} @endisset @empty($role) {{ route('role.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($role)
                        @method('PUT')
                    @endisset
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" required class="form-control" id=""
                            value="{{ isset($role) ? $role->name : @old('name') }}">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">

                            <label for="name" class="form-label">Permission</label> <br>
                            <div class="form-check corm-check-inline">
                                <label class="form-check-label" for="checkAll">Select All</label>
                                <input type="checkbox" class="form-check-input" id="checkAll">
                            </div>
                            @empty($role)
                                <div class="row">
                                    @foreach ($permissions as $value)
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    {{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name form-check-input']) }}
                                                    {{ $value->name }}</label>
                                                <br />
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endempty
                            @isset($role)
                                <div class="row">
                                    @foreach ($permissions as $value)
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                                <label
                                                    class="form-check-label">{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name form-check-input']) }}
                                                    {{ $value->name }}</label>
                                                <br />
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endisset
                        </div>
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
    <script>
        $("#checkAll").click(function() {
            $('.name').not(this).prop('checked', this.checked);
        });
    </script>
@endpush
