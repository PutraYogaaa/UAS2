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
                    <h1 class="fw-bolder mb-1">{{$daftars->title}}</h1>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{asset('storage/'.$daftars->file)}}" width="200" /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">{{$daftars->content}}</p>
                </section>
            </article>
    </div>
</div>
<br>
</section
@endsection
