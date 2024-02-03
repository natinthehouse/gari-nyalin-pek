@extends('layouts.app')

@section('content')

<div class="container">
  <a href="/home" class="btn btn-success">Back To Home</a>
  <a href="/createposts" class="btn btn-success">Tambah Postingan</a>
  <div class="row">
    @foreach( $posts as $post )
    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
  <div class="col">
    <div class="card">
      <div class="card-body d-flex justify-content-between">
        <h5><strong>{{ $user->name }}</strong></h5>
        <div class="dropdown">
          <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-three-dots-vertical"></i>
            </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item text-warning" href="/viewupdate/{{ $post->id }}">Sunting</a></li>
    <li><a class="dropdown-item text-danger" href="/delete/{{ $post->id }}">Hapus</a></li>
  </ul>
</div>
      </div>
      </body>
      <img src="{{ $post->image }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><strong>{{ $post->title }}</strong></h5>
        <p class="card-text">{{ $post->caption }}</p>
        <small class="text-body-tertiary">Diposting Tanggal {{ \Carbon\Carbon::parse($post->created_at)->locale("id")
          ->translatedFormat('j F, Y') }} Oleh {{ $user->name }}</small>
        </div>
      </div>
    </div>
        </div>
    @endforeach

  </div>
</div>

@endsection