<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="text-center mt-5 mb-3">
            <h1>Sistem Input Kartu rencana Studi (KRS)</h1>
            <h3>Input data mahasiswa Disini!</h3>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-5">
            <h1 class="h3 mb-3"><strong>Data Mahasiswa</strong></h1>
            <div class="mb-2">
                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputMahasiswaModal">
                    Input Data Mahasiswa
                </button>
                @include('mahasiswa.input')
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama Mahasiswa</th>
                        <th scope="col" class="text-center">IPK</th>
                        <th scope="col" class="text-center">SKS Maksimal</th>
                        <th scope="col" class="text-center">Matkul yang diambil</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $item)
                        <tr>
                            <th scope="row" class="text-center">{{ $item->id }}</th>
                            <td class="text-center">{{ $item->namaMhs }}</td>
                            <td class="text-center">{{ $item->ipk }}</td>
                            <td class="text-center">{{ $item->sks }}</td>
                            <td class="text-center">
                                @if ($item->jadwalMhs->isEmpty())
                                    <p class="text-center">-</p>
                                @else
                                    @foreach ($item->jadwalMhs as $jadwal)
                                        {{ $jadwal->matakuliah }},
                                    @endforeach
                                @endif
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteMahasiswaModal{{ $item->id }}">Hapus</button>
                                @include('mahasiswa.delete_mhs')
                                <a href="{{ route('mahasiswa.edit', $item->id) }}"><button class="btn btn-sm btn-warning">Edit</button></a>
                                <button class="btn btn-sm btn-secondary">Lihat</button>
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
