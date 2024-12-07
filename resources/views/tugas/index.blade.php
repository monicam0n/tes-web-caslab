<!DOCTYPE html>
<html lang="en">

<head>
    <title>TUGAS PENDAHULUAN SEMUA PRAKTIKUM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Informatics Lab</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item justify-content-end">
                    <a href="{{route('tugas.create')}}" class="btn btn-primary ms-auto">Tambah Modul</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="row">
            <div class="col bg-secondary-subtle">
                <h2>TUGAS PENDAHULUAN SEMUA MATA KULIAH</h2>
                @foreach ($tugas as $t)
                <div class="mt-5">
                    <h3>{{$t->judul}}</h3>
                    <h4>{{$t->sub_judul}}</h4>
                    <div class="fakeimg">INI FOTO</div>
                    <h5>Kategori:{{$t->kategori}}</h5>
                    <h6>Tanggal Post:{{$t->tanggal}}</h6>
                    <h6><strong>Deadline:{{$t->deadline}}</strong></h6>
                    <p>Deskripsi: {{$t->deskripsi}}</p>
                    <a href="{{route('tugas.show', ['tugas'=>$t])}}" class="btn btn-secondary ms-auto">Tampilkan Selengkapnya</a>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
    </div>

</body>

</html>
