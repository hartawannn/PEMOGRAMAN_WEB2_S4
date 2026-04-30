<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bladee</title>
</head>
<body>
    <h1>halo {{ $nama }}!</h1>
    <p>nilai anda{{$nilai}}</p>
    @if($nilai >= 80)
        <p>Selamat! Anda mendapatkan nilai A.</p>
    @elseif($nilai >= 60)
        <p>Anda mendapatkan nilai B.</p>
    @else
        <p>Anda perlu mengulang ujian.</p>
    @endif

    <hr>

    @for($i = 1; $i <= 5; $i++)
        <p>Nomor: {{ $i }}</p>
    @endfor
</body>
</html>