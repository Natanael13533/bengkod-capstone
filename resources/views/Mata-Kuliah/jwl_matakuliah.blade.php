<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Input Krs</title>
</head>
<body>
    <div class="container">
        <div class="text-center mt-5 mb-3">
            <h1>Sistem Input Kartu rencana Studi (KRS)</h1>
            <h3>Input data KRS mahasiswa dengan mudah dan cepat</h3>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-5">
            <h1 class="h3 mb-3"><strong>Input KRS Mahasiswa</strong></h1>
            <div class="mb-2">
                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputKRSModal">
                    Input Data Mahasiswa
                </button>
                @include('Mata-Kuliah.input_krs')
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
            {{ session('error') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Kelp</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwalMhs as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->matakuliah }}</td>
                        <td>{{ $item->sks }}</td>
                        <td>{{ $item->kelp }}</td>
                        <td>{{ $item->ruangan }}</td>
                        <td>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteJadwalModal{{ $item->id }}">Hapus</button>
                            @include('Mata-Kuliah.delete_jwl')
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>
