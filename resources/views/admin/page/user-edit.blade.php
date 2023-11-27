@extends('admin.layout.master')

@section('title', 'Add Data')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Data</h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('table-update', $shoe) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <select name="merk" id="merk" class="form-select" aria-label="Default select example">
                        <option value="Patrobas" {{ $shoe->merk === ('Patrobas') ? 'selected' : '' }}>Patrobas</option>
                        <option value="Ventela" {{ $shoe->merk === ('Ventela') ? 'selected' : '' }}>Ventela</option>
                        <option value="Warrior" {{ $shoe->merk === ('Warrior') ? 'selected' : '' }}>Warrior</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tipe" class="form-label">Tipe</label>
                    <input type="text" class="form-control" value="{{ $shoe->tipe }}" id="tipe" name="tipe" placeholder="Tipe sepatu">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ $shoe->harga }}" id="harga" placeholder="Masukan harga">
                </div>
                <div class="mb-3">
                    <label for="terjual" class="form-label">Jumlah Terjual</label>
                    <input type="number" class="form-control" id="terjual" value="{{ $shoe->terjual }}" name="terjual" placeholder="Jumlah barang terjual">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input id="rating" type="text" class="form-control" value="{{ $shoe->rating }}" placeholder="Rating" name="rating">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Input Foto</label>
                    <input class="form-control" type="file" id="foto" multiple name="foto"">
                    <img src="{{ asset($shoe->foto) }}" alt="" class="w-25">
                </div>
                <div class="row mb-0">
                    <div class="">
                        <button type="submit" class="btn btn-primary" onclick="updateData()">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scriptData')
<script>
    function updateData() {
        // Ambil elemen input file yang telah ada
        var existingFileInput = document.getElementById('existingFile');

        // Ambil elemen input file untuk file baru (opsional)
        var newFileInput = document.getElementById('newFile');

        // Cek apakah file baru dipilih
        if (newFileInput.files.length > 0) {
            // Jika file baru dipilih, ganti nilai file pada elemen yang telah ada
            existingFileInput.files = newFileInput.files;
        }

        // Lakukan update data yang lain
        // ... (lakukan sesuai kebutuhan)

        // Reset elemen input file untuk file baru (opsional)
        newFileInput.value = '';
    }
</script>
@endsection


