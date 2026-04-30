<!DOCTYPE html>
<html>
<head>
    <title>Edit Postingan</title>
</head>
<body>
    <h1>Edit Postingan: {{ $post->judul }}</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <div>
            <label>Judul:</label><br>
            <input type="text" name="judul" value="{{ $post->judul }}">
        </div>

        <br>

        <div>
            <label>Konten:</label><br>
            <textarea name="konten" rows="5">{{ $post->konten }}</textarea>
        </div>

        <br>

        <div>
            <label>Ganti Gambar (Biarkan kosong jika tidak ingin ganti):</label><br>
            @if($post->gambar)
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/' . $post->gambar) }}" width="100"><br>
            @endif
            <input type="file" name="gambar">
        </div>

        <br>

        <button type="submit">Update Postingan</button>
        <a href="{{ route('posts.index') }}">Batal</a>
    </form>
</body>
</html>