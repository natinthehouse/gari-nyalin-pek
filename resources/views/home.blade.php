@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang, {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        
                        <h3>Mulai Buat Postingan Anda</h3>
                        <a href="{{ route('createposts') }}">
                          <button class="btn btn-primary">tambah postingan</button>
                        </a>
                </div>
                
            </div>
            <br>
            <h2 class="text-center">statistik</h2>
            <br>
            <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Postingan Anda</h5> 
        <p class="card-text">Jumlah Postingan yang Anda Post</p>
          <div class="row">
            <div class="col">
            <h2 class="d-flex justify-content-between" id="total-post">{{ Auth::user()->posts()->count() }}</h2>
            </div>
            <div class="col">
            <h2><i class="bi bi-postcard-heart-fill"></i></h2>
            </div>
            
          </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Postingan Anda</h5>
        <p class="card-text">Di sini anda bisa melihat postingan yang sudah anda posting.</p>
        <a href="/index" class="btn btn-primary">lihat postingan</a>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>
@endsection
