@extends('layouts.app')
@section('content')
<section id="about" style="background-color:honeydew">
    <br>
    <div class="container mt-5">
        <div class="col-lg-12">
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{$pupuks->title}}</h1>
                </header>
                <h6 class="fw-bolder mb-1">{{$pupuks->Category->name}}</h6>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{asset('storage/'.$pupuks->file)}}" width="125" /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">{{$pupuks->content}}</p>
                </section>
            </article>
    </div>
</div>
<br>
</section
@endsection
