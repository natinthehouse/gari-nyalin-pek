@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Selamat Datang, <strong>{{ Auth::user()->name }}</strong>

                   <p><a href=/form>buat postingan</a></p>
                    lihat postingan : <b>{{ Auth::user()->posts()->count() }}</b>
                   <p><a href=/lihat>lihat postingan anda</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
