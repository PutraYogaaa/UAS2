@extends('layouts.app')
@section("content")
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
@endif
    <form method="POST" action="{{route('daftar.store')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label"> Nama Bibit</label>
            <input type="text" class="form-control" @error('title') is-invalid @enderror name="title" value="{{old('title')}}" autofocus>
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>

            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label"> Keterangan </label>
            <textarea class="form-control" @error('content') is-invalid @enderror name="content" rows="10">"{{old('content')}}" </textarea>
            @error('content')
            <div class="alert alert-danger">{{$message}}</div>

            @enderror
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>

    </form>

@endsection
