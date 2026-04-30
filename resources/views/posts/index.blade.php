<!DOCTYPE html>
<html>
<head>
    <title>Tambah Postingan Baru</title>
</head>
<body>
    <h1>Buat Postingan Baru</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div>
            <label>Judul:</label><br>
            <input type="text" name="judul" placeholder="Masukkan judul postingan">
        </div>

        <br>

        <div>
            <label>Konten:</label><br>
            <textarea name="konten" rows="5" placeholder="Tuliskan isi postingan"></textarea>
        </div>

        <br>

        <div>
            <label>Pilih Gambar:</label><br>
            <input type="file" name="gambar">
        </div>

        <br>

        <button type="submit">Simpan Postingan</button>
        <a href="{{ route('posts.index') }}">Kembali</a>
    </form>
</body>
</html>