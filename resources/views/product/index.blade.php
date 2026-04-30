<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin-top: 20px; font-family: sans-serif; }
        th, td { border: 1px solid #ebdede; padding: 10px; text-align: left; }
        th { background-color: #f4eeee; }
        
    </style>
</head>
<body>

    <h2> Produk yang Terdaftar</h2>

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            {{-- Ini adalah bagian paling penting (Implementasi Blade) --}}
             @foreach ($product as $item) 
            <tr>
                <td>{{ $item['nama'] }}</td>
                <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                <td>{{ $item['stok'] }} unit</td>
                <td><img src="{{ asset('gambar/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" width="100"></td>
            </tr>
             @endforeach  
        </tbody>
    </table>

</body>
</html>