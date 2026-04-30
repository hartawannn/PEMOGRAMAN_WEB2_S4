@extends('layout.dashboard')

@section('konten')
    <h2>Profil Pengguna</h2>
    <div style="background: #f5f5f5fc; padding: 10px; border-radius: 8px;">
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Alamat:</strong> {{ $alamat }}</p>
    </div>
@endsection