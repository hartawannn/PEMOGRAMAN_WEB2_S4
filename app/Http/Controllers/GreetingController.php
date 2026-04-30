<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function showGreeting()
    {
        $pesan = "anjay berhasil";
        return view('greeting', ['pesan' => $pesan]);
        // Atau bisa juga menggunakan: return view('greeting', compact('pesan'));
    }
}
