@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Form Profile</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Profile</h4>
                @include('partials.errors')
                <form
                    action="@isset($user) {{ route('profile.update') }} @endisset @empty($user) {{ route('profile.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <label>Password</label>
                        <input type="password" @empty($user) required @endempty name="password"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Password Confirmation</label>
                        <input type="password" @empty($user) required @endempty
                            name="password_confirmation" class="form-control">
                    </div>
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
