@extends('layouts.app')
@section('content')
<section id="about" style="background-color:honeydew">


    <br>
    <div class="container mt-5">
        <div class="col-lg-12">
            <p><a class="btn btn-success" href="{{route('pupuk.create')}}" role="button">Tambah Data</a></p>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pupuk</th>
                        <th>Jenis Pupuk</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <body>

                    @foreach ($pupuks as $index=> $pupuk )
                    <tr>
                    <td scope="row">{{$index+1}}</td>
                    <td scope="row"><a href="{{route('pupuk.detail',$pupuk->id)}}">{{$pupuk->title}}</a></td>
                    <td scope="row">{{$pupuk->Category->name}}</td>
                    <td scope="row">{{Str::limit($pupuk->content),150 }}</td>
                    <td><img src="{{asset('storage/'.$pupuk->file)}}" width="125"></td>
                    <td scope="row"><a class="btn btn-primary" href="{{route('pupuk.edit',$pupuk->id)}}" role="button">Edit</a> <a class="btn btn-danger" href="{{route('pupuk.delete',$pupuk->id)}}" role="button">Delete</a> </td>
                    </tr>
                    @endforeach
                </body>

            </table>
            {{$pupuks->render()}}
        </div>
    </div>
    <br>
</section>

@endsection
