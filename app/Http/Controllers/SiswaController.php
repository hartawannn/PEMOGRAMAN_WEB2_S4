<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        // Data array siswa
        $siswas = [
            ['nama' => 'Anggi Hartawadi', 'nim' => 'SI21240042', 'prodi' => 'Sistem Informasi'],
            ['nama' => 'Azhari', 'nim' => 'SI21240045', 'prodi' => 'Sistem Informasi'],
            ['nama' => 'Fahrurrazy', 'nim' => 'SI21240050', 'prodi' => 'Sistem Informasi'],
        ];

        // Mengirim data ke view 'siswa.index'
        return view('siswa', compact('siswas'));
    }
}
