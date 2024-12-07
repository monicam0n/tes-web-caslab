<!DOCTYPE html>
<html lang="en">

<head>
    <title>TAMBAH DATA TUGAS PENDAHULUAN</title>
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
                    <a href="{{route('tugas.create')}}" class="btn btn-primary ms-auto">Tambah tugas</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>TAMBAH DATA TUGAS PENDAHULUAN</h2>

            </div>
        </div>
    </div>
    <div class="col mt-5 fs-4 p-3">
        <form class="form fs-4" method="post" action="{{route('tugas.store')}}">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" style="width: 150px;" id="basic-addon1">Judul </span>
                <input type="text" name="judul" class="form-control" placeholder="Judul Tugas" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width: 150px;" id="basic-addon1">Sub Judul</span>
                <input type="text" name="sub_judul" class="form-control" placeholder="Sub Judul" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width: 150px;" id="basic-addon1">Kategori</span>
                <input type="text" name="kategori" class="form-control" placeholder="Kategori" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width: 150px;" id="basic-addon1">Tanggal Post</span>
                <input type="text" name="tanggal" class="form-control" placeholder="Tanggal post" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width: 150px;" id="basic-addon1">Deadline</span>
                <input type="text" name="deadline" class="form-control" placeholder="Deadline" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span style="width: 150px;" class="input-group-text">Deskripsi</span>
                <textarea placeholder="Deskripsi..." class="form-control" name="deskripsi" rows="5" cols="50" aria-label="With textarea"></textarea>
            </div>
                <button type="submit" class="btn btn-success">Tambah Data Tugas</button>
                <a href="{{route('tugas.index')}}" class="btn btn-secondary ms-auto">Kembali</a>
            </div>
        </form>

</body>

</html>
