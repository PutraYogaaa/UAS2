@extends('layouts.app')
@section('content')
    <section id="about" style="background-color:honeydew">
        <br>
            <body>
                <div class="container mt-6">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Bibit</th>
                                    <th>Keterangan</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>



                                    <div class="col-md-10">
                                        <form class="form-inline" action="/search" method="get">
                                            <div class="input-group custom-search-form">
                                                <input type="search" name="search" class="form-control" placeholder="cari...">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-success">Search</button>
                                                    </span>
                                            </div>
                                        </form>
                                    </div>

                                @if (count($daftars)<1)
                                <p> Belum Ada Data </p>
                                @else
                                    @foreach ($daftars as $index=> $item )
                                    <tr>
                                        <td scope= "row">{{$index+1}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{Str::limit($item->content, 255)}}</td>
                                        <td><img src="{{asset('storage/'.$item->file)}}" width="125">    </td>
                                        <td><a class="btn btn-primary" href="{{route('daftar.show', $item->id)}}" role="button">Detail Data</a></td>
                                        </td>

                                    </tr>
                                    @endforeach
                                @endif
                        </table>
                    </div>
                    {{$daftars->render()}}
                </div>

            </body>
        <br>
    </section>

@endsection
