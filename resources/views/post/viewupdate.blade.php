@extends('layouts/app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
                Update Postingan Anda
        </div>
        <div class="card-body">
            <form action="/update/{{$post->id}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Update Postingan Anda</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ $post->title}}">
                     <small style="color: grey">Abaikan jika tidak diubah</small>
                    </div>
                    <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Caption</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="caption">{{ $post->caption }}</textarea>
                    </div>
                    <div class="mb-3">
                     <label for="formFile" class="form-label">unggah gambar<span class="text-danger"> jangan diubah jika tidak mau</span></label>
                     <input class="form-control" type="file" id="formFile" accept="jpg,jpeg,image/png,image/jpeg" name="image">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
    </div>
</div>

@endsection