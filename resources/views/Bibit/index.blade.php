@extends('layouts.app')
@section('content')
<section id="about" style="background-color:honeydew">
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
@endif

<body>
    <br>
    <div class="container mt-5">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Bibit</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Aksi</>
                    </tr>
                </thead>
                <div class="row">
                    <div class="col-md-10">
                        <form class="form-inline" action="{{route('daftar.index')}}" method="GET">
                            <div class="input-group custom-search-form">
                                <input type="search" name="search" class="form-control" placeholder="cari..." value="{{request()->get('search')}}">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-success">Search</button>
                                    </span>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <p><a class="btn btn-success" href="{{route('daftar.create')}}" role="button">Tambah Data</a></p>
                        @if (count($daftars)<1)
                        <p> Belum Ada Data </p>
                        @else
                            @foreach ($daftars as $index=> $item )
                            <tr>
                                <td scope= "row">{{$index+1}}</td>
                                <td><a href="{{route('daftar.show', $item->id)}}">{{$item->title}}</a></td>
                                <td>{{Str::limit($item->content, 255)}}</td>
                                <td><img src="{{asset('storage/'.$item->file)}}" width="125">    </td>
                                <td><a class="btn btn-primary" href="{{route('daftar.edit', $item->id)}}" role="button">Ubah Data</a>

                                    <form action="{{route('daftar.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="sumbit" class="btn btn-danger"> Hapus Data</button>

                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </div>
                </div>
            </table>
        </div>
    </div>
    <br>
</body>
</section>
    {{$daftars->render()}}
@endsection
