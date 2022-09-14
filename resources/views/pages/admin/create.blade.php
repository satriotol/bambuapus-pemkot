@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('permission.index') }}">Permission</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Permission</li>
        </ol>
    </nav>

    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Permission</h4>
                @include('partials.errors')
                <form
                    action="@isset($permission) {{ route('permission.update', $permission->id) }} @endisset @empty($permission) {{ route('permission.store') }} @endempty"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($permission)
                        @method('PUT')
                    @endisset
                    <table class="table table-bordered" id="dynamicAddRemove">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="name[]" placeholder="Name" required class="form-control" />
                            </td>
                            <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add
                                    More</button></td>
                        </tr>
                    </table>
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
