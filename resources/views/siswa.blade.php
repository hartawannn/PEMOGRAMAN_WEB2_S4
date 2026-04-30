<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Siswa</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Daftar Mahasiswa Sistem Informasi</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $key => $siswa)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $siswa['nim'] }}</td>
                    <td>{{ $siswa['nama'] }}</td>
                    <td>{{ $siswa['prodi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>