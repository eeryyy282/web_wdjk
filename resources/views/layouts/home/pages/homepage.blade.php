@extends('layouts.home.layout.master')

@section('title', 'WDJK | Homepage')

@section('content')
  <div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach($shoe as $shoe)
    <div class="col">
      <a href="{{ route('user.show', $shoe->id) }}" class="text-decoration-none">
        <div class="card h-100 card-sepatu" style="position: relative">
          <img src="{{ asset($shoe->foto) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title">{{ $shoe->tipe }}</p>
            <p class="card-text fw-semibold">{{ "Rp " . number_format($shoe->harga, 0, ',', '.') }}</p>
            <p class="card-text"><i class="bi bi-star-fill" style="color: #FFAC33"></i> {{ $shoe->rating }} | {{ $shoe->terjual }} terjual</p>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
@endsection