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
            <h1>Kartu Rencana Studi</h1>
            <h3>Lihat Jadwal Mata Kuliah yang Telah Diinputkan Disini</h3>
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

        <div class="list-group">
            <div class="list-group-item list-group-item-info p-3 border rounded mb-4 d-flex justify-content-between align-items-center">
                <div>
                    <strong>Mahasiswa : </strong> {{$mahasiswa->namaMhs}} |
                    <strong>NIM : </strong> {{$mahasiswa->nim}} |
                    <strong>IPK : </strong> {{$mahasiswa->ipk}}
                </div>
                <a href="{{ route('mahasiswa') }}"><button class="btn btn-warning">Kembali ke data Mahasiswa</button></a>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col" class="align-middle">No</th>
                        <th scope="col" class="align-middle">Mata Kuliah</th>
                        <th scope="col" class="align-middle">SKS</th>
                        <th scope="col" class="align-middle">Kelp</th>
                        <th scope="col" class="align-middle">Ruangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwalMhs as $item)
                        <tr>
                            <th scope="row" class="align-middle">{{ $loop->iteration }}</th>
                            <td class="align-middle">{{ $item->matakuliah }}</td>
                            <td class="align-middle">{{ $item->sks }}</td>
                            <td class="align-middle">{{ $item->kelp }}</td>
                            <td class="align-middle">{{ $item->ruangan }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="2" class="align-middle"><strong>SKS</strong></td>
                        <td class="align-middle">{{ $totalSks }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="{{ route('mahasiswa.download.pdf', $mahasiswa->id) }}">
            <button class="btn btn-sm btn-success">Cetak PDF</button>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>
