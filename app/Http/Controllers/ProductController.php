<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pastikan diawali dengan nama variabel $products
        $product = [
            ['nama' => 'Laptop', 'harga' => 15000000, 'stok' => 10, 'gambar' => 'laptop.jpg'],
            ['nama' => 'Mouse', 'harga' => 200000, 'stok' => 50, 'gambar' => 'mouse.jpg'],
            ['nama' => 'Monitor', 'harga' => 300000, 'stok' => 30, 'gambar' => 'monitor.jpg'],
        ]; // <-- Pastikan ada tutup kurung array dan titik koma

        // Pastikan ini di bawah variabel $products
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
