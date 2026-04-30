<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Laravel</title>
    <style>
        body { font-family: sans-serif; display: flex; margin: 0; }
        .sidebar { width: 200px; background: #1786e0; color: white; height: 100vh; padding: 20px; }
        .content { flex: 1; padding: 20px; }
        .sidebar a { color: white; text-decoration: none; display: block; margin: 10px 0; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>Menu</h3>
        <a href="/profile">Profil Saya</a>
        <a href="/daftar_siswa">Daftar Siswa</a>
    </div>

    <div class="content">
        @yield('konten')
    </div>

</body>
</html>