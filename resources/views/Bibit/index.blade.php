@extends('layouts.app')
@section('content')
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
@endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Bibit</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <body>
            <p><a class="btn btn-success" href="{{route('daftar.create')}}" role="button">Tambah Data</a></p>
            @if (count($daftars)<1)
            <p> Belum Ada Data </p>

            @else
                @foreach ($daftars as $index=> $item )
                <tr>
                    <td scope= "row">{{$index+1}}</td>
                    <td><a href="{{route('daftar.show', $item->id)}}">{{$item->title}}</a></td>
                    <td>{{Str::limit($item->content, 255)}}</td>
                    <td><a class="btn btn-primary" href="{{route('daftar.edit', $item->id)}}" role="button">Ubah Data</a>
                        <form action="{{route('daftar.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="sumbit" class="btn btn-danger"> Hapus Data</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </body>
    </table>
    {{$daftars->render()}}
@endsection
