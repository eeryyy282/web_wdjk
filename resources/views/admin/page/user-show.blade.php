@extends('admin.layout.master')

@section('title', 'Shoe Detail')

    
@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail data {{ $user->id }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="card-title">
                    <h3>{{ $user->name }}</h3>
                    {{ $user->email }}<br>
                    {{-- @dd($user) --}}
                    <img src="{{ asset($user->foto) }}" alt="Foto" width="200px"><br>
                    {{ $user->profil->jenisKelamin }}<br>
                    {{ $user->profil->address }}<br>
                </div>
                <div>
                    <a href="{{ route('user') }}" class="btn btn-primary me-2">Kembali</a>
                    <a href="{{ route('user-edit', $user->id) }}" class="btn btn-warning me-2">Edit</a>
                    <a href="{{ route('user-destroy', $user->id) }}" class="btn btn-danger" data-confirm-delete="true">
                        Delete
                    </a>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection