<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Krs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 100%;
            margin: auto;
        }
        .text-center {
            text-align: center;
        }
        .header-title {
            margin-bottom: 30px;
        }
        .info-box {
            background-color: #d9edf7;
            padding: 10px;
            border: 1px solid #bce8f1;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .total-row {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center header-title">
            <h1>Kartu Rencana Studi</h1>
            <h3>Lihat Jadwal Mata Kuliah yang Telah Diinputkan Disini</h3>
        </div>

        <div class="info-box">
            <strong>Mahasiswa: </strong> {{$mahasiswa->namaMhs}} |
            <strong>NIM: </strong> {{$mahasiswa->nim}} |
            <strong>IPK: </strong> {{$mahasiswa->ipk}}
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Kelp</th>
                    <th>Ruangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwalMhs as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->matakuliah }}</td>
                        <td>{{ $item->sks }}</td>
                        <td>{{ $item->kelp }}</td>
                        <td>{{ $item->ruangan }}</td>
                    </tr>
                @endforeach
                <tr class="total-row">
                    <td colspan="2">Total SKS</td>
                    <td colspan="3">{{ $totalSks }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
