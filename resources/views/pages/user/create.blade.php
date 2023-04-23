@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Admin</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Admin</h4>
                @include('partials.errors')
                <form
                    action="@isset($user) {{ route('user.update', $user->id) }} @endisset @empty($user) {{ route('user.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($user)
                        @method('PUT')
                    @endisset
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" class="form-control" name="name" type="text" required
                            value="{{ isset($user) ? $user->name : @old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" class="form-control" name="email" type="email" required
                            value="{{ isset($user) ? $user->email : @old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input id="nik" class="form-control" name="nik" type="text" required
                            value="{{ isset($user) ? $user->user_detail->nik : @old('nik') }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor HP</label>
                        <input id="phone" class="form-control" name="phone" type="text" required
                            value="{{ isset($user) ? $user->user_detail->phone : @old('phone') }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Rumah</label>
                        <input id="address" class="form-control" name="address" type="text" required
                            value="{{ isset($user) ? $user->user_detail->address : @old('address') }}">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" @empty($user) required @endempty name="password"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Password Confirmation</label>
                        <input type="password" @empty($user) required @endempty
                            name="password_confirmation" class="form-control">
                    </div>
                    <div class="mb-3">
                        <img src="{{ asset('uploads/' . $user->image) }}" alt="">
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
