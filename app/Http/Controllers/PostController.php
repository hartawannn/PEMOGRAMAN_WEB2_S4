<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = \App\Models\Post::all();
        $posts = Post::latest()->get();
        
        return view('posts.index', compact('posts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       // Validasi input
    $request->validate([
        'judul'  => 'required',
        'konten' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
    ]);

    // Upload gambar
    $path = $request->file('gambar') ? $request->file('gambar')->store('posts', 'public') : null;

    // Simpan ke DB
    Post::create([
        'judul'  => $request->judul,
        'konten' => $request->konten,
        'gambar' => $path
    ]);

    // Setelah simpan, lempar ke halaman index
    return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['judul' => 'required', 'konten' => 'required']);

    if ($request->hasFile('gambar')) {
        if($post->gambar) Storage::disk('public')->delete($post->gambar);
        $post->gambar = $request->file('gambar')->store('posts', 'public');
    }

    $post->update([
        'judul'  => $request->judul,
        'konten' => $request->konten,
        'gambar' => $post->gambar
    ]);

    return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($post->gambar) Storage::disk('public')->delete($post->gambar);
    $post->delete();
    return redirect()->route('posts.index');
    }
}
