@extends('layouts.app')
@section("content")

<div class="container mt-5">
    <div class="col-lg-12">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif

    <form method="POST" action="{{route('pupuk.update', $pupuks->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="category">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if(old('category',$pupuks->category_id)==$category->id) selected="selected"  @endif>{{$category->name}}</option>

                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="title" value="{{old('title', $pupuks->title)}}">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="content" class="form-control" rows="4">{{old('content', $pupuks->content)}}</textarea>
        </div>
        <div class="form-group">
            <label> Gambar </label>
            <p><img src="{{asset('storage/'.$pupuks->file)}}" class="img-thumbnail" width="200"></p>
            <br>
            <input type="file" class="form-control-form" name="file" accept="image/*">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create</button>


    </form>

</div>

@endsection
