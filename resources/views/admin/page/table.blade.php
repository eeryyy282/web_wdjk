@extends('admin.layout.master')

@section('title', 'Add Data')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input</h6>
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
            <form action="{{ route('table-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <select name="merk" id="merk" class="form-select" aria-label="Default select example">
                        <option value="Patrobas">Patrobas</option>
                        <option value="Ventela">Ventela</option>
                        <option value="Warrior">Warrior</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tipe" class="form-label">Tipe</label>
                    <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Tipe sepatu">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" placeholder="Masukan harga">
                </div>
                <div class="mb-3">
                    <label for="terjual" class="form-label">Jumlah Terjual</label>
                    <input type="number" class="form-control" id="terjual" name="terjual" placeholder="Jumlah barang terjual" value="0">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input id="rating" type="text" class="form-control" placeholder="Rating" name="rating" value="0">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Input Foto</label>
                    <input class="form-control" type="file" id="foto" multiple name="foto">
                </div>
                <div class="row mb-0">
                    <div class="">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
