@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Terjadi Kesalahan Dengan Inputan Anda</strong>
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
