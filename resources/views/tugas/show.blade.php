<!DOCTYPE html>
<html lang="en">

<head>
    <title>TUGAS PENDAHULUAN</title>
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
            <div class="col">
                <div class="mt-5">
                    <h2>{{$tugas->judul}}</h2>
                    <h3>{{$tugas->sub_judul}}</h3>
                    <div class="fakeimg">INI FOTO</div>
                    <h5>Kategori:{{$tugas->kategori}}</h5>
                    <h6>Tanggal Post:{{$tugas->tanggal}}</h6>
                    <h6><strong>Deadline:{{$tugas->deadline}}</strong></h6>
                    <p>Deskripsi: {{$tugas->deskripsi}}</p>
                </div>

                <div class="d-flex justify-content-start mt-5">
                    <div>
                        <a href="{{route('tugas.index')}}" class="btn btn-secondary ms-auto">Kembali</a>
                    </div>
                    <div>
                        <a href="{{route('tugas.edit', ['tugas'=>$tugas])}}" class="btn btn-primary ms-auto">Edit Tugas</a>
                    </div>
                    <div>
                        <form method="post" action="{{route('tugas.delete', ['tugas'=>$tugas])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Hapus Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
