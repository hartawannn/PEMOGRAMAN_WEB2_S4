<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Mengirim data ke view
        return view('layout.profile', [
            'nama' => 'Anggi Hartawadi',
            'email' => 'hartarawadi@gmail.com',
            'alamat' => 'Lombok, Nusa Tenggara Barat'
        ]);
    }
}
