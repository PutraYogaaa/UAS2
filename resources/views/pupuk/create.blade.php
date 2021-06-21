@extends('layouts.app')
@section("content")

<div class="container mt-5">
    <div class="col-lg-12">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif

    <form method="POST" action="{{route('pupuk.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="category">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>

                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="content" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control" name="file" accept="image/*">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Tambahkan</button>


    </form>

</div>

@endsection
