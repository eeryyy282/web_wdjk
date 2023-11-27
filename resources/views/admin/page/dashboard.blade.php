@extends('admin.layout.master')

@section('title', 'Shoes Data')

@section('cssData')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Sepatu</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered user-Datatable" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Merk</th>
                            <th>Tipe</th>
                            <th>Harga</th>
                            <th>Terjual</th>
                            <th>Rating</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scriptData')
<script type="text/javascript">
    $(function () {
        var table = $('.user-Datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('dashboard') }}",
            columns: [
                {data: 'merk', name: 'Merk'},
                {data: 'tipe', name: 'Tipe'},
                { data: 'harga', name: 'Harga'},
                {data: 'terjual', name: 'Terjual'},
                {data: 'rating', name: 'Rating'},
                {
                    data: 'foto',
                    name: 'Foto',
                    render: function(data, type, full, meta) {
                        // Membuat URL lengkap untuk gambar
                        var imageUrl = "{{ asset('/') }}" + data;
                        
                        // Menampilkan gambar dengan URL lengkap
                        return `<img src="${imageUrl}" alt="Foto" class="img-fluid">`;
                    }
                },
                {
                    data: null, name: 'Action',
                    render: function(data) {
                        return `
                        <a href="{{ url('admin') }}/${data.id}/edit" class="btn btn-warning mb-2 w-100">Edit</a>
                        <form action="{{ url('admin') }}/${data.id}/destroy" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger w-100" data-confirm-delete="true" type="submit">
                                    Delete
                                </button>
                        </form>
                        `
                    }
                },
            ]
        });
        
    });
</script>
@endsection