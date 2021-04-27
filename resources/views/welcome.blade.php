@extends('layouts.app')
@section('title')
    Home
@endsection

@section('content')


<!-- Section -->
<section class="jumbotron text-center">
    <br>
    <img src="{{asset('gambar/bibit.png')}}" alt="logo" width="180" />
    <h1 class="display-4">Sistem Informasi Pertanian</h1>
    <p class="lead">Bibit | Pupuk | Peptisida</p>
    <br>
</section>
<!-- akhir sction -->
<!-- About -->
<section id="about" style="background-color:honeydew">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <br>
                <h2>Tentang</h2>
                <p>
                    Halaman Website ini membahas mengenai sektor dibidang pertanian yaitu Bibit, Pupuk, dan Peptidida.
                    Mulai dari jenis bibit maupun yang lain, cara penggunaan, tips dan trik, dan lain sebagainya yang akan dikembangkan.
                </p>
                <br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-4">
                <h3>Bibit</h3>
                <p>
                    Bibit adalah bahan tanam yang berasal dari benih yang disemai dan telah berkecambah untuk
                    menuju proses pertumbuhan dan perkembangan tanam selanjutnya. Ciri dari bibit adalah sudah
                    tumbuhnya akar, daun dan batang.
                </p>
            </div>
            <div class="col-sm-4">
                <h3>Pupuk</h3>
                <p>Pupuk adalah material yang ditambahkan pada media tanam atau tanaman
                    untuk mencukupi kebutuhan hara yang diperlukan tanaman sehingga mampu
                    berproduksi dengan baik. Material pupuk dapat berupa bahan organik ataupun
                    non-organik (mineral). Pupuk berbeda dari suplemen. Pupuk mengandung bahan baku yang
                    diperlukan pertumbuhan dan perkembangan tanaman, sementara suplemen seperti hormon
                    tumbuhan membantu kelancaran proses metabolisme. Meskipun demikian, ke dalam pupuk,
                    khususnya pupuk buatan, dapat ditambahkan sejumlah material suplemen.
                </p>
            </div>
            <div class="col-sm-4">
                <h3>Peptisida</h3>
                <p>Pestisida atau pembasmi hama adalah bahan yang digunakan untuk mengendalikan, menolak,
                    atau membasmi organisme pengganggu. Nama ini berasal dari pest yang diberi akhiran -cide.
                    Sasarannya bermacam-macam, seperti serangga, tikus, gulma, burung, mamalia, ikan, atau mikrobia
                    yang dianggap mengganggu.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end about -->
<!-- ISI -->
<!-- End Isi -->
@endsection
