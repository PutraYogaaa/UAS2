@extends('layouts.app')
@section("content")
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
@endif
<section id="about" style="background-color:honeydew">
    <br>
    <div class="container mt-5">
        <div class="col-lg-12">
    <form method="POST" action="{{route('daftar.update', $daftars->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label"> Nama Bibit</label>
            <input type="text" class="form-control" @error('title') is-invalid @enderror name="title" value="{{old('title', $daftars->title)}}" autofocus>
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>

            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label"> Keterangan </label>
            <textarea class="form-control" @error('content') is-invalid @enderror name="content" rows="10">"{{old('content', $daftars->content)}}" </textarea>
            @error('content')
            <div class="alert alert-danger">{{$message}}</div>

            @enderror
        </div>
        <div class="form-group">
            <label> Gambar </label>
            <p><img src="{{asset('storage/'.$daftars->file)}}" class="img-thumbnail" width="200"></p>
            <br>
            <input type="file" class="form-control-form" name="file" accept="image/*">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">SIMPAN</button>

    </form>
</div>
</div>
<br>
</section>
@endsection
